!function(o,e,c){o(function(){"use strict";
// DOM ready, take it away
// Mobile header toggle (open)
o(document).on("click",'[data-type="open-header-menu"]',function(e){e.preventDefault(),o("#off-canvas-menu").toggleClass("is--open")}),
// Mobile header toggle (close)
o(document).on("click",'[data-type="close-header-menu"]',function(){o("#off-canvas-menu").toggleClass("is--open")}),
// Account Access toggle (open)
o(document).on("click",'[data-type="open-account-access"]',function(){o("#off-canvas-menu").removeClass("is--open"),o("#account-access").toggleClass("is--open"),o("body").toggleClass("no-scroll")}),
// Account Access toggle (close)
o(document).on("click",'[data-type="close-account-access"]',function(){o("#account-access").toggleClass("is--open"),o("body").toggleClass("no-scroll")})})}(jQuery,this);