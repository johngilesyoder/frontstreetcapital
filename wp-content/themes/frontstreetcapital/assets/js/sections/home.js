(function ($, root, undefined) {

  $(function () {
    'use strict';

    // Init Slick Carousel
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

  });

})(jQuery, this);
