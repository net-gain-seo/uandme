// Main front page slider
jQuery('#fpSlider').slick({
    dots         : false,
    infinite     : true,
    speed        : 300,
    autoplay     : true,
    autoplaySpeed: 6000,
    arrows       : false
    // prevArrow    : jQuery(".slick-home-prev"),
    // nextArrow    : jQuery(".slick-home-next")
}).show();

jQuery('#testimonials').slick({
    autoplay: true,
    autoplaySpeed: 6000,
    fade: true,
    arrows: false
    // prevArrow: $(".slick-testimonial-prev"),
    // nextArrow: $(".slick-testimonial-next")
}).show();

jQuery('.history-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
}).show();
