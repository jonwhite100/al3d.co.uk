window.addEventListener('load', function () {
	// Animate loader off screen
	jQuery('.se-pre-con').fadeOut('slow');

	// Stop carousel from autoplaying
	jQuery('#cptbc_401').carousel({
		// interval: 7000,
		// wrap: false,
		pause: 'hover',
		ride: true,
	});
});

jQuery(document).ready(function ($) {
	// scroll to an id smoothly: taniarascia.com/smooth-scroll-to-id-with-jquery/
	$('a[href^="#"]').click(function (e) {
		var position = $($(this).attr('href')).offset().top;

		e.preventDefault();

		$('body, html').animate({
			scrollTop: position,
		}, 330, 'linear');
	});

	// animate.css - add animate and fadeIn with a staggered delay
	// to all card-flip (scrollReveal hides them on unseen tabs)
	function addAnimatedClasses() {
		var cardFlipClass = document.querySelectorAll('.entry-title');

		cardFlipClass.forEach(function (element, index) {
			element.classList.add('animated', 'fadeInUpBig', 'delay-' + index + 's');
		});
	}

	addAnimatedClasses();

	$('.nav-pills a').on('shown.bs.tab', function () {
		addAnimatedClasses();
	});

	// image  function to apply the image source URL to the parent div (and then hide <img />)
	$('.carousel-item').each(function () {
		$(this).css('background-image', 'url(' + $(this).find('img').attr('src') + ')');
		$(this).find('img').remove();
	});
	$('.img-to-parent').each(function () {
		$(this).css('background-image', 'url(' + $(this).find('img').attr('src') + ')');
		$(this).find('img').remove();
	});
	// var imageClass = ['.carousel-item', '.img-to-parent'];
	//
	// imageClass.forEach( function () {
	// 	$(this).css('background-image', 'url(' + $(this).find('img').attr('src') + ')');
	// 	$(this).find('img').remove();
	// });



	// using ScrollReveal
	// var scrollRevealClass = ['.card','.wp-block-image', '.block-gallery-item'];
	//
	// scrollRevealClass.forEach( function() {
	// 	ScrollReveal().reveal($(this), { interval: 200 });
	// 	console.log('boogie');
	// });

	ScrollReveal().reveal('.card', { interval: 200 });
	ScrollReveal().reveal('.wp-block-image', { interval: 200 });
	ScrollReveal().reveal('.blocks-gallery-item', { interval: 200 });
	ScrollReveal().reveal('.section', { interval: 200 });
});
