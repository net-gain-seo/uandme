(function($) {

	$(document).on('mailsent.wpcf7', function (e) {
		$form=jQuery(e.target);
	
		if($form.attr('id').search('f151')!=-1){
			//__gaTracker('send','event','Form','Submit','Contact');
			gtag('event', 'Submit', {
			  'event_category': 'Form',
			  'event_label': 'Contact'
			});
		}
		else if($form.attr('id').search('f149')!=-1){
			//__gaTracker('send','event','Form','Submit','Footer');
			gtag('event', 'Submit', {
			  'event_category': 'Form',
			  'event_label': 'Footer'
			});
		}
		else if($form.attr('id').search('f257')!=-1){
			//__gaTracker('send','event','Form','Submit','Popup');
			gtag('event', 'Submit', {
			  'event_category': 'Form',
			  'event_label': 'Popup'
			});
		}
	});

	$('a[href^="tel:"]').click(function(){
		var href = $(this).attr('href');
		if ($(window).width() < 601) {
			//__gaTracker('send','event','Phone','Click',href);
			gtag('event', 'Click', {
			  'event_category': 'Phone',
			  'event_label': href
			});
		}
	});

	var stickAt;
	var windowWidth;
	var isSticky = false;

	var nav        = $('#mainNav');
	var siteHeader = $("#flexHeader");

	function doResizeActions(sticky) {


		windowWidth = window.innerWidth;
		if(sticky) {
			stickAt  = $(siteHeader).innerHeight();
		}

		// Mobile or desktop nav
		if( windowWidth < 992 ) {
			$(nav).removeClass('main-nav').addClass('mobile-nav');
		} else {
			$(nav).addClass('main-nav').removeClass('mobile-nav');
		}

		return true;

	}

	$(document).ready(function() {
		doResizeActions(true);
	});

	// @todo set/check variable for peformance optimization
	$(window).on('resize', function() {
		doResizeActions(false); // don't recalculate sticky-header
	});


	$(document).on("scroll", function() {
		if ( $(document).scrollTop() >= stickAt ) {
			if(!isSticky) {
				$("body").addClass("sticky-header");
				isSticky = true;
			}
		} else {
			if(isSticky) {
				$("body").removeClass("sticky-header");
				isSticky = false;
			}
		}
	});

	$('#navToggle, #closeNav, #openNavOverlay').on('click', function() {
		// console.log($(this));
		// return false;
		if($(this).context.className != 'get-quote') {
			$(mainNav).toggleClass('open');
			$('#closeNav').toggleClass('open');
			$('body').toggleClass('no-scroll');
		} else {
			$(mainNav).removeClass('open');
			$('#closeNav').removeClass('open');
			$('body').removeClass('no-scroll');
		}
	});

})(jQuery);
