<?php
/**
 * Template Name: get-started-developer
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero">
        <div class="get-started-hero-back">
            <div class="pin-area">
                <div class="pin pin1"></div>
                <div class="pin pin2"></div>
                <div class="pin pin3"></div>
                <div class="pin pin4"></div>
                <div class="pin pin5"></div>
            </div>
        </div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="get-start-icon-case">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
            </div>
            <div class="col-9">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/get-started/">Get Started</a> > <?php the_title();  ?>
                    </div>
                </div>
                <h1 class="title-giga"><?php the_title();  ?></h1>
                <p class="text-20 light-blu">Hello developer! We are thrilled to expand our developer community,
                    this why we decided to offer a specific price plan, just for developers</p>

                <div class="buttons gap-20 flex">
                    <a href="#begin" class="button primary">Let's begin</a>
                </div>
            </div>
        </div>
    </section>

    <section class="get-steps">
        <div class="area flex">

            <div id="begin" class="steps">
                <div class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step1" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 1</p>
                        </div>
                        <p class="title-medium">Get in touch with us</p>

                        <p>In order to maintain an healthy ecosystem of developers we decided to go for a IRL chat
                            with you or your DEV group, prior to the “unlock” of the Developer DAO. so that we can
                            align and offer all the support required. </p>

                        <a href="#inside-anchor-2" class="no-resp button secondary">Next Step</a>
                    </div>
                    <div class="col-half">
                        <?php 
                                include ('incl/generic-form.html') ;
                            ?>
                    </div>
                </div>

                <div id="inside-anchor-2" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step2" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 2</p>
                        </div>
                        <p class="title-medium">Create your DAO</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />
                            </div>
                        </div>
                        <p>The process is exactly the same as per any other DAO, what will change, is that instead
                            of paying a fee, you will just need to stake 5 hypha per each of your DAO members.
                            Pretty neat ah?! Once we get to know each other we will grant you permission to activate
                            the Developer Plan. In the meantime, you can sart by creating a normal DAO on the free
                            plan</p>
                        <div class="buttons flex gap-20 wrap">
                            <a href="#" class="button primary">Create Your DAO</a>
                            <a href="#pricing" class="button secondary">Pricing Plans</a>
                        </div>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="no-resp dao-outline-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="steps-counter">
                <div class="counting">
                    <div id="step1-counter" class="stp">1</div>
                    <div id="step2-counter" class="stp">2</div>
                </div>
            </div>

        </div>

    </section>

    <section id="pricing" class="get-pricing">
        <?php 
                include ('incl/pricing-cards.html') ;
            ?>
    </section>


</main>


<?php get_footer(); ?>