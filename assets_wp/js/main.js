jQuery(document).ready(function ($) {
    //slider post
    $('.owl-carousel.slide-review').owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 4,
                nav: true
            }
        }
    });
});