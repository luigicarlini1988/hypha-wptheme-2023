$(document).ready(function () {
    $('#dao-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                margin: 10
            },
            600: {
                items: 2,
                margin: 10
            },
            800: {
                items: 3,
                margin: 10
            },
            1000: {
                items: 5,
                margin: 16
            },
            1220: {
                items: 6,
                margin: 16
            },
            1600: {
                items: 8,
                margin: 16
            }
        }
    });
})