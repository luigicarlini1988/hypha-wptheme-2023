document.addEventListener("DOMContentLoaded", function (event) {


  function singleDaoPrices() {

    const starterPrice = 55
    const growthPrice = 278
    const thrivePrice = 555

    const starterPriceDisc = ((starterPrice / 100) * 80).toFixed(0)
    const growthPriceDisc = ((growthPrice / 100) * 80).toFixed(0)
    const thrivePriceDisc = ((thrivePrice / 100) * 80).toFixed(0)

    const starterYearTotPrice = ((starterPrice * 12) / 100 * 80).toFixed(0)
    const growthYearTotPrice = ((growthPrice * 12) / 100 * 80).toFixed(0)
    const thriveYearTotPrice = ((thrivePrice * 12) / 100 * 80).toFixed(0)

    const kickFreePrice = 99
    const kickStartPrice = 149
    const kickGrowPrice = 199
    const kickThrivePrice = 249

    const workFreePrice = 199
    const workStartPrice = 299
    const workGrowPrice = 399
    const workThrivePrice = 599



    const priceToggle = document.getElementById('dao-toggle')
    const starterCard = document.getElementById('ml-starter')
    const growthCard = document.getElementById('ml-growth')
    const thriveCard = document.getElementById('ml-thrive')
    const freemiumCard = document.getElementById('ml-freemium')


    const singleStarterPrice = document.getElementById('single_starter_price')
    const singleGrowthPrice = document.getElementById('single_growth_price')
    const singleThrivePrice = document.getElementById('single_thrive_price')



    const dolos = document.querySelectorAll('.dolo');

    const kickFree = document.getElementById('kick-free')
    const kickStart = document.getElementById('kick-start')
    const kickGrow = document.getElementById('kick-grow')
    const kickThrive = document.getElementById('kick-thrive')

    const workFree = document.getElementById('work-free')
    const workStart = document.getElementById('work-start')
    const workGrow = document.getElementById('work-grow')
    const workThrive = document.getElementById('work-thrive')

    singleStarterPrice.innerHTML = starterPrice
    singleGrowthPrice.innerHTML = growthPrice
    singleThrivePrice.innerHTML = thrivePrice




    kickFree.innerHTML = kickFreePrice
    kickStart.innerHTML = kickStartPrice
    kickGrow.innerHTML = kickGrowPrice
    kickThrive.innerHTML = kickThrivePrice

    workFree.innerHTML = workFreePrice
    workStart.innerHTML = workStartPrice
    workGrow.innerHTML = workGrowPrice
    workThrive.innerHTML = workThrivePrice


    if (starterCard.classList.contains('to_year')) {
      singleStarterPrice.innerHTML = starterPriceDisc
    } else {
      singleStarterPrice.innerHTML = starterPrice
    }

    if (growthCard.classList.contains('to_year')) {
      singleGrowthPrice.innerHTML = growthPriceDisc
    } else {
      singleGrowthPrice.innerHTML = growthPrice
    }

    if (thriveCard.classList.contains('to_year')) {
      singleThrivePrice.innerHTML = thrivePriceDisc
    } else {
      singleThrivePrice.innerHTML = thrivePrice
    }



    priceToggle.onclick = function () {
      this.classList.toggle('to_year');
      starterCard.classList.toggle('to_year');
      growthCard.classList.toggle('to_year');
      thriveCard.classList.toggle('to_year');
      freemiumCard.classList.toggle('to_year');



      if (starterCard.classList.contains('to_year')) {
        singleStarterPrice.innerHTML = starterPriceDisc
      } else {
        singleStarterPrice.innerHTML = starterPrice
      }

      if (growthCard.classList.contains('to_year')) {
        singleGrowthPrice.innerHTML = growthPriceDisc
      } else {
        singleGrowthPrice.innerHTML = growthPrice
      }

      if (thriveCard.classList.contains('to_year')) {
        singleThrivePrice.innerHTML = thrivePriceDisc
      } else {
        singleThrivePrice.innerHTML = thrivePrice
      }

    }

  }

  singleDaoPrices()

});