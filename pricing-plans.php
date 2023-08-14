<?php
/**
 * Template Name: Pricing Plans
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="pricing-hero-top">

        <div class="area top-title-pricing flex align-bottom space-between">

            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>

            <div class="col-4">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                    </div>

                    <p class="subtitle">Pricing plans</p>
                </div>
                <h1 class="title-big"><?php the_title();  ?></h1>
            </div>
            <div class="col-7">
                <p class="text-16"><?php the_content(); ?></p>
            </div>


        </div>

        <div class="area   flex gap-20 align-top">
            <div class="col-4">
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
                            <p>Build your own DAO and enable your organization to grow using Hypha’s tools. You have
                                4 pricing options.</p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/pricing-plans/ecosystem-builder/">
                    <div class="generic-card pricing glow-back has-link">
                        <div class="wrappo">
                            <div class="top-pricing-card flex align-center space-between">
                                <p class="text-16 light-blu bold">From:</p>
                                <div class="actual-price">
                                    <div class="wrap">
                                        5,555<span class="currency">hypha Staked</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-medium">Ecosystem</h3>
                            <p>Create an ecosystem of interconnected DAOs to deliver greater impact across a region,
                                a country, or globally.</p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/pricing-plans/developer-plan/">
                    <div class="generic-card pricing glow-back has-link">
                        <div class="wrappo">
                            <div class="top-pricing-card flex align-center space-between">
                                <p class="text-16 light-blu bold">From:</p>
                                <div class="actual-price">
                                    <div class="wrap">
                                        5<span class="currency">hypha Staked</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-medium">Developers</h3>
                            <p>Build your own DAO and enable your organization to grow using Hypha’s tools. You have
                                4 pricing options.</p>
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