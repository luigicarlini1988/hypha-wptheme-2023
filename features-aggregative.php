<?php
/**
 * Template Name: Features Aggregative
 *
 */

 get_header();
 ?>


<main class="dark-theme">
    <section class="features-hero">
        <div class="area flex gap-50 align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" />
                    </div>
                    <h1 class="subtitle">Features</h1>
                </div>
                <p class="title-big">The best tools to <br />
                    build your DAO</p>
                <img class="resp-image"
                    src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />

                <p class="text-20">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit ame</p>
                <a href="#features-overview" class="button secondary">Discover</a>
            </div>
            <div class="col-half">
                <img class="feat-top" src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />
            </div>
        </div>
    </section>

    <section id="features-overview">
        <div class="area flex gap-20 align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/eye.svg" loading="lazy">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/features/dao-mock.png" />
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/features/dao-mock.png" />
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/features/dao-mock.png" />
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">Team Management</p>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">HR Management</p>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">Financial Management</p>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">Administration Tools</p>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">Community Features</p>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO launcher</p>
                    </div>
                </a>
                <a href="#">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
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


<?php get_footer(); ?>