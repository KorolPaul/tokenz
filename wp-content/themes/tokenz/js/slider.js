/**
 * File slider.js.
 *
 * Initialize slider.
 *
 * Learn more: http://kenwheeler.github.io/slick/
 */
( function($) {
	$('.slider_item').wrapAll( "<div class='slider'></div>" );

	$( document ).ready(function(){
		$('.slider').slick({
			adaptiveHeight: true,
			infinite: false
		});
	})
} )( jQuery );
