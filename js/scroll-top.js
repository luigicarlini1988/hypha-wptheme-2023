jQuery(document).ready(function($){
// back to top


    $(window).scroll(function() {
          if ($(document).scrollTop() > 1000) {
              $('#scroll_top').addClass('in');
          }
          else {
              $('#scroll_top').removeClass('in');
          }
      });


    const btn = document.getElementById('scroll_top');

      btn.addEventListener('click', () => window.scrollTo({
        top: 0,
        behavior: 'smooth',
      }));
    });
