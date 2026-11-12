(function(){
  const scriptTag = document.currentScript || (function(){ const s = document.getElementsByTagName('script'); return s[s.length-1]; })();
  const threshold = parseFloat(scriptTag && scriptTag.dataset && scriptTag.dataset.threshold) || 0.5;
  const debounceMs = parseInt(scriptTag && scriptTag.dataset && scriptTag.dataset.debounce) || 200;

  document.addEventListener('DOMContentLoaded', function(){
    const videos = Array.from(document.querySelectorAll('video'));
    if(!videos.length) return;
    videos.forEach(v=>{ v.muted = true; v.setAttribute('playsinline',''); try{ v.pause(); }catch(e){} });

    const visibility = new WeakMap();
    let isScrolling = false;
    let scrollTimer = null;
    const obsThresholds = [0, 0.25, 0.5, 0.75, 1];

    const observer = new IntersectionObserver((entries)=>{
      entries.forEach(entry => {
        const v = entry.target;
        visibility.set(v, entry.intersectionRatio || 0);
        const needsStop = v.classList.contains('scroll-stop-play');
        const visibleEnough = (entry.intersectionRatio || 0) >= threshold;

        if(needsStop){
          if(!isScrolling && visibleEnough){
            const p = v.play(); if(p && p.catch) p.catch(()=>{});
          } else {
            try{ v.pause(); }catch(e){}
          }
        } else {
          if(visibleEnough){
            const p = v.play(); if(p && p.catch) p.catch(()=>{});
          } else {
            try{ v.pause(); }catch(e){}
          }
        }
      });
    }, { threshold: obsThresholds });

    videos.forEach(v=> observer.observe(v));

    // 다른 비디오 재생 시 중복 재생 방지 및 종료 시 다음 비디오 자동 재생
    videos.forEach(v=>{
      v.addEventListener('play', ()=>{ videos.forEach(o=>{ if(o!==v){ try{o.pause(); }catch(e){} } }); });
      v.addEventListener('ended', ()=>{
        const arr = videos;
        const idx = arr.indexOf(v);
        const next = arr[idx+1];
        if(next){ const p = next.play(); if(p && p.catch) p.catch(()=>{}); }
      });
    });

    // 즉시 화면 가시성 재검사 및 재생(슬라이드 이동 등 스크롤 이벤트가 아닐 때 사용)
    function recheckAndPlayImmediate(){
      videos.forEach(v=>{
        try{
          const rect = v.getBoundingClientRect();
          const vh = window.innerHeight || document.documentElement.clientHeight;
          const visibleHeight = Math.min(rect.bottom, vh) - Math.max(rect.top, 0);
          const visibleRatio = rect.height > 0 ? Math.max(0, Math.min(1, visibleHeight / rect.height)) : 0;
          const needsStop = v.classList.contains('scroll-stop-play');
          if(visibleRatio >= threshold && !isScrolling){ const p = v.play(); if(p && p.catch) p.catch(()=>{}); }
          else { try{ v.pause(); }catch(e){} }
        }catch(e){}
      });
    }
    window.addEventListener('updateVideos', recheckAndPlayImmediate);

    window.addEventListener('scroll', ()=>{
      isScrolling = true;
      if(scrollTimer) clearTimeout(scrollTimer);

      // 즉시 일시정지: 스크롤-정지 조건이 필요한 비디오들
      videos.forEach(v=>{ if(v.classList.contains('scroll-stop-play')) try{ v.pause(); }catch(e){} });

      scrollTimer = setTimeout(()=>{
        isScrolling = false;
        // 스크롤 멈추면 화면에 충분히 보이는 scroll-stop 비디오만 재생
        videos.forEach(v=>{
          if(!v.classList.contains('scroll-stop-play')) return;
          if((visibility.get(v) || 0) >= threshold){ const p = v.play(); if(p && p.catch) p.catch(()=>{}); }
        });
      }, debounceMs);
    }, { passive: true });

    // 문서 숨김 처리 시 모든 비디오 일시정지
    document.addEventListener('visibilitychange', ()=>{
      if(document.hidden){ videos.forEach(v=>{ try{ v.pause(); }catch(e){} }); }
    });
  });
})();
