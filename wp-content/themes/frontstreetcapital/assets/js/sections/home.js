(function ($, root, undefined) {

  $(function () {
    'use strict';

    // Init Hero Carousel
    $(document).ready(function(){
      $('#hero-carousel').slick({
        fade: true,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 1000,
        pauseOnHover: false,
        pauseOnDotsHover: true
      });
    });

    // Init Insights Carousel
    $(document).ready(function(){
      $('#insights-carousel').slick({
        dots: false,
        slidesToShow: 4,
        infinite: false,
        nextArrow: $('#carousel-next'),
        prevArrow: $('#carousel-prev'),
        responsive: [
          {
            breakpoint: 767, // mobile breakpoint
            settings: {
              slidesToShow: 1.25,
              slidesToScroll: 1,
            }
          }
        ]
      });
    });

    // Init video modal
    $(".js-modal-btn").modalVideo();

  });

})(jQuery, this);
