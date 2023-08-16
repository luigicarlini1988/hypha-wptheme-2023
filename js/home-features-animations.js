document.addEventListener("DOMContentLoaded", function (event) {


    var prevScrollpos = window.pageYOffset;

    const featureDisplay1 = document.getElementById('featureDisplay1');
    const firstIcons = document.getElementById('featureset1');

    const featureDisplay2 = document.getElementById('featureDisplay2');
    const secondIcons = document.getElementById('featureset2');

    const featureDisplay3 = document.getElementById('featureDisplay3');
    const thirdIcons = document.getElementById('featureset3');

    const circlesIcon = document.getElementById('circlesicon');
    const templatesIcon = document.getElementById('templatesicon');

    const profileIcon = document.getElementById('profileicon');
    const communityIcon = document.getElementById('communityicon');

    const treasuryIcon = document.getElementById('treasuryicon');
    const payoutsIcon = document.getElementById('payoutsicon');

    const burgerMenu = document.getElementById('burger');
    const headerNav = document.getElementById('header');
    const obscurer = document.getElementById('obs');

    window.onscroll = function () {


        const position1 = featureDisplay1.getBoundingClientRect();
        const position2 = featureDisplay2.getBoundingClientRect();
        const position3 = featureDisplay3.getBoundingClientRect();

        // menu appear and disappear

        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").classList.remove('up');
            document.getElementById("main-ctas").classList.remove('show');
        } if (prevScrollpos < currentScrollPos) {
            document.getElementById("header").classList.add('up');
            document.getElementById("main-ctas").classList.add('show');
        } if (window.scrollY == 0) {
            document.getElementById("header").classList.remove('up');
            document.getElementById("main-ctas").classList.remove('show');
        }
        prevScrollpos = currentScrollPos;


        //first set of icons
        if (position1.top >= 0 && position1.bottom <= window.innerHeight) {
            firstIcons.classList.add('enter');
            firstIcons.classList.add('state1');


        } else {

            firstIcons.classList.remove('enter');
            firstIcons.classList.remove('state1');


        }


        //second set of icons
        if (position2.top >= 0 && position2.bottom <= window.innerHeight) {
            secondIcons.classList.add('enter');
            secondIcons.classList.add('state1');
        } else {
            secondIcons.classList.remove('enter');
            secondIcons.classList.remove('state1');
        }

        //third set of icons
        if (position3.top >= 0 && position3.bottom <= window.innerHeight) {
            thirdIcons.classList.add('enter');
            thirdIcons.classList.add('state1');
        } else {
            thirdIcons.classList.remove('enter');
            thirdIcons.classList.remove('state1');
        }


    }

    //first iconset user animations



    templatesIcon.onmouseover = function () {
        firstIcons.classList.remove('state2');
        firstIcons.classList.add('state1');
    }

    templatesIcon.onmouseout = function () {
        firstIcons.classList.remove('state1');
    }

    circlesIcon.onmouseover = function () {
        firstIcons.classList.remove('state1');
        firstIcons.classList.add('state2');
    }

    circlesIcon.onmouseout = function () {
        firstIcons.classList.remove('state2');
    }


    //second iconset user animations

    profileIcon.onmouseover = function () {
        secondIcons.classList.remove('state2');
        secondIcons.classList.add('state1');
    }

    profileIcon.onmouseout = function () {
        secondcons.classList.remove('state1');
    }

    communityIcon.onmouseover = function () {
        secondIcons.classList.remove('state1');
        secondIcons.classList.add('state2');
    }

    communityIcon.onmouseout = function () {
        secondIcons.classList.remove('state2');
    }


    //third iconset user animations

    treasuryIcon.onmouseover = function () {
        thirdIcons.classList.remove('state2');
        thirdIcons.classList.add('state1');
    }

    treasuryIcon.onmouseout = function () {
        thirdIcons.classList.remove('state1');
    }

    payoutsIcon.onmouseover = function () {
        thirdIcons.classList.remove('state1');
        thirdIcons.classList.add('state2');
    }

    payoutsIcon.onmouseout = function () {
        thirdIcons.classList.remove('state2');
    }


    // burger click


    burgerMenu.onclick = function () {
        this.classList.toggle('clicked');
        headerNav.classList.toggle('in');
        obscurer.classList.toggle('in');
    }


});