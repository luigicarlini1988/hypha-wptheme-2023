<?php
/**
 * Template Name: get-started-create
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
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
                <div class="text-20 light-blu"><?php the_content();  ?></div>

                <div class="buttons gap-50 flex">
                    <a href="#begin" class="button primary">Let's begin</a>
                    <a href="#" class="video-button"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg" />Watch the
                        tutorial</a>
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

                            <p class="subtitle">Step 1 > <span class="white">Login your Hypha Account</span></p>
                        </div>
                        <p class="title-medium">Let’s Get Started! Log Into Hypha’s DAO Launcher</p>
                        <div class="get-image-resp flex align-center justify-center">

                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-1.png" />
                            </div>

                        </div>
                        <p>Get excited to join a thriving community of 100+ DAOs! <br />Note: A
                            Hypha
                            Account is required for
                            this step. Don't have one yet? <br /> <a class="simple-link"
                                href="<?php echo home_url(); ?>/get-started/create-hypha-account/">Click here to create
                                yours now.</a></p>
                        <div class="buttons flex gap-20">
                            <a href="#" class="button primary">DAO Launcher</a>
                            <a href="#inside-anchor-2" class="button secondary">Next Step</a>
                        </div>
                    </div>
                    <div class="col-half">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-1.png" />
                            </div>

                        </div>
                    </div>

                    <!-- <div class="bottom-alert">
                        *Hypha Account required<br />
                        <a href="#">Click here to discover how to create one</a>
                    </div> -->
                </div>


                <div id="inside-anchor-2" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step2" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 2 > <span class="white">Create your DAO</span></p>
                        </div>
                        <p class="title-medium">Easily create your DAO in just a few clicks</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-8.jpg" />
                            </div>
                        </div>
                        <p>We can’t wait to learn more about your DAO and how the thriving Hypha Network can help
                            support its success!</p>
                        <a href="#inside-anchor-3" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-8.jpg" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-3" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step3" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 3 > <span class="white">Make It Your Own</span> </p>
                        </div>
                        <p class="title-medium">Time to customize your brand new DAO!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-10.jpg" />
                            </div>
                        </div>
                        <p>Your DAO, your way. Easily choose from a variety of pre-designed DAO templates for a seamless
                            start, or unleash your creativity and design your perfect DAO from scratch.</p>
                        <div class="buttons flex gap-20">
                            <a href="#inside-anchor-4" class="button secondary">Next Step</a>
                            <a href="#" class="button secondary">About Templates</a>
                        </div>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-10.jpg" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-4" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step4" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 4 > <span class="white">Let's DAO it!</span></p>
                        </div>
                        <p class="title-medium">Cleared for launch: your DAO is ready for takeoff!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-11.png" />
                            </div>
                        </div>
                        <p>You did it! Congrats on creating your new DAO. From here, take a moment to familiarize
                            yourself with all the possibilities that lie ahead. Your DAO journey to success starts here!
                        </p>

                        <div class="buttons flex gap-20">
                            <a href="#" class="button primary">Create DAO</a>
                            <a href="#pricing" class="button secondary">Pricing plans</a>
                        </div>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-dao/create-11.png" />
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="steps-counter">
                <div class="counting">
                    <div id="step1-counter" class="stp">1</div>
                    <div id="step2-counter" class="stp">2</div>
                    <div id="step3-counter" class="stp">3</div>
                    <div id="step4-counter" class="stp">4</div>
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