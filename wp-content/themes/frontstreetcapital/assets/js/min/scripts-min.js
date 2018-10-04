!function(c,o,e){c(function(){"use strict";
// DOM ready, take it away
// Mobile header toggle (open)
c(document).on("click",'[data-type="open-header-menu"]',function(o){o.preventDefault(),c("#off-canvas-menu").toggleClass("is--open")}),
// Mobile header toggle (close)
c(document).on("click",'[data-type="close-header-menu"]',function(){c("#off-canvas-menu").toggleClass("is--open")}),
// Account Access toggle (open)
c(document).on("click",'[data-type="open-account-access"]',function(){c("#off-canvas-menu").toggleClass("is--open"),c("#account-access").toggleClass("is--open"),c("body").toggleClass("no-scroll")}),
// Account Access toggle (close)
c(document).on("click",'[data-type="close-account-access"]',function(){c("#account-access").toggleClass("is--open"),c("body").toggleClass("no-scroll")})})}(jQuery,this);