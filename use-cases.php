<?php
/**
 * Template Name: use-cases
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero intro use-cases">
        <div class="get-started-hero-back">

        </div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>

            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" loading="lazy" />
                    </div>

                    <h1 class="subtitle"><?php the_title();  ?></h1>
                </div>
                <p class="title-giga">Discover Our Specific Use Cases</p>
                <div class="text-20 light-blu">
                    <?php the_content();  ?>

                </div>

            </div>
        </div>

        <div class="area flex wrap gap-20">


            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/startups/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40">Startups</h3>
                            <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod tempor </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/consultancies/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40">Impact Projects</h3>
                            <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod tempor </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/consultancies/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40">Consultancies</h3>
                            <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod tempor </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>



</main>


<?php get_footer(); ?>