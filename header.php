<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- header home -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // show the blog name, from settings ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


    <?php wp_head(); ?>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">


    <!-- General CSS-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loader-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/general-style.css?v=1.5">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/burger-menu.css">

    <!-- blu pages CSS -->
    <?php if( is_page_template('page-blu.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/inside-blu-pages.css">
    <?php endif;?>

    <!-- SaaS Dev & EaaS CSS -->
    <?php if( is_page_template('dev-pricing-model.php') || is_page_template('eaas-pricing-model.php') || is_page_template('single-pricing-model.php')) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/price-models.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new-header.css">
    <?php endif;?>


    <!-- Home specific CSS-->
    <?php if( is_page_template('custom-home.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <?php endif;?>

    <!-- features specific CSS -->
    <?php if( is_page_template('dao-features.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new-header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dao-features.css">
    <?php endif;?>

    <!-- blog specific | 404 | CSS -->
    <?php if( is_page_template('news-dashboard.php') || is_category() || is_home() || is_single() || is_search() || is_404() ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog-style.css">
    <?php endif;?>

    <!-- preference center CSS -->
    <?php if( is_page_template('preference-center.php') || is_page_template('fluent-form-page.php')) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/newsletter-page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new-header.css">
    <?php endif;?>

    <!-- dashboard  CSS -->
    <?php if( is_page_template('dashboard.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/inside-blu-pages.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/in-loco-dashboard.css">
    <?php endif;?>

    <!-- funnels CSS -->
    <?php if( is_page_template('funnels.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new-header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dao-features.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/funnels.css">
    <?php endif;?>


    <!-- lead capture CSS -->
    <?php if( is_page_template('lead-capture.php') || is_page_template('mautic-form-test.php') || is_page_template('earthwise-form.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new-header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lead-capture.css">
    <?php endif;?>



    <!-- General CSS responsive-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css?v=1.5">

    <!-- blog CSS responsive -->
    <?php if( is_page_template('news-dashboard.php') || is_category() || is_home() || is_single() || is_search()  || is_404()  ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog-responsive.css">
    <?php endif;?>






    <!-- General Javascript / jQuery libraries -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/smooth.js" type="text/javascript"></script>

    <!-- home specific Js -->
    <?php if( is_page_template('custom-home.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/apparallax-home.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lax.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.navigation.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animations-home.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll-top.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- blu page JS -->
    <?php if( is_page_template('page-blu.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lax.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lax-activator.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll-top.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- EaaS Js -->
    <?php if( is_page_template('eaas-pricing-model.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/aleks-demo.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/eaas-price-model-update2023.js" type="text/javascript">
    </script>
    <?php endif;?>

    <!-- SaaS Js -->
    <?php if( is_page_template('single-pricing-model.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/aleks-demo.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/single-price-model.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/single-dao-jquery.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- Dev plan Js -->
    <?php if( is_page_template('dev-pricing-model.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/single-dao-jquery.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- DAO Features Js -->
    <?php if( is_page_template('dao-features.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lax.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.navigation.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/apparallax-home.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/features.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- Blog Js -->
    <?php if( is_page_template('news-dashboard.php') || is_category() || is_home() || is_single() || is_search() || is_404() ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <?php endif;?>


    <!-- preference center JS -->
    <?php if( is_page_template('preference-center.php') || is_page_template('fluent-form-page.php') || is_page_template('tokenomics.php')) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- dashboard JS -->
    <?php if( is_page_template('dashboard.php')) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <?php endif;?>

    <!-- funnels JS -->
    <?php if( is_page_template('funnels.php')) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lax.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/funnels.js" type="text/javascript"></script>
    <?php endif;?>


    <!-- lead conversion form page JS -->
    <?php if( is_page_template('lead-capture.php') || is_page_template('mautic-form-test.php') || is_page_template('earthwise-form.php') ) :?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/general-animations.js" type="text/javascript"></script>
    <?php endif;?>


    <!-- mautic form NEW --->
    <script type="text/javascript">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://mautic.hypha.earth/media/js/mautic-form.js?v24222b77';
        script.onload = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://mautic.hypha.earth';
        var MauticLang = {
            'submittingMessage': "Please wait..."
        }
    } else if (typeof MauticSDK != 'undefined') {
        MauticSDK.onLoad();
    }
    </script>



    <!-- Matomo -->
    <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u = "https://track.hypha.earth/";
        _paq.push(['setTrackerUrl', u + 'matomo.php']);
        _paq.push(['setSiteId', '9']);
        var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
        g.async = true;
        g.src = u + 'matomo.js';
        s.parentNode.insertBefore(g, s);
    })();
    </script>

</head>

<body <?php body_class();?>>

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


    <?php if( is_page_template('custom-home.php') ||  is_page_template('page-blu.php') || is_page_template('tokenomics.php')) :?>

    <div id="resp-menu-activator">
        <button class="hamburger hamburger--slider" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>


    <header id="site-header" class="resp-out">

        <div class="header-center">

            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <h1><img src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-light.svg" alt="hypha" />
                    </h1>

                </a>
            </div>

            <nav>
                <!--  <ul>
                  <li><a href="#solutions">Solutions</a></li>
                  <li><a href="#features">Features</a></li>
                  <li><a href="#templates">Templates</a></li>
                  <li><a href="#benefits">Benefits</a></li>
                  <li><a href="#gs-anchor">Get Started</a></li>
                  <li><a class="toksal" href="token-sale">Token Sale</a></li>
                </ul> -->

                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
        </div>

        <div id="mobile-menu-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-light.svg" alt="hypha" />
        </div>

        <div class="top-buttons">
            <a href=" https://discord.gg/NsPQAjH9Jw" target="_blank">
                <div class="top-social">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.08 14.44" width="60px" height="60px">
                        <path
                            d="M12.77,0l-.24.28a11.44,11.44,0,0,1,4.28,2.18A14.1,14.1,0,0,0,11.63.81a14.39,14.39,0,0,0-3.47,0,1.45,1.45,0,0,0-.29,0A12.86,12.86,0,0,0,4,2c-.64.29-1,.5-1,.5A11.59,11.59,0,0,1,7.48.21L7.3,0A8.55,8.55,0,0,0,2.48,1.8,23,23,0,0,0,0,11.82a6.21,6.21,0,0,0,5.24,2.61S5.88,13.66,6.4,13a5.34,5.34,0,0,1-3-2,5.51,5.51,0,0,0,.48.29.18.18,0,0,0,.07.05l.15.09A10.21,10.21,0,0,0,5.35,12a14,14,0,0,0,2.52.74,11.94,11.94,0,0,0,4.46,0A11.49,11.49,0,0,0,14.82,12a10,10,0,0,0,2-1,5.47,5.47,0,0,1-3.12,2c.52.65,1.14,1.39,1.14,1.39a6.25,6.25,0,0,0,5.26-2.61,23,23,0,0,0-2.48-10A8.41,8.41,0,0,0,12.77,0ZM6.82,10.23A1.84,1.84,0,0,1,5.07,8.32,1.83,1.83,0,0,1,6.82,6.41h0A1.82,1.82,0,0,1,8.58,8.29v0a1.82,1.82,0,0,1-1.74,1.91Zm6.28,0a1.85,1.85,0,0,1-1.76-1.91,1.83,1.83,0,0,1,1.75-1.91h0a1.83,1.83,0,0,1,1.75,1.91h0a1.84,1.84,0,0,1-1.75,1.91Z" />
                    </svg>
                </div>
            </a>

            <a href="https://twitter.com/HyphaDAO" target="_blank">
                <div class="top-social">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="60px"
                        height="60px">
                        <path
                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z" />
                    </svg>
                </div>
            </a>

            <a href="https://www.linkedin.com/company/hypha-dao/" target="_blank">
                <div class="top-social">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 23.19">
                        <path
                            d="M26,23.19V14.45c0-5-2.26-7.26-5.08-7.26s-4.33.93-5.08,2.24V7.19H10v16h5.83V14.45c0-2.6,1.89-3,2.45-3s2.07.56,2.07,3v8.74Z"
                            style="fill:#e22424" />
                        <path
                            d="M26,23.19V14.45c0-5-2.26-7.26-5.08-7.26s-4.33.93-5.08,2.24V7.19H10v16h5.83V14.45c0-2.6,1.89-3,2.45-3s2.07.56,2.07,3v8.74Z" />
                        <path
                            d="M5.8,2.62A2.61,2.61,0,0,0,3,0C1.12,0,0,1.12,0,2.62A2.61,2.61,0,0,0,2.81,5.24C4.68,5.24,5.8,4.11,5.8,2.62Z"
                            style="fill:#e22424" />
                        <path
                            d="M5.8,2.62A2.61,2.61,0,0,0,3,0C1.12,0,0,1.12,0,2.62A2.61,2.61,0,0,0,2.81,5.24C4.68,5.24,5.8,4.11,5.8,2.62Z" />
                        <rect y="7.19" width="6" height="16" style="fill:#e22424" />
                        <rect y="7.19" width="6" height="16" />
                    </svg>
                </div>
            </a>
        </div>

    </header>

    <?php endif;?>

    <?php if( is_page_template('dev-pricing-model.php') || is_page_template('eaas-pricing-model.php') || is_page_template('single-pricing-model.php') || is_page_template('dao-features.php') || is_page_template('preference-center.php')  || is_page_template('funnels.php') || is_page_template('lead-capture.php') || is_page_template('mautic-form-test.php') || is_page_template('earthwise-form.php') || is_page_template('fluent-form-page.php'))  :?>
    <header id="new-header" class="resp-out">

        <div id="burg">
            <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>


        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img class="light-log" src="<?php echo get_template_directory_uri(); ?>/img/round-logo.svg"
                    alt="hypha" />
            </a>
        </div>


        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>

        <div class="social-area">
            <a href=" https://discord.gg/NsPQAjH9Jw" target="_blank">
                <div class="top-social">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.08 14.44" width="60px" height="60px">
                        <path
                            d="M12.77,0l-.24.28a11.44,11.44,0,0,1,4.28,2.18A14.1,14.1,0,0,0,11.63.81a14.39,14.39,0,0,0-3.47,0,1.45,1.45,0,0,0-.29,0A12.86,12.86,0,0,0,4,2c-.64.29-1,.5-1,.5A11.59,11.59,0,0,1,7.48.21L7.3,0A8.55,8.55,0,0,0,2.48,1.8,23,23,0,0,0,0,11.82a6.21,6.21,0,0,0,5.24,2.61S5.88,13.66,6.4,13a5.34,5.34,0,0,1-3-2,5.51,5.51,0,0,0,.48.29.18.18,0,0,0,.07.05l.15.09A10.21,10.21,0,0,0,5.35,12a14,14,0,0,0,2.52.74,11.94,11.94,0,0,0,4.46,0A11.49,11.49,0,0,0,14.82,12a10,10,0,0,0,2-1,5.47,5.47,0,0,1-3.12,2c.52.65,1.14,1.39,1.14,1.39a6.25,6.25,0,0,0,5.26-2.61,23,23,0,0,0-2.48-10A8.41,8.41,0,0,0,12.77,0ZM6.82,10.23A1.84,1.84,0,0,1,5.07,8.32,1.83,1.83,0,0,1,6.82,6.41h0A1.82,1.82,0,0,1,8.58,8.29v0a1.82,1.82,0,0,1-1.74,1.91Zm6.28,0a1.85,1.85,0,0,1-1.76-1.91,1.83,1.83,0,0,1,1.75-1.91h0a1.83,1.83,0,0,1,1.75,1.91h0a1.84,1.84,0,0,1-1.75,1.91Z" />
                    </svg>
                </div>
            </a>

            <a href="https://twitter.com/HyphaDAO" target="_blank">
                <div class="top-social">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="60px"
                        height="60px">
                        <path
                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z" />
                    </svg>
                </div>
            </a>

            <a href="https://www.linkedin.com/company/hypha-dao/" target="_blank">
                <div class="top-social">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 23.19">
                        <path
                            d="M26,23.19V14.45c0-5-2.26-7.26-5.08-7.26s-4.33.93-5.08,2.24V7.19H10v16h5.83V14.45c0-2.6,1.89-3,2.45-3s2.07.56,2.07,3v8.74Z"
                            style="fill:#e22424" />
                        <path
                            d="M26,23.19V14.45c0-5-2.26-7.26-5.08-7.26s-4.33.93-5.08,2.24V7.19H10v16h5.83V14.45c0-2.6,1.89-3,2.45-3s2.07.56,2.07,3v8.74Z" />
                        <path
                            d="M5.8,2.62A2.61,2.61,0,0,0,3,0C1.12,0,0,1.12,0,2.62A2.61,2.61,0,0,0,2.81,5.24C4.68,5.24,5.8,4.11,5.8,2.62Z"
                            style="fill:#e22424" />
                        <path
                            d="M5.8,2.62A2.61,2.61,0,0,0,3,0C1.12,0,0,1.12,0,2.62A2.61,2.61,0,0,0,2.81,5.24C4.68,5.24,5.8,4.11,5.8,2.62Z" />
                        <rect y="7.19" width="6" height="16" style="fill:#e22424" />
                        <rect y="7.19" width="6" height="16" />
                    </svg>
                </div>
            </a>


        </div>


    </header>
    <?php endif;?>

    <?php if( is_page_template('news-dashboard.php') || is_page_template('dashboard.php') || is_category() || is_home() || is_single() || is_search() || is_404() ) :?>
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
                    <img class="dark-log" src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-dark.svg"
                        alt="hypha" />
                </a>
            </div>

            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>

        </div>

        <div class="top-blog-nav">
            <div class="foglio">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-news' ) ); ?>
            </div>
            <div class="search-input">
                <?php get_search_form(); ?>
            </div>
        </div>

        <div id="mobile-menu-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-light.svg" alt="hypha" />
        </div>

        <div class="top-buttons">
            <a href=" https://discord.gg/NsPQAjH9Jw" target="_blank">
                <div class="top-social">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.08 14.44" width="60px" height="60px">
                        <path
                            d="M12.77,0l-.24.28a11.44,11.44,0,0,1,4.28,2.18A14.1,14.1,0,0,0,11.63.81a14.39,14.39,0,0,0-3.47,0,1.45,1.45,0,0,0-.29,0A12.86,12.86,0,0,0,4,2c-.64.29-1,.5-1,.5A11.59,11.59,0,0,1,7.48.21L7.3,0A8.55,8.55,0,0,0,2.48,1.8,23,23,0,0,0,0,11.82a6.21,6.21,0,0,0,5.24,2.61S5.88,13.66,6.4,13a5.34,5.34,0,0,1-3-2,5.51,5.51,0,0,0,.48.29.18.18,0,0,0,.07.05l.15.09A10.21,10.21,0,0,0,5.35,12a14,14,0,0,0,2.52.74,11.94,11.94,0,0,0,4.46,0A11.49,11.49,0,0,0,14.82,12a10,10,0,0,0,2-1,5.47,5.47,0,0,1-3.12,2c.52.65,1.14,1.39,1.14,1.39a6.25,6.25,0,0,0,5.26-2.61,23,23,0,0,0-2.48-10A8.41,8.41,0,0,0,12.77,0ZM6.82,10.23A1.84,1.84,0,0,1,5.07,8.32,1.83,1.83,0,0,1,6.82,6.41h0A1.82,1.82,0,0,1,8.58,8.29v0a1.82,1.82,0,0,1-1.74,1.91Zm6.28,0a1.85,1.85,0,0,1-1.76-1.91,1.83,1.83,0,0,1,1.75-1.91h0a1.83,1.83,0,0,1,1.75,1.91h0a1.84,1.84,0,0,1-1.75,1.91Z" />
                    </svg>
                </div>
            </a>

            <a href="https://twitter.com/HyphaDAO" target="_blank">
                <div class="top-social">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="60px"
                        height="60px">
                        <path
                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z" />
                    </svg>
                </div>
            </a>

            <a href="https://www.linkedin.com/company/hypha-dao/" target="_blank">
                <div class="top-social">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 23.19">
                        <path
                            d="M26,23.19V14.45c0-5-2.26-7.26-5.08-7.26s-4.33.93-5.08,2.24V7.19H10v16h5.83V14.45c0-2.6,1.89-3,2.45-3s2.07.56,2.07,3v8.74Z"
                            style="fill:#e22424" />
                        <path
                            d="M26,23.19V14.45c0-5-2.26-7.26-5.08-7.26s-4.33.93-5.08,2.24V7.19H10v16h5.83V14.45c0-2.6,1.89-3,2.45-3s2.07.56,2.07,3v8.74Z" />
                        <path
                            d="M5.8,2.62A2.61,2.61,0,0,0,3,0C1.12,0,0,1.12,0,2.62A2.61,2.61,0,0,0,2.81,5.24C4.68,5.24,5.8,4.11,5.8,2.62Z"
                            style="fill:#e22424" />
                        <path
                            d="M5.8,2.62A2.61,2.61,0,0,0,3,0C1.12,0,0,1.12,0,2.62A2.61,2.61,0,0,0,2.81,5.24C4.68,5.24,5.8,4.11,5.8,2.62Z" />
                        <rect y="7.19" width="6" height="16" style="fill:#e22424" />
                        <rect y="7.19" width="6" height="16" />
                    </svg>
                </div>
            </a>
        </div>

    </header>
    <?php endif;?>