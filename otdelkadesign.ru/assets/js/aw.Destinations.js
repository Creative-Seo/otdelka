var Destinations = (function($) {

	var currentDestination;

	var init = function() {

		// set current destination index
		currentDestination = 2;

		// handle destination point clicks
		$('.destination-point a').on("click", showDestination);

		// hide destinations
		$('#destinations-desc .destination-text-slide').each(function(index) {

			if(index > 2 || index < 2) $(this).hide();

		});

		// hide destination imagges
		$('#destinations .destination-image').hide();
		$('#destinations .destination-image:eq(2)').show();

	};

	var showDestination = function() {

		// check if clicked current visible destination
		if($(this).data('index') == currentDestination) return;

		// set new destination index
		currentDestination = $(this).data('index');

		$('.destination-point a').removeClass('active');
		$(this).addClass('active');

		$('#destinations .destination-image').fadeOut(400);
		$('#destinations .destination-image:eq(' + currentDestination + ')').fadeIn(400);

		$('#destinations-desc .destination-text-slide').fadeOut(400);
		$('#destinations-desc .destination-text-slide:eq(' + currentDestination + ')').fadeIn(400);

	};

	return {
		init: init
	};

}(jQuery));