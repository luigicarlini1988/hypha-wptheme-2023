$(document).ready(function () {
    $('#timeline-carousel').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                margin: 14
            },
            800: {
                items: 3,
                margin: 14
            },
            1060: {
                items: 4,
                margin: 20
            },
            1600: {
                items: 5,
                margin: 20
            }
        }
    });
})