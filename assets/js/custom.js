(function ($) {
	$('.btn1').click(function () {
		window.location.href = url +'/contact_us';
	});

	$('.btn2').click(function () {
		window.location.href = url + '/about';
	});

	$('.dropdownmenu').hover(
		function () {
			$('.dropdown-menu').addClass('show');
		},
		function () {
			$('.dropdown-menu').removeClass('show');
		}
	);
})(jQuery);