document.addEventListener("DOMContentLoaded", function(event) {

  const loadPrice = async () => {
    const apiUrl = "http://api-tokensale.hypha.earth";
    const rpcUrl = "https://telos.greymass.com";

    const hyphaTokensSaleUtil = new HyphaTokensSaleUtil(rpcUrl, apiUrl);
    const { usdPerHypha, hyphaRemainingThisRound, currentRound } = await hyphaTokensSaleUtil.init();

    const liveHyphaPrice = `${usdPerHypha}`;

    console.log(liveHyphaPrice);
    console.log(`Current Hypha Price ${usdPerHypha}`);
    console.log(`Current round ${currentRound}`);

        function ecosystemPrices() {

          const slider = document.getElementById("range")
          const daonumber = document.getElementById("daosnumber-inside")
          const hyphaToggle = document.getElementById('toggle-hypha')
          const usdToggle = document.getElementById('toggle-usd')

          const hyphaPrice = liveHyphaPrice

          const anchorPrice = 7500
          const anchorStake = 5000

          const additionalPrice = 6000
          const additionalStake = 4000

          const percentFirstDiscount = 30;
          const percentSecondDiscount = 55;


          const anchorCard = document.getElementById("anchor-dao")
          const anchorPriceField = document.getElementById("anchor-price")
          const anchorStakeField = document.getElementById("anchor_stake")

          const additionalCard = document.getElementById("additional-dao")
          const additionalPriceField = document.getElementById("additional-price")
          const additionalStakeField = document.getElementById("additional_stake")


          const totalAnchorField = document.getElementById("total-anchor-dao")
          const totalAdditionalNumber = document.getElementById("tot-additonal-field")
          const totalAdditionalField = document.getElementById("total-additional-dao")
          const totalDiscountFieldThree = document.getElementById("total-discount-3")

          const greatTotalField = document.getElementById("great-final-total")

          const totalStaked = document.getElementById("final_total_stake")


          const discThree = document.getElementById("disc-3")
          const discThreePercent = document.getElementById("total-discount-3-percent")


          const plural = document.getElementById("plural")


          anchorPriceField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()
          anchorStakeField.innerHTML = "<span class='cursmall'>$</span>" + anchorStake.toLocaleString()

          additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
          additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()

          totalAnchorField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()

          daonumber.innerHTML = slider.value

          totalAdditionalNumber.innerHTML = slider.value
          totalAdditionalField.innerHTML = "<span class='cur'>$</span>" + (slider.value * additionalPrice).toLocaleString()



          totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + "0"
          discThreePercent.innerHTML = "0" + "%"

          greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + (slider.value * additionalPrice) ).toLocaleString()

          totalStaked.innerHTML = " <span class='cur'>$</span>"  + ((( anchorPrice + (slider.value * additionalPrice) )/3)*2).toLocaleString()



          hyphaToggle.onclick = function() {
            this.classList.add('active')
            usdToggle.classList.remove('active')
            anchorPriceField.innerHTML = "<span class='cur hyph'>$</span>" + (anchorPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            anchorStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + (anchorStake / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + (additionalPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + (additionalStake / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            totalAnchorField.innerHTML = "<span class='cur hyph'>$</span>" + (anchorPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            totalAdditionalField.innerHTML = "<span class='cur hyph'>$</span>" + ((slider.value * additionalPrice) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

            if (slider.value <= 5) {

              totalDiscountFieldThree.innerHTML = " - <span class='cur hyph'>$</span>" + "0"
              discThreePercent.innerHTML = "0" + "%"
              totalStaked.innerHTML = " <span class='cur hyph'>$</span>"  + (((( anchorPrice + (slider.value * additionalPrice) )/3)*2)  / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              greatTotalField.innerHTML = " <span class='cur hyph'>$</span>"  + (( anchorPrice + (slider.value * additionalPrice) ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + (additionalPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + (additionalStake / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})


            } else if (slider.value >= 6 && slider.value < 41) {

              totalDiscountFieldThree.innerHTML = " - <span class='cur hyph'>$</span>" + (( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              discThreePercent.innerHTML = (((additionalPrice - (((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value) )/additionalPrice) * 100).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
              totalStaked.innerHTML = " <span class='cur hyph'>$</span>"  + ( ((( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) )/3)*2)  / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              greatTotalField.innerHTML = " <span class='cur hyph'>$</span>"  + (( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + ((((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + ((((((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value)/3)*2) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

            } else if (slider.value >= 41) {
              totalDiscountFieldThree.innerHTML = " - <span class='cur hyph'>$</span>" + (((((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) )/ hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              discThreePercent.innerHTML = ( ( (additionalPrice - (((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) ) /additionalPrice) * 100 ).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
              totalStaked.innerHTML = " <span class='cur hyph'>$</span>"  + ( (( ( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ) /3)*2)  / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              greatTotalField.innerHTML = " <span class='cur hyph'>$</span>"  + (( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + ((((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + ((((((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) /3)*2) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

            }
          }


          usdToggle.onclick = function() {
            this.classList.add('active')
            hyphaToggle.classList.remove('active')

            anchorPriceField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()
            anchorStakeField.innerHTML = "<span class='cursmall'>$</span>" + anchorStake.toLocaleString()

            additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
            additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()

            totalAnchorField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()

            totalAdditionalField.innerHTML = "<span class='cur'>$</span>" + (slider.value * additionalPrice).toLocaleString()

            if (slider.value <= 5) {

              totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + "0"
              discThreePercent.innerHTML = "0" + "%"
              totalStaked.innerHTML = " <span class='cur'>$</span>"  + ((( anchorPrice + (slider.value * additionalPrice) )/3)*2).toLocaleString()
              greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + (slider.value * additionalPrice) ).toLocaleString()
              additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
              additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()

            } else if (slider.value >= 6 && slider.value < 41) {

              totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ).toLocaleString()
              discThreePercent.innerHTML = (((additionalPrice - (((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value) )/additionalPrice) * 100).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
              discThree.classList.add('active')
              totalStaked.innerHTML = " <span class='cur'>$</span>"  + ((( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) )/3)*2).toLocaleString()
              greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) ).toLocaleString()
              additionalPriceField.innerHTML = "<span class='cur'>$</span>" + (((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + (((((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value)/3)*2).toLocaleString(undefined, {maximumFractionDigits: 0})


            } else if (slider.value >= 41) {
              totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ).toLocaleString()
              discThreePercent.innerHTML = ( ( (additionalPrice - (((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) ) /additionalPrice) * 100 ).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
              totalStaked.innerHTML = " <span class='cur'>$</span>"  + (( ( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ) /3)*2).toLocaleString()
              greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ).toLocaleString()
              additionalPriceField.innerHTML = "<span class='cur'>$</span>" + (((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value).toLocaleString(undefined, {maximumFractionDigits: 0})
              additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + (((((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) /3)*2).toLocaleString(undefined, {maximumFractionDigits: 0})
            }
          }


      update=()=>{

        daonumber.innerHTML = slider.value
        totalAdditionalNumber.innerHTML = slider.value


        if (usdToggle.classList.contains('active')) {

          totalAdditionalField.innerHTML = "<span class='cur'>$</span>" + (slider.value * additionalPrice).toLocaleString()

          if (slider.value <= 5) {

            totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + "0"
            discThreePercent.innerHTML = "0" + "%"
            discThree.classList.remove('active')
            greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + (slider.value * additionalPrice) ).toLocaleString()
            totalStaked.innerHTML = " <span class='cur'>$</span>"  + ((( anchorPrice + (slider.value * additionalPrice) )/3)*2).toLocaleString()
            additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
            additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()

          } else if (slider.value >= 6 && slider.value < 41) {
            totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ).toLocaleString()
            discThreePercent.innerHTML = (((additionalPrice - (((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value) )/additionalPrice) * 100).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
            discThree.classList.add('active')
            greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) ).toLocaleString()
            totalStaked.innerHTML = " <span class='cur'>$</span>"  + ((( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) )/3)*2).toLocaleString()
            additionalPriceField.innerHTML = "<span class='cur'>$</span>" + (((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + (((((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value)/3)*2).toLocaleString(undefined, {maximumFractionDigits: 0})

          } else if (slider.value >= 41) {
            totalDiscountFieldThree.innerHTML = " - <span class='cur'>$</span>" + ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ).toLocaleString()
            discThreePercent.innerHTML = ( ( (additionalPrice - (((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) ) /additionalPrice) * 100 ).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
            greatTotalField.innerHTML = " <span class='cur'>$</span>"  + ( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ).toLocaleString()
            totalStaked.innerHTML = " <span class='cur'>$</span>"  + (( ( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ) /3)*2).toLocaleString()
            additionalPriceField.innerHTML = "<span class='cur'>$</span>" + (((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + (((((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) /3)*2).toLocaleString(undefined, {maximumFractionDigits: 0})
          }

        } else if (hyphaToggle.classList.contains('active')) {

          totalAdditionalField.innerHTML = "<span class='cur hyph'>$</span>" + ((slider.value * additionalPrice) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

          if (slider.value <= 5) {
            totalDiscountFieldThree.innerHTML = " - <span class='cur hyph'>$</span>" + "0"
            discThreePercent.innerHTML = "0" + "%"
            discThree.classList.remove('active')
            totalStaked.innerHTML = " <span class='cur hyph'>$</span>"  + (((( anchorPrice + (slider.value * additionalPrice) )/3)*2)  / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            greatTotalField.innerHTML = " <span class='cur hyph'>$</span>"  + (( anchorPrice + (slider.value * additionalPrice) ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + (additionalPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + (additionalStake / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

          } else if (slider.value >= 6 && slider.value < 41) {

            totalDiscountFieldThree.innerHTML = " - <span class='cur hyph'>$</span>" + (( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            discThreePercent.innerHTML = (((additionalPrice - (((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value) )/additionalPrice) * 100).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
            discThree.classList.add('active')
            totalStaked.innerHTML = " <span class='cur hyph'>$</span>"  + ( ((( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) )/3)*2)  / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            greatTotalField.innerHTML = " <span class='cur hyph'>$</span>"  + (( anchorPrice + ((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount )) ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + ((((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + ((((((slider.value * additionalPrice) - ( (((slider.value - 5 ) * additionalPrice)/100) * percentFirstDiscount ))/slider.value)/3)*2) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

          } else if (slider.value >= 41) {
            totalDiscountFieldThree.innerHTML = " - <span class='cur hyph'>$</span>" + (((((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) )/ hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            discThreePercent.innerHTML = ( ( (additionalPrice - (((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) ) /additionalPrice) * 100 ).toLocaleString(undefined, {maximumFractionDigits: 0}) + "%"
            totalStaked.innerHTML = " <span class='cur hyph'>$</span>"  + ( (( ( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ) /3)*2)  / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            greatTotalField.innerHTML = " <span class='cur hyph'>$</span>"  + (( anchorPrice + ((slider.value * additionalPrice) - (((35 * additionalPrice)/100) * percentFirstDiscount ) - ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ) ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + ((((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + ((((((slider.value * additionalPrice) - ( (((35 * additionalPrice)/100) * percentFirstDiscount ) + ((((slider.value - 40 ) * additionalPrice)/100) * percentSecondDiscount ) ))   /slider.value) /3)*2) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
          }

        }

      }

      slider.addEventListener('input', update)

  }

  ecosystemPrices()

}

loadPrice()

});
