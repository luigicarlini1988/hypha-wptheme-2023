document.addEventListener("DOMContentLoaded", function (event) {

    var prevScrollpos = window.pageYOffset;

    const burgerMenu = document.getElementById('burger');
    const headerNav = document.getElementById('header');
    const obscurer = document.getElementById('obs');

    const stepAnchor1 = document.getElementById('step1');
    const stepAnchor2 = document.getElementById('step2');
    const stepAnchor3 = document.getElementById('step3');
    const stepAnchor4 = document.getElementById('step4');


    const counter1 = document.getElementById('step1-counter');
    const counter2 = document.getElementById('step2-counter');
    const counter3 = document.getElementById('step3-counter');
    const counter4 = document.getElementById('step4-counter');




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


    }



    burgerMenu.onclick = function () {
        this.classList.toggle('clicked');
        headerNav.classList.toggle('in');
        obscurer.classList.toggle('in');
    }


});