
$(document).ready(function() {
  initSlickSlider();
  function initSlickSlider() {

    jQuery('.testimonial-slider').slick({
      slidesToScroll: 1,
      slidesToShow: 2,
      autoplay: true,
      arrows: false,
      dots: true,
      speed: 800,
      autoplaySpeed: 2000,
    });
  }
});




