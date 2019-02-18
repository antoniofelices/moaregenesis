/**
 * Remove anchor border hover, anchor contain images.
 */
(function($) {

	$('img').parent('a').addClass('contains-image');

})(jQuery);

/*
 * Add wrap and class embed-responsive videos
 */
(function($) {

	var $iframes = $('.entry-content p:has(iframe)');
	var $iframesContent = $('.entry-content p > iframe');
	$iframes.wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
	$iframesContent.addClass('embed-responsive-item');

})(jQuery);
