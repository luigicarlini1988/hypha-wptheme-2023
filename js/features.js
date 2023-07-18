
  if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {



  } else {

  window.onload = function() {
      lax.setup() // init

      const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
      }

          window.requestAnimationFrame(updateLax)
  }

  }

  $(document).ready(function(){
    $('#roadmap-slider').owlCarousel({
          loop:false,
          nav:true,
          dots:false,
          margin:20,
          responsive:{
           0:{
               items:1
           },
           600:{
               items:2
           },
           900:{
               items:3
           }
        }
      });


       $('#price-plans-cta').parallax({imageSrc: '../wp-content/themes/hypha-theme/img/3-steps-back.jpg' , speed:0.6});
  });
