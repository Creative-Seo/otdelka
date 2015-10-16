var AW = (function($) {

	var init = function() {

		// maps functionality
		if(typeof GoogleMap !== 'undefined')
			GoogleMap.init();

		// destinations functionality
		if(typeof Destinations !== 'undefined') 
			Destinations.init();

		// trips functionality
		if(typeof Trips !== 'undefined') 
			Trips.init();

		// trips functionality
		if(typeof Testimonials !== 'undefined') 
			Testimonials.init();

		// set backgrounds with data attribute
		$('.set-background').each(function(index) {

			$(this).css({ 'background-image':'url(' + $(this).data('background') + ')' });

		});

		// handle the lack of SVG support
		if(!Modernizr.svg) {
			
			$('img[src*="svg"]').attr('src', function() {
				return $(this).attr('src').replace('.svg', '.png');
			});
		
		} else {

			// replace svg with raw svg code
			jQuery('img.svg-raw').each(function(){
	            var $img = jQuery(this);
	            var imgID = $img.attr('id');
	            var imgClass = $img.attr('class');
	            var imgURL = $img.attr('src');

	            jQuery.get(imgURL, function(data) {
	                // Get the SVG tag, ignore the rest
	                var $svg = jQuery(data).find('svg');

	                // Add replaced image's ID to the new SVG
	                if(typeof imgID !== 'undefined') {
	                    $svg = $svg.attr('id', imgID);
	                }
	                // Add replaced image's classes to the new SVG
	                if(typeof imgClass !== 'undefined') {
	                    $svg = $svg.attr('class', imgClass+' replaced-svg');
	                }

	                // Remove any invalid XML tags as per http://validator.w3.org
	                $svg = $svg.removeAttr('xmlns:a');

	                // Replace image with new SVG
	                $img.replaceWith($svg);

	            }, 'xml');

	        });

		}

		// open prompt functionality
		//$('#search-btn a').on("click", function() { toggleOpen('#search .modal-overlay', 'modal-open'); });
		$('.viewmore-down').on("click", function() { toggleOpen('#formcall .modal-overlay', 'modal-open'); });

		/* search blink */
		$('#search-txt').on("focus", function() { $('#search-sep').removeClass('doblink'); });
		$('#search-txt').on("blur", function() { $('#search-sep').addClass('doblink'); });

		// toggle mobile menu
		$('#menu-btn a, #mobile-nav-hold .priem, #mobile-nav-hold .dop_slash').on("click", function() { 
			toggleOpen('#header-viewport', 'cart-slide-open');
			toggleOpen('#viewport-slide', 'cart-slide-open');
			toggleOpen('.mobile-nav', 'mobile-nav-open');
		});

		// navigation snap
		$('#navigation-category-hold').waypoint(function(direction) {

			$('#viewport').toggleClass('fixed-height', direction === 'up');
			$('#fixed-main').toggleClass('fixed-body', direction === 'up');
			$('#navigation-category').toggleClass('fixed-category-nav', direction === 'down');

		});


	//contact form send

	// Submit form
	$('#sendContact').submit(function(e) {
				
		var data = $(this).serialize();
		var $theForm = $(this);
		var status, message;

		if( 1==1 ) {
			
			$theForm.find('button').prop('disabled', true).hide();
			$theForm.find('.loader').show();
			$theForm.find('.formResponse').empty();

			$.post("../ajax/contact.php", data, function(data) {
				
				if( data.result == 'ok' ) {

					status = 'ok';
					message = data.fields.name + ', thank you for your interest. We will contact you shortly.';
					//ga('send', 'event', 'Goal', 'Contact');

				} else if ( data.result == 'timeout' ) {

					status = 'error';
					message = 'Oops, it looks like the server timed out, please try again.';

				} else if ( data.result == 'error') {

					status = 'error';
					message = 'Please check that your email address is valid.';

				} else {

					status = 'error';
					message = 'Oops, something has gone wrong, plesae try again or give us a call.'

				}

				$('.loader').hide();
				$('.formResponse').addClass(status).html('<p>'+ message +'</p>');

			},'json');	
		
		} else {
			
			
		}

	});

	//end contact form send


	//reservation form send

	// Submit form
	$('#makeReservation').submit(function(e) {
				
		var data = $(this).serialize();
		var $theForm = $(this);
		var status, message;

		if( 1==1 ) {
			
			$theForm.find('button').prop('disabled', true).hide();
			$theForm.find('.loader').show();
			$theForm.find('.formResponse').empty();

			$.post("../ajax/reservation.php", data, function(data) {
				
				if( data.result == 'ok' ) {

					status = 'ok';
					
					message = data.fields.name + ', thank you for your reservation.';

					$('#introInfo').hide();
					$('#makeReservation').hide();
					$('#formSuccess').show();
					$("html, body").animate({ scrollTop: 0 }, "slow");
						


					//ga('send', 'event', 'Goal', 'Contact');

				} else if ( data.result == 'timeout' ) {

					status = 'error';
					message = 'Oops, it looks like the server timed out, please try again.';

				} else if ( data.result == 'error') {

					status = 'error';
					message = 'Please check that your email address is valid.';

				} else {

					status = 'error';
					message = 'Oops, something has gone wrong, please try again or give us a call.'

				}

				$('.loader').hide();
				$('.formResponse').addClass(status).html('<p>'+ message +'</p>');

			},'json');	
		
		} else {
			
			
		}

	});

	//end reservation form send




	};

	var toggleOpen = function(selector, newClass) {

		$(selector).toggleClass(newClass);

	}

	var scrollTo = function(id) {
		
		// Stop any currently active scroll
		$('html, body').dequeue();
		// Scroll to #id offset by 90 pixels
		$('html, body').animate({ scrollTop: $(id).offset().top-80 }, 1000, 'easeOutExpo');
	
	};
	
	return {
		init: init,
		scrollTo: scrollTo,
		toggleOpen: toggleOpen
	};

}(jQuery));

$(function() {
	AW.init();
});