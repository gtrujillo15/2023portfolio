(function ($, root, undefined) {
	$(function () {
		'use strict';

        $(window).scroll(function (event) {
            $('.animation-content').css('visibility', 'visible');
            $('.animation-content').addClass('fade-down');
        });

    });
})(jQuery, this);