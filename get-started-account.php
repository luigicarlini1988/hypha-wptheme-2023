<?php
/**
 * Template Name: get-started-account
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
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="#">Get Started</a> > <?php the_title();  ?>
                    </div>
                </div>
                <h1 class="title-giga">Create your <br />Hypha Account</h1>
                <div class="text-20 light-blu"><?php the_content();  ?></div>

                <div class="buttons gap-50 flex">
                    <a href="#begin" class="button primary">Let's begin</a>
                    <a href="#" class="video-button"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg" />Watch the
                        video</a>
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

                            <p class="subtitle">Step 1 > <span class="white">Hypha Onboarding<span></p>
                        </div>
                        <p class="title-medium">Where the magin begins</p>
                        <div class="get-image-resp flex align-center justify-center">

                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-1.png" />
                            </div>

                        </div>
                        <p>Open the onboarding in a new browser tab by clicking the "sign-up" button. The
                            onboarding is fairly simple, but click the "next step" button and keep this page under
                            your radar
                            for a detailed walk through of each step</p>
                        <div class="buttons flex gap-20">
                            <a href="#inside-anchor-2" class="button primary">Sign-up</a>
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

                            <p class="subtitle">Step 2 > <span class="white">Invite<span></p>
                        </div>
                        <p class="title-medium">Scan the unique QRcode invite and download the Hypha Wallet App</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-2.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
                        <a href="#inside-anchor-3" class="button secondary">Next Step</a>
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
                        <p class="title-medium">Proceed on your Hypha Wallet Mobile App and create your Account</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="onb-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-2.jpg" />
                            </div>
                            <div class="onb-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-3.jpg" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
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
                        <p class="title-medium">After the account is created on the wallet, click the next button
                        </p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-4.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
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
                        <p class="title-medium">Now, login to your account by clicking this button</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-5.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
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

                            <p class="subtitle">Step 6 > <span class="white">Sign your first request<span></p>
                        </div>
                        <p class="title-medium">Use your Hypha Wallet to scan the login transaction request pop-ip
                        </p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-6.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
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
                        <p class="title-medium">All set! Click this button to visit Hypha DAO</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-7.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
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

                            <p class="subtitle">Step 8 > <span class="white">Welcome!<span></p>
                        </div>
                        <p class="title-medium">Welcome to Hypha Network!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create-account/step-8.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
                        <div class="buttons flex gap-20">
                            <a href="#pricing" class="button secondary">What next?</a>
                            <a href="#" class="button primary">Create Account</a>
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

    <section id="pricing" class="get-pricing">
        <div class="area with-titles  flex gap-20 align-bottom">
            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg">
                    </div>

                    <p class="subtitle">What's Next?</p>
                </div>
                <h3 class="title-medium">You are now ready to:</h3>

            </div>

        </div>
        <div class="area flex gap-20">
            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/join-a-dao/">
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
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/create-your-dao/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
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
    </section>


</main>


<?php get_footer(); ?>