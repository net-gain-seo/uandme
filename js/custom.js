(function($) {

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

        // initiate slider
        $('#testimonials').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            fade: true,
            arrows: false
            // prevArrow: $(".slick-testimonial-prev"),
            // nextArrow: $(".slick-testimonial-next")
        }).show();
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
