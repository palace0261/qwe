<?php
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AF Sender</title>
</head>
<body style="max-width: 1000px; margin: 0 auto;">

<div style="display: flex; height: 40px; align-items: center; gap: 8px; margin-top: 16px;">
<form id="af-form" autocomplete="off">
<label for="tzz">tzz</label>
<input type="text" id="tzz" name="tzz" value="">
<button type="submit">Submit</button>
</form>
</div>260327

<div id="status" aria-live="polite" style="margin-top:8px;color:#006;"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('af-form') || document.querySelector('form');
  const status = document.getElementById('status');
  if (!form || !status) return;

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    status.style.color = '#006';
    status.textContent = '전송 중...';

    const submitBtn = form.querySelector('button[type="submit"]');
    if (submitBtn) submitBtn.disabled = true;

    try {
      const tzzVal = (form.querySelector('#tzz')?.value || form.querySelector('[name="tzz"]')?.value || '').toString().trim();
      if (tzzVal === '') {
        status.style.color = '#900';
        status.textContent = 'tzz 값이 비어 있습니다.';
        return;
      }

      // 원격 테스트 서버로 조회/전송
      const CLOUD_ERPDB = 'https://port-9000-testphp-ma6q5cjy22737d6f.sel4.cloudtype.app/test/api/ec/erpdb.php';
      // 로컬 프록시를 통해 원격에 접근하면 CORS 문제를 회피할 수 있습니다.
      const LOCAL_PROXY = 'proxy_erpdb.php';
      // 기본은 로컬 프록시 사용(브라우저 -> 로컬 -> 원격). 원하면 CLOUD_ERPDB로 직접 호출하도록 변경하세요.
      let listUrl = LOCAL_PROXY + '?tzz=' + encodeURIComponent(tzzVal) + '&_=' + Date.now();

      const res = await fetch(listUrl, { method: 'GET', credentials: 'same-origin' });
      const text = await res.text();

      // 서버가 매칭 여부를 헤더로 전달하면 우선 확인
      const headerMatched = (res.headers.get('X-Order-Matched') === '1');
      const headerMatchedOrder = res.headers.get('X-Matched-Order') || null;

      if (!res.ok) {
        status.style.color = '#900';
        status.textContent = '목록 조회 실패: ' + res.status + ' ' + res.statusText;
        return;
      }

      if (!headerMatched) {
        status.style.color = '#900';
        status.textContent = '매칭된 주문번호를 찾지 못했습니다. 전송을 중단합니다.';
        return;
      }

      status.style.color = '#060';
      status.textContent = '목록 조회 완료. 매칭된 주문번호: ' + headerMatchedOrder + ' — API 전송 준비 중...';

      const parser = new DOMParser();
      const doc = parser.parseFromString(text, 'text/html');

      const esc = (window.CSS && typeof CSS.escape === 'function')
        ? CSS.escape
        : function (v) { return String(v).replace(/["\\]/g, '\\$&'); };

      // 우선적으로 erpdb.php 내의 `orderno` 입력값과 tzz를 비교하여 같은 그룹의 전송폼을 찾음
      let apiForm = null;
      try {
        const ordernoInputs = Array.from(doc.querySelectorAll('input[name="orderno"]'));
        for (const inp of ordernoInputs) {
          // 서버 헤더가 제공한 매칭값이 있으면 그것을 우선 사용
          const matchTarget = headerMatchedOrder || tzzVal;
          if ((inp.value || '').toString().trim() === matchTarget) {
            const tb = inp.closest ? inp.closest('tbody.order-group') : null;
            if (tb) {
              apiForm = tb.querySelector('form.group-api-form') || tb.querySelector('form[method][action*="index.php"]');
            }
            if (!apiForm) apiForm = doc.querySelector('form.group-api-form');
            break;
          }
        }
      } catch (e) {
        apiForm = null;
      }

      // fallback: 기존 방식(데이터-오더 매칭 또는 일반 index.php form)
      if (!apiForm) {
        const scopedSelector = 'tbody.order-group[data-order="' + esc(tzzVal) + '"] form[method][action*="index.php"]';
        apiForm = doc.querySelector(scopedSelector) || doc.querySelector('form[method][action*="index.php"]');
      }

      if (!apiForm) {
        status.style.color = '#900';
        status.textContent = 'API 전송용 form(index.php)을 찾지 못했습니다.';
        return;
      }

      // 전송 대상: 로컬 프록시를 통해 원격 서버에 POST
      const apiUrl = LOCAL_PROXY;

      const payload = new URLSearchParams();
      const apiInputs = apiForm.querySelectorAll('input, select, textarea');

      apiInputs.forEach(function (el) {
        const name = el.getAttribute('name');
        if (!name) return;

        if (el.tagName === 'INPUT') {
          const type = (el.getAttribute('type') || '').toLowerCase();
          if (type === 'checkbox' || type === 'radio') {
            if (el.checked) payload.append(name, el.value);
          } else {
            payload.append(name, el.value);
          }
        } else if (el.tagName === 'SELECT') {
          payload.append(name, el.value);
        } else if (el.tagName === 'TEXTAREA') {
          payload.append(name, el.value);
        }
      });

      // 전송할 payload에 `orderno`가 포함되지 않으면 서버 헤더의 매칭값을 우선 추가
      if (!payload.has('orderno')) {
        if (headerMatchedOrder) {
          payload.append('orderno', headerMatchedOrder);
        } else {
          status.style.color = '#900';
          status.textContent = '전송용 orderno를 찾을 수 없어 전송을 중단합니다.';
          if (submitBtn) submitBtn.disabled = false;
          return;
        }
      }

      const apiRes = await fetch(apiUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
        },
        body: payload.toString(),
        // 원격 서버로 전송하므로 기본적으로 credentials는 제외
        credentials: 'omit',
        redirect: 'follow'
      });

      if (apiRes.ok) {
        status.style.color = 'rgb(0, 255, 85)';
        status.textContent = 'API 전송 완료.';
      } else {
        const apiErrText = await apiRes.text();
        status.style.color = '#900';
        status.textContent = 'API 전송 실패: ' + apiRes.status + ' ' + apiRes.statusText + (apiErrText ? ' / ' + apiErrText.slice(0, 120) : '');
      }
    } catch (err) {
      status.style.color = '#900';
      status.textContent = '전송 중 오류: ' + (err?.message || String(err));
    } finally {
      if (submitBtn) submitBtn.disabled = false;
    }
  });
});
</script>

</body>
</html>
