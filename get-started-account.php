<?php
/**
 * Template Name: Get Started Account
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
            </div>
            <div class="col-9">
                <!--<div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php// echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php// echo home_url(); ?>/get-started/">Get Started</a> > <?php// the_title();  ?>
                    </div>
                </div>-->
                <h1 class="title-giga">Create your <br />Hypha Account</h1>
                <div class="text-20 light-blu"><?php the_content();  ?></div>

                <div class="buttons gap-50 flex">
                    <a href="#begin" class="button primary">Let's begin</a>
                    <a href="<?php echo home_url(); ?>/educational/how-to-create-an-account/" target="_blank" class="video-button"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg" />Watch the tutorial</a>
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

                            <p class="subtitle">Step 1 > <span class="white">Complete Hypha Onboarding<span></p>
                        </div>
                        <p class="title-medium">Where the magic begins</p>
                        <div class="get-image-resp flex align-center justify-center">

                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-1.png" />
                            </div>

                        </div>
                        <p>Start by opening Hypha’s DAO Platform in a new tab and create your personalized Hypha
                            Account. From there, easily navigate the step-by-step onboarding process. For additional
                            assistance, refer back to this page.</p>
                        <div class="buttons flex gap-20">
                            <a href="https://dao.hypha.earth/hypha/login" target="_blank" class="button primary">Sign-up</a>
                            <a href="#inside-anchor-2" class="button secondary">Next Step</a>
                        </div>
                    </div>
                    <div class="col-half">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-1.png" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-2" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step2" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 2 > <span class="white">Download the Hypha Wallet App<span></p>
                        </div>
                        <p class="title-medium">Accept Your Invite to Be Part Of The Next Big Thing</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-2.png" />
                            </div>
                        </div>
                        <p>Secure access to your Hypha Account by scanning your personalized QR code invitation to
                            download the Hypha Wallet App on your smartphone.</p>
                        <div class="buttons flex gap-20">
                            <a href="#inside-anchor-3" class="button secondary">Next Step</a>
                            <!--<a href="#inside-anchor-3" class="button secondary">What is a Wallet?</a>-->
                        </div>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-2.png" />
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

                            <p class="subtitle">Step 3 > <span class="white">Create your Account<span></p>
                        </div>
                        <p class="title-medium">Easily Create Your Hypha Account in No Time</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="onb-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-2.jpg" />
                            </div>
                            <div class="onb-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-3.jpg" />
                            </div>
                        </div>
                        <p>Simply provide your name and photo and you're good to proceed!</p>
                        <div class="buttons flex gap-20">

                            <a href="#inside-anchor-4" class="button secondary">Next Step</a>
                        </div>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="wallet-images flex align-center justify-center">
                            <div class="wallet-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-3.jpg" />
                            </div>
                            <div class="wallet-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-2.jpg" />
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

                            <p class="subtitle">Step 4 > <span class="white">Connect Your Account<span></p>
                        </div>
                        <p class="title-medium">Halfway done! Let's connect your account</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-4.png" />
                            </div>
                        </div>
                        <p>Protecting your account information is Hypha's priority. Just a few more steps and you'll be
                            good to go.</p>
                        <a href="#inside-anchor-5" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-4.png" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-5" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step5" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 5 > <span class="white">login to hypha DAO<span></p>
                        </div>
                        <p class="title-medium">Easily login to your account</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-5.png" />
                            </div>
                        </div>
                        <p>Effortlessly connect your Hypha Account and your Hypha Wallet for easy management and future
                            access</p>
                        <a href="#inside-anchor-6" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-5.png" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-6" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step6" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 6 > <span class="white">Authenticate your account<span></p>
                        </div>
                        <p class="title-medium">Ready, Set, Verify!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-6.png" />
                            </div>
                        </div>
                        <p>Experience instant activation by scanning your unique QR code and confirming the pop-up on
                            your Hypha Wallet App. Your account is now registered!</p>
                        <a href="#inside-anchor-7" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-6.png" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-7" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step7" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 7 > <span class="white">Enter Hypha DAO<span></p>
                        </div>
                        <p class="title-medium">Time to dive in, explore, and connect!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-7.png" />
                            </div>
                        </div>
                        <p>You're in good company! Enter the Hypha DAO to join hundreds of innovative, boundary-pushing,
                            talented members like yourself.</p>
                        <a href="#inside-anchor-8" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-7.png" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-8" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step8" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 8 > <span class="white">Welcome to Hypha DAO!<span></p>
                        </div>
                        <p class="title-medium">Time to settle in and get involved!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-8.png" />
                            </div>
                        </div>
                        <p>Welcome to Hypha DAO, we’re glad you made it! Take some time to get to know the other members
                            and familiarize yourself with the platform and its benefits.</p>
                        <div class="buttons flex gap-20">
                            <a href="#pricing" class="button secondary">What's next?</a>
                            <a href="https://dao.hypha.earth/hypha/login" target="_blank" class="button primary">Create Account</a>
                        </div>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-8.png" />
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
                    <div id="step5-counter" class="stp">5</div>
                    <div id="step6-counter" class="stp">6</div>
                    <div id="step7-counter" class="stp">7</div>
                    <div id="step8-counter" class="stp">8</div>
                </div>
            </div>

        </div>

    </section>

    <!--<section id="pricing" class="get-pricing">
        <div class="area with-titles  flex gap-20 align-bottom">
            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php// echo get_template_directory_uri(); ?>/img/icons/rocket.svg">
                    </div>

                    <p class="subtitle">What's Next?</p>
                </div>
                <h3 class="title-medium">Continue your DAO journey:</h3>

            </div>

        </div>
        <div class="area flex gap-20">
            <div class="col-4">
                <a class="nostyle" href="<?php// echo home_url(); ?>/get-started/join-a-dao/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                            </div>
                            <h3 class="title-medium">Join <br />a DAO</h3>
                            <div class="fake-button space">
                                <p>Next</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4">
                <a class="nostyle" href="<?php// echo home_url(); ?>/get-started/create-your-dao/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php// echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>
                            <h3 class="title-medium">Create <br />your DAO</h3>
                            <div class="fake-button space">
                                <p>Next</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/develop-with-us/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
                            </div>
                            <h3 class="title-medium">Develop <br />with Hypha</h3>
                            <div class="fake-button space">
                                <p>Next</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </section>-->


</main>


<?php get_footer(); ?>