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

          const starterAnchorPrice = 7500
          const starterAdditionalPrice = 5750
          const starterStakeAmount = 5000
          const starterStakeChildAmount = 3750

          const growthAnchorPrice = 15000
          const growthAdditionalPrice = 4250
          const growthStakeAmount = 10000
          const growthStakeChildAmount = 2750

          const thriveAnchorPrice = 75000
          const thriveAdditionalPrice = 2750
          const thriveStakeAmount = 60000
          const thriveStakeChildAmount = 1750



          const plural = document.getElementById("plural")

          const pluralBottom = document.querySelectorAll('.plural-bottom')
          const daosNumBottom = document.querySelectorAll(".daos-n-bottom")

          const starterCard = document.getElementById("ml-starter")
          const starterAnchor = document.getElementById("starter-achor")
          const starterAdditional = document.getElementById("starter-additional")
          const starterTotal = document.getElementById("starter-result")
          const starterStake = document.getElementById("starter_stake")
          const starterStakeChild = document.getElementById("starter_stake_child")

          const growthCard = document.getElementById("ml-growth")
          const growthAnchor = document.getElementById("growth-achor")
          const growthAdditional = document.getElementById("growth-additional")
          const growthTotal = document.getElementById("growth-result")
          const growthStake = document.getElementById("growth_stake")
          const growthStakeChild = document.getElementById("growth_stake_child")

          const thriveCard = document.getElementById("ml-thrive")
          const thriveAnchor = document.getElementById("thrive-achor")
          const thriveAdditional = document.getElementById("thrive-additional")
          const thriveTotal = document.getElementById("thrive-result")
          const thriveStake = document.getElementById("thrive_stake")
          const thriveStakeChild = document.getElementById("thrive_stake_child")





          if ( slider.value >= 2 ) {
              plural.innerHTML = "s"
            } else {
              plural.innerHTML = ""
            }

          if ( slider.value >= 3 ) {
            pluralBottom.forEach(function(pb) {
              el.innerHTML = "s"
            })

            } else {
              pluralBottom.forEach(function(pb) {
              pb.innerHTML = ""
                })
            }

          daonumber.innerHTML = slider.value

          daosNumBottom.forEach(function(dnb) {
            dnb.innerHTML = slider.value - 1
          })

          starterAnchor.innerHTML = "<span class='cur'>$</span>" + starterAnchorPrice.toLocaleString()
          starterAdditional.innerHTML = "<span class='cursmall'>$</span>" + starterAdditionalPrice.toLocaleString()
          starterTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice ).toLocaleString()
          starterCard.classList.add("recommended");
          starterStake.innerHTML = "<span class='verycursmall'>$</span>" + starterStakeAmount.toLocaleString()
          starterStakeChild.innerHTML = "<span class='veryverycursmall'>$</span>" + starterStakeChildAmount.toLocaleString()

          growthAnchor.innerHTML = "<span class='cur'>$</span>" + growthAnchorPrice.toLocaleString()
          growthAdditional.innerHTML = "<span class='cursmall'>$</span>" + growthAdditionalPrice.toLocaleString()
          growthTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice).toLocaleString()
          growthStake.innerHTML = "<span class='verycursmall'>$</span>" + growthStakeAmount.toLocaleString()
          growthStakeChild.innerHTML = "<span class='veryverycursmall'>$</span>" + growthStakeChildAmount.toLocaleString()

          thriveAnchor.innerHTML = "<span class='cur'>$</span>" + thriveAnchorPrice.toLocaleString()
          thriveAdditional.innerHTML = "<span class='cursmall'>$</span>" + thriveAdditionalPrice.toLocaleString()
          thriveTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice).toLocaleString()
          thriveStake.innerHTML = "<span class='verycursmall'>$</span>" + thriveStakeAmount.toLocaleString()
          thriveStakeChild.innerHTML = "<span class='veryverycursmall'>$</span>" + thriveStakeChildAmount.toLocaleString()

          hyphaToggle.onclick = function() {
            this.classList.add('active')
            usdToggle.classList.remove('active')

            starterAnchor.innerHTML = "<span class='cur hyph'>$</span>" + (starterAnchorPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            starterAdditional.innerHTML = "<span class='cursmall hyph'>$</span>" + (starterAdditionalPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            starterTotal.innerHTML = "<span class='cursmall hyph'>$</span>" + ((( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice ) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            starterStake.innerHTML = "<span class='verycursmall hyph'>$</span>" + (starterStakeAmount / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            starterStakeChild.innerHTML = "<span class='veryverycursmall hyph'>$</span>" + (starterStakeChildAmount / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

            growthAnchor.innerHTML = "<span class='cur hyph'>$</span>" + (growthAnchorPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            growthAdditional.innerHTML = "<span class='cursmall hyph'>$</span>" + (growthAdditionalPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            growthTotal.innerHTML = "<span class='cursmall hyph'>$</span>" + ((( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice)/ hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            growthStake.innerHTML = "<span class='verycursmall hyph'>$</span>" + (growthStakeAmount / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            growthStakeChild.innerHTML = "<span class='veryverycursmall hyph'>$</span>" + (growthStakeChildAmount / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

            thriveAnchor.innerHTML = "<span class='cur hyph'>$</span>" + (thriveAnchorPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            thriveAdditional.innerHTML = "<span class='cursmall hyph'>$</span>" + (thriveAdditionalPrice / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            thriveTotal.innerHTML = "<span class='cursmall hyph'>$</span>" + ((( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            thriveStake.innerHTML = "<span class='verycursmall hyph'>$</span>" + (thriveStakeAmount / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            thriveStakeChild.innerHTML = "<span class='veryverycursmall hyph'>$</span>" + (thriveStakeChildAmount / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

          }

          usdToggle.onclick = function() {
            this.classList.add('active')
            hyphaToggle.classList.remove('active')

            starterAnchor.innerHTML = "<span class='cur'>$</span>" + starterAnchorPrice.toLocaleString()
            starterAdditional.innerHTML = "<span class='cursmall'>$</span>" + starterAdditionalPrice.toLocaleString()
            starterTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice ).toLocaleString()
            starterStake.innerHTML = "<span class='verycursmall'>$</span>" + starterStakeAmount.toLocaleString()
            starterStakeChild.innerHTML = "<span class='veryverycursmall'>$</span>" + starterStakeChildAmount.toLocaleString()

            growthAnchor.innerHTML = "<span class='cur'>$</span>" + growthAnchorPrice.toLocaleString()
            growthAdditional.innerHTML = "<span class='cursmall'>$</span>" + growthAdditionalPrice.toLocaleString()
            growthTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice).toLocaleString()
            growthStake.innerHTML = "<span class='verycursmall'>$</span>" + growthStakeAmount.toLocaleString()
            growthStakeChild.innerHTML = "<span class='veryverycursmall'>$</span>" + growthStakeChildAmount.toLocaleString()

            thriveAnchor.innerHTML = "<span class='cur'>$</span>" + thriveAnchorPrice.toLocaleString()
            thriveAdditional.innerHTML = "<span class='cursmall'>$</span>" + thriveAdditionalPrice.toLocaleString()
            thriveTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice).toLocaleString()
            thriveStake.innerHTML = "<span class='verycursmall'>$</span>" + thriveStakeAmount.toLocaleString()
            thriveStakeChild.innerHTML = "<span class='veryverycursmall'>$</span>" + thriveStakeChildAmount.toLocaleString()

          }

          update=()=>{

            daonumber.innerHTML = slider.value

            daosNumBottom.forEach(function(dnb) {
              dnb.innerHTML = slider.value - 1
            })

            if (usdToggle.classList.contains('active')) {

            starterTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice).toLocaleString()
            growthTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice).toLocaleString()
            thriveTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice).toLocaleString()

          } else if (hyphaToggle.classList.contains('active')) {

            starterTotal.innerHTML = "<span class='cursmall hyph'>$</span>" + ((( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            growthTotal.innerHTML = "<span class='cursmall hyph'>$</span>" + ((( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})
            thriveTotal.innerHTML = "<span class='cursmall hyph'>$</span>" + ((( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice) / hyphaPrice).toLocaleString(undefined, {maximumFractionDigits: 0})

          }

            if ( slider.value >= 2 ) {
                plural.innerHTML = "s"
              } else {
                plural.innerHTML = ""
              }

            if ( slider.value >= 3 ) {
              pluralBottom.forEach(function(pb) {
                pb.innerHTML = "s"
              })

              } else {
                pluralBottom.forEach(function(pb) {
                pb.innerHTML = ""
                  })
              }

            if ( slider.value >= 0 && slider.value <= 6) {
                starterCard.classList.add("recommended")
              } else {
                starterCard.classList.remove("recommended")
              }


            if ( slider.value >= 7 && slider.value <= 41) {
                growthCard.classList.add("recommended")
              } else {
                growthCard.classList.remove("recommended")
              }

            if ( slider.value >= 42) {
                thriveCard.classList.add("recommended")
              } else {
                thriveCard.classList.remove("recommended")
              }

          }




          slider.addEventListener('input', update)

      }

      ecosystemPrices()

    }

loadPrice()

});
