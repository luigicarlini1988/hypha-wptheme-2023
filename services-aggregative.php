<?php
/**
 * Template Name: Services Aggregative
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="services-aggregative">
        <div class="services-hero-back">

        </div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>

            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" loading="lazy" />
                    </div>

                    <h1 class="subtitle"><?php the_title();  ?></h1>
                </div>
                <p class="title-big">
                    <?php the_field('big_white_text'); ?>
                </p>
                <div class="text-20 light-blu">
                    <?php the_field('blu_text_description'); ?>
                </div>

            </div>
        </div>
    </section>

    <section class="services-list">

        <div class="area flex wrap gap-20">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" loading="lazy" />
                    </div>

                    <p class="text-28 white">Group <span class="light-blu">Services</span></p>
                </div>
            </div>

            <div class="col-half">
                <a class="nostyle" href="<?php echo home_url(); ?>/pricing-plans/dao-builder/">
                    <div class="generic-card pricing glow-back has-link">
                        <div class="wrappo">
                            <div class="top-pricing-card flex align-center space-between">
                                <p class="text-16 light-blu bold">From:</p>
                                <div class="actual-price">
                                    <div class="wrap">
                                        <span class="currency">$</span>0
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-medium">DAO Builder</h3>
                            <p>Set your DAO up for success by using Hypha's tools!. Check out the 4 different pricing options to
                                learn more</p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-half">
                <a class="nostyle" href="<?php echo home_url(); ?>/pricing-plans/dao-builder/">
                    <div class="generic-card pricing glow-back has-link">
                        <div class="wrappo">
                            <div class="top-pricing-card flex align-center space-between">
                                <p class="text-16 light-blu bold">From:</p>
                                <div class="actual-price">
                                    <div class="wrap">
                                        <span class="currency">$</span>0
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-medium">DAO Builder</h3>
                            <p>Set your DAO up for success by using Hypha's tools!. Check out the 4 different pricing options to
                                learn more</p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>

        <div class="area tailored flex wrap gap-20">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/puzzle.svg" loading="lazy" />
                    </div>

                    <p class="text-28 white">Tailored <span class="light-blu">Services</span></p>
                </div>
            </div>

            <div class="col-half">
                <a class="nostyle" href="<?php echo home_url(); ?>/pricing-plans/dao-builder/">
                    <div class="generic-card pricing glow-back has-link">
                        <div class="wrappo">
                            <div class="top-pricing-card flex align-center space-between">
                                <p class="text-16 light-blu bold">From:</p>
                                <div class="actual-price">
                                    <div class="wrap">
                                        <span class="currency">$</span>0
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-medium">DAO Builder</h3>
                            <p>Set your DAO up for success by using Hypha's tools!. Check out the 4 different pricing options to
                                learn more</p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-half">
                <a class="nostyle" href="<?php echo home_url(); ?>/pricing-plans/dao-builder/">
                    <div class="generic-card pricing glow-back has-link">
                        <div class="wrappo">
                            <div class="top-pricing-card flex align-center space-between">
                                <p class="text-16 light-blu bold">From:</p>
                                <div class="actual-price">
                                    <div class="wrap">
                                        <span class="currency">$</span>0
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-medium">DAO Builder</h3>
                            <p>Set your DAO up for success by using Hypha's tools!. Check out the 4 different pricing options to
                                learn more</p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </section>



</main>


<?php get_footer(); ?>