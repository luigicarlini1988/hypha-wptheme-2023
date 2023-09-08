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
                <p class="title-big">Boost your Productivity With Hypha’s Premium Services</p>
                <div class="text-20 light-blu">
                    Unleash your success: Lorem Ipsum dolor sit amet asdnalkdjlaksjd lkajsldk jaslkjd laksjd lkasjd lkasjdlasjd lkjaslkd jaslkjd lkasjd lkasjd lasjdl kasjldk j
                </div>

            </div>
        </div>
    </section>

    <section class="services-list">

        <div class="area flex wrap gap-20">

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