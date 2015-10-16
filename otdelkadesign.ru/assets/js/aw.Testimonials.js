var Testimonials = (function($) {

	var $slider;
	var $sliderNav;

	var slideCur = 0;
	var slideNext = 0;
	var slideTotal = 0;

	var init = function() {

		// cache selectors
		$slider = $('#testimonial-slider');
		$sliderNav = $('#testimonial-nav');

		// set slide total
		slideTotal = $slider.find('.testimonial-slide').length - 1;

		// set default slide states
		$slider.find('.testimonial-slide').each(function(index) {

			if(index != 0) $(this).fadeOut(0);

		});

		// set first testimonial nav active
		$sliderNav.find('a.client:eq(0)').addClass('active');
		// set listener for testimonial nav
		$sliderNav.on("click", "a.client", goToItem);

	};

	var goToItem = function(e) {

		// make sure current item doesn't get double clicked
		if(slideNext == $(this).index('.client')) return;

		// animate to new item
		slideCur = slideNext;
		slideNext = $(this).index('.client');

		// animate to new item
		animateTestimonials();

	};

	var previous = function() {

		// set up correct indexes of next slide
		slideCur = slideNext;
		slideNext = slideNext == 0 ? slideTotal : slideNext - 1;

		// animate to new item
		animateTestimonials();

	};

	var next = function() {

		// set up correct indexes of next slide
		slideCur = slideNext;
		slideNext = slideNext == slideTotal ? 0 : slideNext + 1;
		
		// animate to new item
		animateTestimonials();

	};

	var animateTestimonials = function() {

		// cache selectors
		$('.testimonial-slide').eq(slideNext).fadeIn('slow');
		$('.testimonial-slide').eq(slideCur).fadeOut('slow');

		// fade slides
		

		$('#testimonial-name').html($sliderNav.find('a.client:eq(' + slideNext + ')').data('client'));

		// adjust testimonial nav
		$sliderNav.find('a.client').removeClass('active');
		$sliderNav.find('a.client:eq(' + slideNext + ')').addClass('active');


	};

	return {
		init: init,
		next: next,
		previous: previous
	};

}(jQuery));