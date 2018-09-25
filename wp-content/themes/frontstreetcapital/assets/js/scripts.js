(function ($, root, undefined) {

	$(function () {
		'use strict';
		// DOM ready, take it away

		// Mobile header toggle (open)
		$(document).on('click', '[data-type="open-header-menu"]', function() {
		  $("#off-canvas-menu").toggleClass( "is--open" );
			$("body").toggleClass( "no-scroll" );
		});
		// Mobile header toggle (close)
		$(document).on('click', '[data-type="close-header-menu"]', function() {
		  $("#off-canvas-menu").toggleClass( "is--open" );
			$("body").toggleClass( "no-scroll" );
		});


		// Account Access toggle (open)
		$(document).on('click', '[data-type="open-account-access"]', function() {
		  $("#account-access").toggleClass( "is--open" );
			$("body").toggleClass( "no-scroll" );
		});
		// Account Access toggle (close)
		$(document).on('click', '[data-type="close-account-access"]', function() {
		  $("#account-access").toggleClass( "is--open" );
			$("body").toggleClass( "no-scroll" );
		});

	});

})(jQuery, this);
