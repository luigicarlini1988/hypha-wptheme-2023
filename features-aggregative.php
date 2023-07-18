<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypha::Features</title>

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
                        <h1 class="subtitle">Product Features</h1>
                    </div>
                    <p class="title-big">The best tools to <br />
                        build your DAO</p>
                    <img class="resp-image" src="img/features/DAO-outline.png" />

                    <p class="text-20">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit ame</p>
                    <a href="#features-overview" class="button secondary">Discover</a>
                </div>
                <div class="col-half">
                    <img class="feat-top" src="img/features/DAO-outline.png" />
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

                        <p class="subtitle">Platform Overview</p>
                    </div>
                    <p class="title-medium">A human centric design, with cutting edge features</p>
                </div>

                <div class="col-half">
                    <p class="text-20">
                        Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Lorem ipsum dolor sit ame
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

        <?php 
            include ('incl/explore-features-web3.html') ;
        ?>



        <section class="explore-web2">
            <div class="area with-titles flex gap-20 align-bottom">
                <div class="col-half">
                    <div class="sub-section flex align-center">
                        <div class="icon small">
                            <img src="img/icons/features.svg" loading="lazy">
                        </div>

                        <h2 class="subtitle">Explore Features, old way</h2>
                    </div>
                    <p class="title-medium">Or if you prefer, here a list of all the DAO features</p>
                </div>

                <div class="col-half">
                    <p class="text-20 light-blu">
                        Navigate through all the DAO features, we divided them by category and usage so to make your
                        exploration easier yo bau man
                    </p>

                </div>
            </div>

            <div class="area feature-list flex gap-20">
                <div class="col-2">
                    <p class="light-blu text-14 bold">Get Started</p>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                </div>
                <div class="col-2">
                    <p class="light-blu text-14 bold">Team Management</p>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                </div>
                <div class="col-2">
                    <p class="light-blu text-14 bold">HR Management</p>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                </div>
                <div class="col-2">
                    <p class="light-blu text-14 bold">Financial Management</p>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                </div>
                <div class="col-2">
                    <p class="light-blu text-14 bold">Administration Tools</p>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                </div>
                <div class="col-2">
                    <p class="light-blu text-14 bold">Community Features</p>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="fake-features-button flex align-center">
                            <img src="img/icons/rocket.svg" />
                            <p>DAO launcher</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

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