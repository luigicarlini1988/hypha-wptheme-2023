<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> |
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php wp_head();
?>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">


<!-- CSS-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loader-style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/general-style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog-style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/inside-blu-pages.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/in-loco-dashboard.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog-responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/burger-menu.css">


<!-- Javascript / jQuery libraries -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3-10-1-min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/apparallax-home.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lax.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js" type="text/javascript"></script>

<!-- js smooth mouse wheel -->
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth.js" type="text/javascript"></script>


<!-- jquery functions & animations -->
<script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scroll-top.js" type="text/javascript"></script>

<!-- Matomo -->
<script>
var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
	var u="https://track.hypha.earth/";
	_paq.push(['setTrackerUrl', u+'matomo.php']);
	_paq.push(['setSiteId', '9']);
	var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
})();
</script>

</head>

<body <?php body_class();?> >

    <!--page loader very basic, waits the load of the header background image and disappears-->
    <div class="obscurer">

        <div class="vertical-centered-box">
          <div class="contentt">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
              <div class="loader-line"></div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/round-logo.svg" height="70" width="70" />
          </div>
        </div>

    </div>

    <div id="resp-menu-activator">
      <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>


          <header id="site-header" class="light-them resp-out">

            <div class="header-center">

              <div class="logo">
                <a href="<?php echo home_url(); ?>">
									<img class="dark-log" src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-dark.svg" alt="hypha"/>
                </a>
              </div>

              <nav>
									<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
              </nav>

            </div>


            <div id="mobile-menu-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-light.svg" alt="hypha"/>
            </div>

            <div class="top-buttons">
              <a href="https://discord.gg/Gx3rmYfjaV " target="_blank">
                <div class="discord">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.08 14.44"><defs></defs><title>Path 23</title><g id="Livello_2" data-name="Livello 2"><g id="Livello_1-2" data-name="Livello 1"><path id="Path_23" data-name="Path 23" class="cls-1" d="M12.77,0l-.24.28a11.44,11.44,0,0,1,4.28,2.18A14.1,14.1,0,0,0,11.63.81a14.39,14.39,0,0,0-3.47,0,1.45,1.45,0,0,0-.29,0A12.86,12.86,0,0,0,4,2c-.64.29-1,.5-1,.5A11.59,11.59,0,0,1,7.48.21L7.3,0A8.55,8.55,0,0,0,2.48,1.8,23,23,0,0,0,0,11.82a6.21,6.21,0,0,0,5.24,2.61S5.88,13.66,6.4,13a5.34,5.34,0,0,1-3-2,5.51,5.51,0,0,0,.48.29.18.18,0,0,0,.07.05l.15.09A10.21,10.21,0,0,0,5.35,12a14,14,0,0,0,2.52.74,11.94,11.94,0,0,0,4.46,0A11.49,11.49,0,0,0,14.82,12a10,10,0,0,0,2-1,5.47,5.47,0,0,1-3.12,2c.52.65,1.14,1.39,1.14,1.39a6.25,6.25,0,0,0,5.26-2.61,23,23,0,0,0-2.48-10A8.41,8.41,0,0,0,12.77,0ZM6.82,10.23A1.84,1.84,0,0,1,5.07,8.32,1.83,1.83,0,0,1,6.82,6.41h0A1.82,1.82,0,0,1,8.58,8.29v0a1.82,1.82,0,0,1-1.74,1.91Zm6.28,0a1.85,1.85,0,0,1-1.76-1.91,1.83,1.83,0,0,1,1.75-1.91h0a1.83,1.83,0,0,1,1.75,1.91h0a1.84,1.84,0,0,1-1.75,1.91Z"/></g></g></svg>
                </div>
              </a>
            <!--  <a href="https://assets.hypha.earth/decks/hypha_pitch_deck.pdf" target="_blank" class="trasp-button-dark">Pitch Deck PDF</a> -->
            </div>

          </header>
