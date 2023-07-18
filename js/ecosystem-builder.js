document.addEventListener("DOMContentLoaded", function (event) {

    const slider = document.getElementById("range")
    const daonumber = document.getElementById("daosnumber-inside")

    //prices
    const anchorPrice = 5555
    const anchorYearFee = 555
    const additionalPrice = 555
    const additionalYearFee = 55

    //Pricies Areas
    const anchorPriceField = document.getElementById("anchor-price")
    const anchorYearFeeField = document.getElementById("anchor_year_fee")

    const additionalPriceField = document.getElementById("additional-price")
    const additionalYearFeeField = document.getElementById("additional_year_fee")

    const totalStaked = document.getElementById("final_total_stake")
    const totalYearFee = document.getElementById("final_year_fee")



    //Prices Filled in
    anchorPriceField.innerHTML = anchorPrice.toLocaleString()
    anchorYearFeeField.innerHTML = anchorYearFee.toLocaleString()

    additionalPriceField.innerHTML = additionalPrice.toLocaleString()
    additionalYearFeeField.innerHTML = additionalYearFee.toLocaleString()

    totalStaked.innerHTML = (anchorPrice + (slider.value * additionalPrice)).toLocaleString()
    totalYearFee.innerHTML = (anchorYearFee + (slider.value * additionalYearFee)).toLocaleString()




    function ecosystemPrices() {

        update = () => {

            daonumber.innerHTML = slider.value

            totalStaked.innerHTML = (anchorPrice + (slider.value * additionalPrice)).toLocaleString()
            totalYearFee.innerHTML = (anchorYearFee + (slider.value * additionalYearFee)).toLocaleString()



        }

        slider.addEventListener('input', update)

    }


    ecosystemPrices()

});
