
  document.addEventListener('DOMContentLoaded', function () {
    const slides = Array.from(document.querySelectorAll('.slide'));
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const dotsContainer = document.querySelector('.dots');
    let index = slides.findIndex(s => s.classList.contains('active'));
    if (index < 0) index = 0;

    // 도트 생성
    slides.forEach((_, i) => {
      const d = document.createElement('button');
      d.className = 'dot';
      d.type = 'button';
      d.dataset.index = i;
      d.addEventListener('click', () => goTo(i));
      dotsContainer.appendChild(d);
    });

    function update() {
      slides.forEach((s, i) => {
        const text = s.querySelector('.slide-text');
        const isActive = i === index;
        s.classList.toggle('active', isActive);
        // 애니메이션을 부드럽게 적용하기 위해 requestAnimationFrame 사용
        if (isActive) {
          // 강제 레이아웃 후 애니메이션 클래스 추가
          requestAnimationFrame(() => requestAnimationFrame(() => text.classList.add('animate-up')));
        } else {
          text.classList.remove('animate-up');
        }
      });
      Array.from(dotsContainer.children).forEach((d, i) => d.classList.toggle('active', i === index));
    }

    function goTo(i) {
      index = (i + slides.length) % slides.length;
      update();
      resetAuto();
    }

    prevBtn.addEventListener('click', () => goTo(index - 1));
    nextBtn.addEventListener('click', () => goTo(index + 1));

    // 자동 재생
    let timer = setInterval(() => goTo(index + 1), 5000);
    function resetAuto() { clearInterval(timer); timer = setInterval(() => goTo(index + 1), 50000); }

    // 초기 업데이트 (페이지 로드시 텍스트 올라오는 효과)
    update();
  });