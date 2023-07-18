document.addEventListener("DOMContentLoaded", function (event) {

  function ecosystemPrices() {


    const anchorPrice = 5555
    const anchorYearFee = 555
    const additionalPrice = 555
    const additionalYearFee = 55

    const slider = document.getElementById("range")
    const daonumber = document.getElementById("daosnumber-inside")

    const anchorPriceField = document.getElementById("anchor-price")
    const anchorYearFeeField = document.getElementById("anchor_year_fee")
    const additionalPriceField = document.getElementById("additional-price")
    const additionalYearFeeField = document.getElementById("additional_year_fee")


    const totalStaked = document.getElementById("final_total_stake")
    const totalYearFee = document.getElementById("final_year_fee")


    anchorPriceField.innerHTML = "<span class='cur hyph'>$</span>" + anchorPrice.toLocaleString()
    anchorYearFeeField.innerHTML = "<span class='cursmall hyph'>$</span>" + anchorYearFee.toLocaleString()
    additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + additionalPrice.toLocaleString()
    additionalYearFeeField.innerHTML = "<span class='cursmall hyph'>$</span>" + additionalYearFee.toLocaleString()

    daonumber.innerHTML = slider.value
    totalStaked.innerHTML = " <span class='cur hyph'>$</span>" + (anchorPrice + (slider.value * additionalPrice)).toLocaleString()
    totalYearFee.innerHTML = " <span class='cur hyph'>$</span>" + (anchorYearFee + (slider.value * additionalYearFee)).toLocaleString()



    update = () => {

      daonumber.innerHTML = slider.value

      totalStaked.innerHTML = " <span class='cur hyph'>$</span>" + (anchorPrice + (slider.value * additionalPrice)).toLocaleString()
      totalYearFee.innerHTML = " <span class='cur hyph'>$</span>" + (anchorYearFee + (slider.value * additionalYearFee)).toLocaleString()
      additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + additionalPrice.toLocaleString()
      additionalYearFeeField.innerHTML = "<span class='cursmall hyph'>$</span>" + additionalYearFee.toLocaleString()


    }

    slider.addEventListener('input', update)

  }

  ecosystemPrices()

});
