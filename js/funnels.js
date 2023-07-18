if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {



} else {

    window.onload = function () {
        lax.setup() // init

        const updateLax = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(updateLax)
        }

        window.requestAnimationFrame(updateLax)
    }

}