!function(n,t,o){n(function(){"use strict";
// DOM ready, take it away
// Mobile header toggle (open)
n(document).on("click",'[data-type="open-header-menu"]',function(t){t.preventDefault(),n("#off-canvas-menu").toggleClass("is--open")}),
// Mobile header toggle (close)
n(document).on("click",'[data-type="close-header-menu"]',function(){n("#off-canvas-menu").toggleClass("is--open")}),
// Account Access toggle (open)
n(document).on("click",'[data-type="open-account-access"]',function(){n("#off-canvas-menu").removeClass("is--open"),n("#account-access").toggleClass("is--open"),n("body").toggleClass("no-scroll")}),
// Account Access toggle (close)
n(document).on("click",'[data-type="close-account-access"]',function(){n("#account-access").toggleClass("is--open"),n("body").toggleClass("no-scroll")}),
// Map the Gravity Form fields for the newsletter signup form
n("input[data-input='email']").keyup(function(){var t=n(this).val();n("#input_2_1").attr("value",t)}).keyup(),n("button[data-input='submit']").on("click",function(){n("#gform_submit_button_2").click()}),n("input[data-input='email-blog']").keyup(function(){var t=n(this).val();n("#input_2_1").attr("value",t)}).keyup(),n("button[data-input='submit-blog']").on("click",function(){n("#gform_submit_button_2").click()})})}(jQuery,this);