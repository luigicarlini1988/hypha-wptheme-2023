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
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Work+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">




    <!-- carousel CSS / HOME / Features / about-us / use case CPT -->
    <?php if( is_page_template('home-template.php') || is_page_template('about-us.php') || is_singular( 'feature') || is_page_template('features-category-shape.php') || is_page_template('features-category-engage.php') || is_page_template('features-category-distribute.php') || is_page_template('features-aggregative.php') || is_singular( 'usecase' )  ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css" />
    <?php endif;?>

    <!-- Global css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global.css" />

    <!-- Home CSS -->
    <?php if( is_page_template('home-template.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home-page.css">
    <?php endif;?>


    <!-- Hypha News CSS -->
    <?php if( is_page_template('hypha-news.php') || is_category() || is_home() || is_single() ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hypha-news.css">
    <?php endif;?>

    <!-- Hypha Education CSS / Search results-->
    <?php if( is_page_template('hypha-education.php') || is_tax('section') || is_archive() || is_search() ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hypha-news.css">
    <?php endif;?>

    <!-- Pricing Plans CSS -->
    <?php if( is_page_template('pricing-plans.php') || is_page_template('pricing-dao-builder.php') || is_page_template('pricing-developer.php') || is_page_template('pricing-ecosystem-builder.php')  ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pricing-plans.css">
    <?php endif;?>

    <!-- Get Started CSS -->
    <?php if( is_page_template('get-started.php') || is_page_template('get-started-create.php') || is_page_template('get-started-developers.php')  || is_page_template('get-started-account.php')  || is_page_template('get-started-join.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/get-started.css">
    <?php endif;?>

    <!-- About Us CSS-->
    <?php if(  is_page_template('about-us.php') ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/get-started.css">
    <?php endif;?>

    <!-- Use Cases CSS-->
    <?php if(  is_page_template('use-cases.php') || is_singular( 'usecase' ) ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/get-started.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/use-cases.css">
    <?php endif;?>

    <!-- Use hyphaLAB-->
    <?php if(  is_page_template('hyphalab.php')  ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/get-started.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hyphalab.css">
    <?php endif;?>


    <!-- Features CSS -->
    <?php if( is_singular( 'feature') || is_page_template('features-category-shape.php') ||  is_page_template('features-category-engage.php') || is_page_template('features-category-distribute.php') || is_page_template('features-aggregative.php')  ) :?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/features.css">
    <?php endif;?>



    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />



    <!-- mautic Lead Gen --->

    <script type="text/javascript">
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://mautic.hypha.earth/media/js/mautic-form.js?vd5dec697';
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





</head>

<body <?php body_class();?>>

    <div id="burger" class="burger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div id="obs"></div>




    <header id="header" class="flex wrap  align-center only-home-out">
        <div class="area main-nav flex align-center">
            <div class="header-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
                </a>
            </div>
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
        </div>

        <?php if( is_page_template('hypha-news.php') || is_category()  || is_home() || is_single() && (!is_singular( 'educational' )) && (!is_singular( 'feature')) && (!is_singular( 'usecase' ))) :?>
        <div class="news-menu">
            <div class="area flex align-center">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-news' ) ); ?>
                </nav>
            </div>
        </div>
        <?php endif;?>

        <?php if( is_page_template('hypha-education.php') || is_post_type_archive('educational') || is_singular( 'educational') || is_tax('section') ) :?>
        <div class="news-menu">
            <div class="area flex align-center">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-education' ) ); ?>
                </nav>
            </div>
        </div>
        <?php endif;?>

    </header>

    <div id="main-ctas">
        <div class="flex gap-20 justify-right">
            <a href="<?php echo home_url(); ?>/get-started/" class="button primary">Get Started</a>
        </div>
    </div>