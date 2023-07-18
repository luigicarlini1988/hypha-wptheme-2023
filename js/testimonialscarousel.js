$(document).ready(function () {
    $('#testimonials-carousel').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                margin: 14
            },
            600: {
                items: 1,
                margin: 14
            },
            1060: {
                items: 2,
                margin: 18
            },
            1600: {
                items: 3,
                margin: 20
            }
        }
    });
})