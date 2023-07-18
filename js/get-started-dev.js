document.addEventListener("DOMContentLoaded", function (event) {

    var prevScrollpos = window.pageYOffset;

    const burgerMenu = document.getElementById('burger');
    const headerNav = document.getElementById('header');
    const obscurer = document.getElementById('obs');

    const stepAnchor1 = document.getElementById('step1');
    const stepAnchor2 = document.getElementById('step2');

    const counter1 = document.getElementById('step1-counter');
    const counter2 = document.getElementById('step2-counter');



    window.onscroll = function () {



        //menu 
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").classList.remove('up');
        } if (prevScrollpos < currentScrollPos) {
            document.getElementById("header").classList.add('up');
        } if (window.scrollY == 0) {
            document.getElementById("header").classList.remove('up');
        }
        prevScrollpos = currentScrollPos;

        //steps stuff
        const stepIn1 = stepAnchor1.getBoundingClientRect();
        const stepIn2 = stepAnchor2.getBoundingClientRect();

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



    }



    burgerMenu.onclick = function () {
        this.classList.toggle('clicked');
        headerNav.classList.toggle('in');
        obscurer.classList.toggle('in');
    }

});