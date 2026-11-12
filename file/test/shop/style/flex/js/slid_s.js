// pc slide

var bullet = ['P1TZ', '22a2', '3', '4', '5'];

var swiper2 = new Swiper(".mySwiper", {

effect: "fade",
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
    el: '.swiper-pagination',
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


