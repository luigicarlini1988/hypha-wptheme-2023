document.addEventListener("DOMContentLoaded", function (event) {


    const popOpen = document.getElementById('pop-trigger');
    const popUp = document.getElementById('pop-up');
    const popClose = document.getElementById('pop-close');

    popOpen.onclick = function () {
        popUp.classList.add('in');
    }

    popClose.onclick = function () {
        popUp.classList.remove('in');
    }

});