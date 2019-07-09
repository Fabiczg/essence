jQuery(document).ready(function () {
	jQuery('.slider-post').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		prevArrow: jQuery('.flechas-le'),
		nextArrow: jQuery('.flechas-ri'),
		//arrows: false,
	});
});




