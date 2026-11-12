(function(){
  // Minimal AJAX submit for saleorder form with retry/backoff
  function jsonFetch(url, body, opts) {
    opts = opts || {};
    var retries = opts.retries || 2;
    var timeout = opts.timeout || 10000;
    var attempt = 0;
    function attemptFetch(resolve, reject) {
      attempt++;
      var controller = new AbortController();
      var id = setTimeout(function(){ controller.abort(); }, timeout);
      fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(body),
        signal: controller.signal,
        credentials: 'same-origin'
      }).then(function(res){ clearTimeout(id); return res.json ? res.json().catch(function(){ return { ok: res.ok, status: res.status, text: null }; }) : Promise.resolve(null); })
      .then(function(data){ resolve(data); })
      .catch(function(err){ clearTimeout(id); if (attempt <= retries) { setTimeout(function(){ attemptFetch(resolve,reject); }, 300 * attempt); } else reject(err); });
    }
    return new Promise(attemptFetch);
  }

  function collectMinimal(form) {
    var fd = new FormData(form);
    var minimal = {};
    var fields = ['action','com_code','env','user_id','api_cert_key','login_path','session_id','cust','wh_cd','prod_cd','qty','price','upload_ser_no'];
    fields.forEach(function(k){ if (fd.get(k) !== null) minimal[k] = fd.get(k); });
    return minimal;
  }

  document.addEventListener('DOMContentLoaded', function(){
    var f = document.getElementById('db-insert');
    if (!f) return;
    f.addEventListener('submit', function(e){
      e.preventDefault();
      var payload = collectMinimal(f);
      // quick UI feedback
      var btn = f.querySelector('button[type="submit"]');
      if (btn) { btn.disabled = true; btn.dataset.orig = btn.innerText; btn.innerText = '전송중...'; }
      jsonFetch(location.pathname.replace(/\/[^\/]*$/, '') + '/index.php', payload, { retries: 2, timeout: 15000 })
      .then(function(res){
        if (btn) { btn.disabled = false; btn.innerText = btn.dataset.orig || '전송'; }
        if (res && res.ok) {
          alert('전송 성공');
          window.location.reload();
        } else {
          alert('전송 실패: ' + (res && (res.error || res.text || res.message) ? (res.error || res.text || res.message) : '서버 오류'));
        }
      }).catch(function(err){ if (btn) { btn.disabled = false; btn.innerText = btn.dataset.orig || '전송'; } alert('전송 실패: ' + err.message); });
    }, false);
  });
})();