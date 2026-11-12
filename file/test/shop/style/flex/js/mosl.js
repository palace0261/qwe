// mobile slide 

var bullet = ['PTZ', '22a2', '3', '4', '5'];

var swiper3 = new Swiper(".Swiper1", {

autoplay: {
delay: 5500,
disableOnInteraction: false
},

on: {
autoplayTimeLeft(s, time, progress) {
progressCircle.style.setProperty("--progress", 1 - progress);
progressContent.textContent = `${Math.ceil(time / 1000)}s`;
}
},
  pagination: {
    el: '.swiper1-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<div class="' + className + '"><span>' + (bullet[index]) + '</span></div>';
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});


