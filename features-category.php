<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypha::Features > Category</title>

    <!--owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- Global css -->
    <link rel="stylesheet" href="css/global.css" />

    <!-- Features css -->
    <link rel="stylesheet" href="css/features.css" />

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Work+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
        include ('incl/header-nav.html') ;
    ?>

    <main class="dark-theme">
        <section class="features-hero">
            <div class="area flex gap-50 align-center">
                <div class="resp-logo">
                    <img src="img/logos/logo-white.svg" />
                </div>
                <div class="col-half">
                    <div class="sub-section flex align-center">
                        <div class="icon small">
                            <img src="img/icons/features.svg" />
                        </div>
                        <div class="breadcrumbs">
                            <a href="#">Product Features</a> > Shape your DAO
                        </div>
                    </div>
                    <h1 class="title-big">Shape your DAO</h1>
                    <img class="resp-image shape" src="img/features/shapeyourdao.png" />

                    <p class="text-20">From a little start-up to a multi-layer land DAO project, we have all the
                        features required to shape a DAO that will exactly match your needs</p>
                    <a href="#features-overview" class="button secondary">Discover</a>
                </div>
                <div class="col-half">
                    <img class="feat-top shape" src="img/features/shapeyourdao.png" />
                </div>
            </div>
        </section>

        <section id="features-overview">
            <div class="area flex gap-20 align-bottom">
                <div class="col-half">
                    <div class="sub-section flex align-center">
                        <div class="icon small">
                            <img src="img/icons/eye.svg" loading="lazy">
                        </div>

                        <p class="subtitle">Features Overview</p>
                    </div>
                    <p class="text-28 white">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore</p>
                </div>

                <div class="col-half">
                    <p class="text-20">
                        Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore
                    </p>

                </div>
            </div>

            <div class="area with-feature-carousel">
                <div id="features-carousel" class="owl-carousel owl-theme">
                    <div class="feature-carusel-item">

                        <div class="carousel-image">
                            <img src="img/features/dao-mock.png" />
                        </div>
                        <div class="carousel-text">
                            <p class="white text-18 bold">Video Introduction</p>
                            <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>

                    </div>

                    <div class="feature-carusel-item">

                        <div class="carousel-image">
                            <img src="img/features/dao-mock.png" />
                        </div>
                        <div class="carousel-text">
                            <p class="white text-18 bold">Main Dashboard</p>
                            <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>

                    </div>

                    <div class="feature-carusel-item">

                        <div class="carousel-image">
                            <img src="img/features/dao-mock.png" />
                        </div>
                        <div class="carousel-text">
                            <p class="white text-18 bold">Main Dashboard</p>
                            <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>

                    </div>

                </div>
        </section>

        <section class="feature-cpt-list">
            <div class="area with-titles flex gap-20 align-bottom">
                <div class="col-full">
                    <div class="sub-section flex align-center">
                        <div class="icon small">
                            <img src="img/icons/features.svg" loading="lazy">
                        </div>

                        <h2 class="subtitle">Explore Features</h2>
                    </div>
                    <p class="text-28 white">Want to dive deep? Check out all the features in this category</p>
                </div>


            </div>
            <div class="area flex gap-20 wrap">
                <div class="col-4">
                    <a class="nostyle" href="#">
                        <div class="generic-card glow-back has-link">
                            <div class="wrappo">
                                <div class="icon in-card">
                                    <img src="img/icons/circles.svg" />
                                </div>
                                <h3 class="title-medium">Circles</h3>
                                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <div class="fake-button space">
                                    <p>Discover</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="nostyle" href="#">
                        <div class="generic-card glow-back has-link">
                            <div class="wrappo">
                                <div class="icon in-card">
                                    <img src="img/icons/templates.svg" />
                                </div>
                                <h3 class="title-medium">Templates</h3>
                                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <div class="fake-button space">
                                    <p>Discover</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="nostyle" href="#">
                        <div class="generic-card glow-back has-link">
                            <div class="wrappo">
                                <div class="icon in-card">
                                    <img src="img/icons/policies.svg" />
                                </div>
                                <h3 class="title-medium">Policies</h3>
                                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <div class="fake-button space">
                                    <p>Discover</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="nostyle" href="#">
                        <div class="generic-card glow-back has-link">
                            <div class="wrappo">
                                <div class="icon in-card">
                                    <img src="img/icons/rocket.svg" />
                                </div>
                                <h3 class="title-medium">DAO<br /> Launcher</h3>
                                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <div class="fake-button space">
                                    <p>Discover</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="nostyle" href="#">
                        <div class="generic-card glow-back has-link">
                            <div class="wrappo">
                                <div class="icon in-card">
                                    <img src="img/icons/settings.svg" />
                                </div>
                                <h3 class="title-medium">Vote<br /> Settings</h3>
                                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <div class="fake-button space">
                                    <p>Discover</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="nostyle" href="#">
                        <div class="generic-card glow-back has-link">
                            <div class="wrappo">
                                <div class="icon in-card">
                                    <img src="img/icons/community.svg" />
                                </div>
                                <h3 class="title-medium">Community<br /> Layer</h3>
                                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. </p>
                                <div class="fake-button space">
                                    <p>Discover</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </section>

        <?php 
        include ('incl/explore-features-web3.html') ;
    ?>

        <section class="cta">
            <div class="area">
                <?php 
                include ('incl/main-cta.html') ;
                ?>
            </div>
        </section>








    </main>


    <?php 
        include ('incl/footer.html') ;
    ?>

    <script type="text/javascript" src="js/global-animations.js"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3-10-1-min.js"></script>

    <!-- carousel -->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/owl.navigation.js"></script>

    <script type="text/javascript" src="js/features-carousel.js"></script>
</body>

</html>