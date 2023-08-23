$(document).ready(function () {
    $(".home-back").removeClass('filter');
    $(".achieve").addClass('in');
    $(".payoffs").addClass('in');
    $(".payoff-resp").addClass('in');

    $(".achieve").animatext({
        mode: "chars",
        speed: 30
    });

    $(".payoffs").animatext({
        mode: "chars",
        initDelay: 600,
        speed: 10
    });

    $(".payoff-resp").animatext({
        mode: "chars",
        initDelay: 600,
        speed: 10
    });



    setTimeout(() => {
        $(".text-opening .buttons").addClass('enter');
        $(".text-opening .primary").addClass('enter');
    }, 1000);

    setTimeout(() => {
        $(".text-opening .secondary").addClass('enter');
    }, 1200);


    setTimeout(() => {
        $("header").removeClass('only-home-out');
    }, 1500);


    setTimeout(() => {
        $(".payoffs").removeClass('in');
        $(".payoffs-2").addClass('in');

        $(".payoffs-2").animatext({
            mode: "chars",
            speed: 10
        });

    }, 4000);



    setTimeout(() => {
        $(".payoffs-2").removeClass('in');
        $(".payoffs-3").addClass('in');

        $(".payoffs-3").animatext({
            mode: "chars",
            speed: 10
        });
    }, 8000);



    setTimeout(() => {
        $(".payoffs-3").removeClass('in');
        $(".payoffs-4").addClass('in');

        $(".payoffs-4").animatext({
            mode: "chars",
            speed: 10
        });
    }, 12000);

    setTimeout(() => {
        $(".payoffs-4").removeClass('in');
        $(".payoffs-5").addClass('in');

        $(".payoffs-5").animatext({
            mode: "chars",
            speed: 10
        });
    }, 16000);

    setTimeout(() => {
        $(".payoffs-5").removeClass('in');
        $(".payoffs-6").addClass('in');
        $("#payoff-controller").addClass('in');
        $("#pc-1").addClass('current');
        $(".payoffs-6").animatext({
            mode: "chars",
            speed: 10
        });
    }, 20000);


    //controllers

    $("#pc-1").click(function () {
        if ($("#pc-1").hasClass("current")) {

        } else {
            $("#pc-1").addClass("current");
            $("#pc-2").removeClass("current");
            $("#pc-3").removeClass("current");
            $("#pc-4").removeClass("current");
            $("#pc-5").removeClass("current");

            $(".payoffs-6").addClass('in');
            $(".payoffs-2").removeClass('in');
            $(".payoffs-3").removeClass('in');
            $(".payoffs-4").removeClass('in');
            $(".payoffs-5").removeClass('in');

        }

    });

    $("#pc-2").click(function () {
        if ($("#pc-2").hasClass("current")) {

        } else {
            $("#pc-2").addClass("current");
            $("#pc-1").removeClass("current");
            $("#pc-3").removeClass("current");
            $("#pc-4").removeClass("current");
            $("#pc-5").removeClass("current");

            $(".payoffs-2").addClass('in');
            $(".payoffs-6").removeClass('in');
            $(".payoffs-3").removeClass('in');
            $(".payoffs-4").removeClass('in');
            $(".payoffs-5").removeClass('in');

        }

    });

    $("#pc-3").click(function () {
        if ($("#pc-3").hasClass("current")) {

        } else {
            $("#pc-3").addClass("current");
            $("#pc-1").removeClass("current");
            $("#pc-2").removeClass("current");
            $("#pc-4").removeClass("current");
            $("#pc-5").removeClass("current");

            $(".payoffs-3").addClass('in');
            $(".payoffs-6").removeClass('in');
            $(".payoffs-2").removeClass('in');
            $(".payoffs-4").removeClass('in');
            $(".payoffs-5").removeClass('in');

        }

    });

    $("#pc-4").click(function () {
        if ($("#pc-4").hasClass("current")) {

        } else {
            $("#pc-4").addClass("current");
            $("#pc-1").removeClass("current");
            $("#pc-2").removeClass("current");
            $("#pc-3").removeClass("current");
            $("#pc-5").removeClass("current");

            $(".payoffs-4").addClass('in');
            $(".payoffs-6").removeClass('in');
            $(".payoffs-2").removeClass('in');
            $(".payoffs-3").removeClass('in');
            $(".payoffs-5").removeClass('in');

        }

    });

    $("#pc-5").click(function () {
        if ($("#pc-5").hasClass("current")) {

        } else {
            $("#pc-5").addClass("current");
            $("#pc-1").removeClass("current");
            $("#pc-2").removeClass("current");
            $("#pc-3").removeClass("current");
            $("#pc-4").removeClass("current");

            $(".payoffs-5").addClass('in');
            $(".payoffs-6").removeClass('in');
            $(".payoffs-2").removeClass('in');
            $(".payoffs-3").removeClass('in');
            $(".payoffs-4").removeClass('in');

        }

    });


});