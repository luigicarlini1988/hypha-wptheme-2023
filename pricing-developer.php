<?php
/**
 * Template Name: Pricing Developer
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="pricing-hero-top inside">

        <div class="area top-title-pricing dev gap-50 flex align-bottom space-between">

            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>

            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/pricing-plans/">Pricing Plans</a> > <?php the_title(); ?>
                    </div>
                </div>
                <h1 class="title-big"><?php the_title(); ?></h1>

                <div class="text-18"><?php the_content(); ?></div>
            </div>

            <div class="col-full">
                <div class="generic-card dev-plan">
                    <div class="wrappo flex wrap gap-20">
                        <div class="col-full flex space-between">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
                            </div>
                            <p class="text-18 white"><strong>Developer</strong> <span class="light-blu">Plan</span>
                            </p>
                        </div>

                        <div class="col-full flex gap-20 align-bottom">
                            <div class="col-x">
                                <p class="white text-42">All DAO Features</p>
                            </div>
                            <div class="col-full text-right">
                                <div class="flex align-center justify-right">
                                    <img class="hypha-cur"
                                        src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                                    <span class="title-56 white">5</span>
                                </div>
                                <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury, <br /><span
                                        class="white">Per each DAO member</span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </section>
    <section class="builder-pricing">
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" />
                    </div>

                    <p class="subtitle">Get Staretd Today</p>
                </div>
                <p class="title-big">Get Started</p>
                <p class="text-24 light-blu">Get in touch with us to share your project vision and activate the
                    Developer plan
                </p>
                <p>In order to maintain an healthy ecosystem of developers we decided to go for a IRL chat with you
                    or your DEV group, prior to the “unlock” of the Developer DAO. so that we can align and offer
                    all the support required.</p>

            </div>

            <div class="col-half">
                <?php 
                        include ('incl/generic-form.html') ;
                    ?>
            </div>
        </div>
    </section>

    <section class="upsell">
        <?php 
                include ('incl/pricing-upsell.html') ;
            ?>

    </section>



</main>


<?php get_footer(); ?>