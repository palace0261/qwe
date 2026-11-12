
// 슬라이드 쇼 기능
document.addEventListener('DOMContentLoaded', function() {
const slideList = document.querySelector('.slide-list');
const slides = document.querySelectorAll('.slide-list li');
const prevBtn = document.querySelector('.slide-prev');
const nextBtn = document.querySelector('.slide-next');
let current = 0;
let autoSlideTimer = null;
let isDragging = false;
let startX = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID = 0;

function updateSlide() {
slideList.style.transform = `translateX(-${current * slides[0].offsetWidth}px)`;
prevBtn.disabled = current === 0;
nextBtn.disabled = current === slides.length - 1;
}
// 슬라이드 업데이트 후 비디오 재검사(슬라이드 이동으로 인한 자동재생 보장)
function updateSlideAndRecheck(){
  updateSlide();
  try{ window.dispatchEvent(new Event('updateVideos')); }catch(e){}
}

function goToSlide(idx) {
current = Math.max(0, Math.min(idx, slides.length - 1));
updateSlideAndRecheck();
}

function autoSlide() {
autoSlideTimer = setInterval(() => {
if (current < slides.length - 1) {
current++;
} else {
current = 0;
}
updateSlide();
}, 5000);
}

function stopAutoSlide() {
clearInterval(autoSlideTimer);
}

prevBtn.addEventListener('click', function() {
goToSlide(current - 1);
stopAutoSlide();
autoSlide();
});

nextBtn.addEventListener('click', function() {
goToSlide(current + 1);
stopAutoSlide();
autoSlide();
});

window.addEventListener('resize', updateSlide);

// Keyboard navigation
document.addEventListener('keydown', function(e) {
if (e.key === 'ArrowLeft') {
prevBtn.click();
} else if (e.key === 'ArrowRight') {
nextBtn.click();
}
});

// Mouse drag
slideList.addEventListener('mousedown', function(e) {
isDragging = true;
startX = e.pageX;
prevTranslate = -current * slides[0].offsetWidth;
slideList.style.transition = 'none';
stopAutoSlide();
});

document.addEventListener('mousemove', function(e) {
if (!isDragging) return;
const dx = e.pageX - startX;
currentTranslate = prevTranslate + dx;
slideList.style.transform = `translateX(${currentTranslate}px)`;
});

document.addEventListener('mouseup', function(e) {
if (!isDragging) return;
isDragging = false;
slideList.style.transition = 'transform 0.4s cubic-bezier(.4,0,.2,1)';
const dx = e.pageX - startX;
if (dx < -50 && current < slides.length - 1) {
current++;
} else if (dx > 50 && current > 0) {
current--;
}
  updateSlideAndRecheck();
autoSlide();
});

// Touch drag for mobile
slideList.addEventListener('touchstart', function(e) {
isDragging = true;
startX = e.touches[0].pageX;
prevTranslate = -current * slides[0].offsetWidth;
slideList.style.transition = 'none';
stopAutoSlide();
});

slideList.addEventListener('touchmove', function(e) {
if (!isDragging) return;
const dx = e.touches[0].pageX - startX;
currentTranslate = prevTranslate + dx;
slideList.style.transform = `translateX(${currentTranslate}px)`;
});

slideList.addEventListener('touchend', function(e) {
if (!isDragging) return;
isDragging = false;
slideList.style.transition = 'transform 0.4s cubic-bezier(.4,0,.2,1)';
const dx = e.changedTouches[0].pageX - startX;
if (dx < -50 && current < slides.length - 1) {
current++;
} else if (dx > 50 && current > 0) {
current--;
}
  updateSlideAndRecheck();
autoSlide();
});

updateSlideAndRecheck();
autoSlide();
});





  document.addEventListener('DOMContentLoaded', function() {
  const slideList = document.querySelector('.slide-list');
  const slides = document.querySelectorAll('.slide-list li');
  const prevBtn = document.querySelector('.slide-prev');
  const nextBtn = document.querySelector('.slide-next');
  let current = 0;
  function updateSlide() {
  slideList.style.transform = `translateX(-${current * slides[0].offsetWidth}px)`;
  prevBtn.disabled = current === 0;
  nextBtn.disabled = current === slides.length - 1;
  }
  prevBtn.addEventListener('click', function() {
  if (current > 0) {
  current--;
  updateSlide();
  }
  });
  nextBtn.addEventListener('click', function() {
  if (current < slides.length - 1) {
  current++;
  updateSlide();
  }
  });
  window.addEventListener('resize', updateSlide);
  updateSlide();
  });

  

// 슬라이드 쇼 초기화
document.addEventListener('DOMContentLoaded', function() {
const slideList = document.querySelector('.slide-list');
const slides = document.querySelectorAll('.slide-list li');
});
const prevBtn = document.querySelector('.slide-prev');
const nextBtn = document.querySelector('.slide-next');
let current = 0;  