document.addEventListener("DOMContentLoaded", function (event) {


    function daoBuilderPrices() {


        //FeatureListToggles
        hasChilds = document.querySelectorAll('.has-child')
        markers = document.querySelectorAll('.marker')

        hasChilds.forEach((hasChild) => {
            hasChild.onclick = function () {
                hasChild.classList.toggle('expand')


            }
        });

        //toggle
        priceToggle = document.getElementById('fake_toggle')

        //prices
        const starterPrice = 55
        const growthPrice = 278
        const thrivePrice = 555


        //20% discount
        const starterPriceDisc = ((starterPrice / 100) * 80).toFixed(0)
        const growthPriceDisc = ((growthPrice / 100) * 80).toFixed(0)
        const thrivePriceDisc = ((thrivePrice / 100) * 80).toFixed(0)

        //prices areas
        starterPriceArea = document.getElementById('starter-price')
        growthPriceArea = document.getElementById('growth-price')
        thrivePriceArea = document.getElementById('thrive-price')



        //set prices
        starterPriceArea.innerHTML = starterPriceDisc
        growthPriceArea.innerHTML = growthPriceDisc
        thrivePriceArea.innerHTML = thrivePriceDisc



        //timeframe
        timeFrameAreas = document.querySelectorAll('.timeframe')

        // Set timeframe
        timeFrameAreas.forEach((timeFrameArea) => {
            timeFrameArea.innerHTML = 'annually'
        });



        //actions:

        priceToggle.onclick = function () {
            priceToggle.classList.toggle('deactivate');


            if (priceToggle.classList.contains('deactivate')) {
                starterPriceArea.innerHTML = starterPrice
                growthPriceArea.innerHTML = growthPrice
                thrivePriceArea.innerHTML = thrivePrice

                timeFrameAreas.forEach((timeFrameArea) => {
                    timeFrameArea.innerHTML = 'monthly'
                });

            } else {
                starterPriceArea.innerHTML = starterPriceDisc
                growthPriceArea.innerHTML = growthPriceDisc
                thrivePriceArea.innerHTML = thrivePriceDisc

                timeFrameAreas.forEach((timeFrameArea) => {
                    timeFrameArea.innerHTML = 'annually'
                });
            }
        }
    }


    daoBuilderPrices()

});