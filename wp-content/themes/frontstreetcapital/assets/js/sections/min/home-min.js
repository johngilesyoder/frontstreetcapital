!function(e,o,s){e(function(){"use strict";
// Init Hero Carousel
e(document).ready(function(){e("#hero-carousel").slick({fade:!0,dots:!0,arrows:!1,autoplay:!0,autoplaySpeed:6e3,speed:1e3,pauseOnHover:!1,pauseOnDotsHover:!0})}),
// Init Insights Carousel
e(document).ready(function(){e("#insights-carousel").slick({dots:!1,slidesToShow:4,infinite:!1,nextArrow:e("#carousel-next"),prevArrow:e("#carousel-prev"),responsive:[{breakpoint:767,// mobile breakpoint
settings:{slidesToShow:1.25,slidesToScroll:1}},{breakpoint:992,// mobile breakpoint
settings:{slidesToShow:2.25,slidesToScroll:1}}]})}),
// Init video modal
e(".js-modal-btn").modalVideo()})}(jQuery,this);