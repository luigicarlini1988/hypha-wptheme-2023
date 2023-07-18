// Thanks to Alex Fox for this awesome: lax v1.2.3 used here for parallax aniamtions

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


$('.obscurer').addClass('close');

//remove loader after ALL images are loaded
window.addEventListener("load", event => {
  var image = document.querySelector('img');
  var load = image.complete;
  $('.obscurer').addClass('close');
});


$(window).bind('mousewheel', function (event) {
  if (event.originalEvent.wheelDelta >= 0) {
    $('header').removeClass('dis');
  }


  else {
    setTimeout(function () {
      $('header').addClass('dis');
    }, 300);

  }
});


//custom animations

$(document).ready(function () {


  //mobile menu activator


  $('#resp-menu-activator').on('click', function () {
    $('#site-header').toggleClass('resp-out');
    $('.hamburger').toggleClass('is-active');
  });

  $('#site-header nav ul li a').on('click', function () {
    setTimeout(function () {
      $('#site-header').toggleClass('resp-out');
      $('.hamburger').toggleClass('is-active');
    }, 500);
  });

  // token pop-up contentt

  $('.open-pop-slider').on('click', function () {
    $('#pop-up-slide4').addClass('in');
  });

  $('#close-pop-slide4').on('click', function () {
    $('#pop-up-slide4').removeClass('in');
  });

  $('#mb-open').on('click', function () {
    $('#pop-up_business').addClass('in');
  });

  $('#close-pop_business').on('click', function () {
    $('#pop-up_business').removeClass('in');
  });


  // newsletters

  $('#nl-but').click(function () {
    $('#newsletter').addClass('in');
  });

  $('#nl-close').click(function () {
    $('#newsletter').removeClass('in');
  });


  // Click event for any anchor tag that's href starts with #
  $('a[href^="#"]').click(function (event) {

    // The id of the section we want to go to.
    var id = $(this).attr("href");

    // An offset to push the content down from the top.
    var offset = 60;

    // Our scroll target : the top position of the
    // section that has the id referenced by our href.
    var target = $(id).offset().top - offset;

    // The magic...smooth scrollin' goodness.
    $('html, body').animate({ scrollTop: target }, 500);

    //prevent the page from jumping down to our section.
    event.preventDefault();
  });



  $(window).on('scroll', function () {
    scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 30) {

      $('header').addClass('filled');

    } else {
      $('header').removeClass('filled');
    }
  });



  $('#slider-team').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  $('#price-plans-cta').parallax({ imageSrc: 'wp-content/themes/hypha-theme/img/3-steps-back.jpg', speed: 0.6 });

  $('#s-p').parallax({ imageSrc: 'wp-content/themes/hypha-theme/img/seeds-mockup.jpg', speed: 0.7 });

  $('#h-p').parallax({ imageSrc: 'wp-content/themes/hypha-theme/img/hypha-mockup.jpg', speed: 0.7 });



  //slider who can benefits
  $('.f').click(function () {
    if ($('.f').hasClass('active')) {


    } else {

      $('.f').addClass('active')
      $('.s').removeClass('active')
      $('.t').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').removeClass('active')
      $('.set').removeClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "0%", }, 500);

    }
  });

  $('.s').click(function () {
    if ($('.s').hasClass('active')) {


    } else {

      $('.s').addClass('active')
      $('.f').removeClass('active')
      $('.t').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').removeClass('active')
      $('.set').removeClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "-100%", }, 500);

    }
  });

  $('.t').click(function () {
    if ($('.t').hasClass('active')) {


    } else {

      $('.t').addClass('active')
      $('.f').removeClass('active')
      $('.s').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').removeClass('active')
      $('.set').removeClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "-200%", }, 500);

    }
  });

  $('.q').click(function () {
    if ($('.q').hasClass('active')) {


    } else {

      $('.q').addClass('active')
      $('.f').removeClass('active')
      $('.s').removeClass('active')
      $('.t').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').removeClass('active')
      $('.set').removeClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "-300%", }, 500);

    }
  });



  $('.quin').click(function () {
    if ($('.quin').hasClass('active')) {


    } else {

      $('.f').removeClass('active')
      $('.s').removeClass('active')
      $('.t').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').addClass('active')
      $('.ses').removeClass('active')
      $('.set').removeClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "-400%", }, 500);

    }
  });


  $('.ses').click(function () {
    if ($('.ses').hasClass('active')) {


    } else {

      $('.f').removeClass('active')
      $('.s').removeClass('active')
      $('.t').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').addClass('active')
      $('.set').removeClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "-500%", }, 500);

    }
  });

  $('.set').click(function () {
    if ($('.set').hasClass('active')) {


    } else {

      $('.f').removeClass('active')
      $('.s').removeClass('active')
      $('.t').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').removeClass('active')
      $('.set').addClass('active')
      $('.ott').removeClass('active')

      $('.custom-slider-wrapper').animate({ left: "-600%", }, 500);

    }
  });

  $('.ott').click(function () {
    if ($('.ott').hasClass('active')) {


    } else {

      $('.f').removeClass('active')
      $('.s').removeClass('active')
      $('.t').removeClass('active')
      $('.q').removeClass('active')

      $('.quin').removeClass('active')
      $('.ses').removeClass('active')
      $('.set').removeClass('active')
      $('.ott').addClass('active')

      $('.custom-slider-wrapper').animate({ left: "-700%", }, 500);

    }
  });


  // video intro

  $('#open-intro-vid').click(function () {
    $('#video1').addClass('in');
  });

  $('#close-video1').click(function () {
    $('#video1').removeClass('in');
  });

});
