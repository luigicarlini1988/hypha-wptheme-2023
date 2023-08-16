document.addEventListener("DOMContentLoaded", function (event) {

    var prevScrollpos = window.pageYOffset;

    const burgerMenu = document.getElementById('burger');
    const headerNav = document.getElementById('header');
    const obscurer = document.getElementById('obs');

    const stepAnchor1 = document.getElementById('step1');
    const stepAnchor2 = document.getElementById('step2');
    const stepAnchor3 = document.getElementById('step3');
    const stepAnchor4 = document.getElementById('step4');
    const stepAnchor5 = document.getElementById('step5');
    const stepAnchor6 = document.getElementById('step6');
    const stepAnchor7 = document.getElementById('step7');
    const stepAnchor8 = document.getElementById('step8');

    const counter1 = document.getElementById('step1-counter');
    const counter2 = document.getElementById('step2-counter');
    const counter3 = document.getElementById('step3-counter');
    const counter4 = document.getElementById('step4-counter');
    const counter5 = document.getElementById('step5-counter');
    const counter6 = document.getElementById('step6-counter');
    const counter7 = document.getElementById('step7-counter');
    const counter8 = document.getElementById('step8-counter');



    window.onscroll = function () {



        //menu 
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

        //steps stuff
        const stepIn1 = stepAnchor1.getBoundingClientRect();
        const stepIn2 = stepAnchor2.getBoundingClientRect();
        const stepIn3 = stepAnchor3.getBoundingClientRect();
        const stepIn4 = stepAnchor4.getBoundingClientRect();
        const stepIn5 = stepAnchor5.getBoundingClientRect();
        const stepIn6 = stepAnchor6.getBoundingClientRect();
        const stepIn7 = stepAnchor7.getBoundingClientRect();
        const stepIn8 = stepAnchor8.getBoundingClientRect();

        //step 1
        if (stepIn1.top >= 0 && stepIn1.bottom <= window.innerHeight) {
            counter1.classList.add('current');
            counter2.classList.remove('current');


        } else {

        }

        //step 2
        if (stepIn2.top >= 0 && stepIn2.bottom <= window.innerHeight) {
            counter1.classList.remove('current');
            counter2.classList.add('current');
            counter3.classList.remove('current');


        } else {

        }

        //step 3
        if (stepIn3.top >= 0 && stepIn3.bottom <= window.innerHeight) {
            counter2.classList.remove('current');
            counter3.classList.add('current');
            counter4.classList.remove('current');


        } else {

        }

        //step 4
        if (stepIn4.top >= 0 && stepIn4.bottom <= window.innerHeight) {
            counter3.classList.remove('current');
            counter4.classList.add('current');
            counter5.classList.remove('current');


        } else {

        }

        //step 5

        if (stepIn5.top >= 0 && stepIn5.bottom <= window.innerHeight) {
            counter4.classList.remove('current');
            counter5.classList.add('current');
            counter6.classList.remove('current');

        } else {

        }

        //step 6

        if (stepIn6.top >= 0 && stepIn6.bottom <= window.innerHeight) {
            counter5.classList.remove('current');
            counter6.classList.add('current');
            counter7.classList.remove('current');

        } else {

        }

        //step 7
        if (stepIn7.top >= 0 && stepIn7.bottom <= window.innerHeight) {
            counter6.classList.remove('current');
            counter7.classList.add('current');
            counter8.classList.remove('current');

        } else {

        }

        //step 8
        if (stepIn8.top >= 0 && stepIn8.bottom <= window.innerHeight) {
            counter7.classList.remove('current');
            counter8.classList.add('current');
            counter9.classList.remove('current');

        } else {

        }


    }



    burgerMenu.onclick = function () {
        this.classList.toggle('clicked');
        headerNav.classList.toggle('in');
        obscurer.classList.toggle('in');
    }


});