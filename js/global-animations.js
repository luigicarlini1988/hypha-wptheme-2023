document.addEventListener("DOMContentLoaded", function (event) {

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").classList.remove('up');
        } if (prevScrollpos < currentScrollPos) {
            document.getElementById("header").classList.add('up');
        } if (window.scrollY == 0) {
            document.getElementById("header").classList.remove('up');
        }
        prevScrollpos = currentScrollPos;
    }


    const burgerMenu = document.getElementById('burger');
    const headerNav = document.getElementById('header');
    const obscurer = document.getElementById('obs');

    burgerMenu.onclick = function () {
        this.classList.toggle('clicked');
        headerNav.classList.toggle('in');
        obscurer.classList.toggle('in');
    }


});