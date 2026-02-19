const swiper = new Swiper('.examples-section__swiper', {
  slidesPerView: 'auto',
  autoplay: true,
  spaceBetween: 20,
  loop: true,
  grabCursor: true,

  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },

  speed: 600,

  breakpoints: {
    0: {
      spaceBetween: 8,
    },
    1024: {
      spaceBetween: 20,
    },
  },
});
