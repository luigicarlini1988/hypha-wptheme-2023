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
                <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect
                    adipiscing elit, </p>

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
                        <p class="title-medium">Visit the DAO Launcher
                            and click “create hypha account”</p>
                        <div class="get-image-resp flex align-center justify-center">

                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-1.jpg" />
                            </div>

                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>

                        <a href="#inside-anchor-2" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-1.jpg" />
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

                            <p class="subtitle">Step 2</p>
                        </div>
                        <p class="title-medium">Scan the unique QRcode invite and download the Hypha Wallet App</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-2.jpg" />
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
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-2.jpg" />
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

                            <p class="subtitle">Step 3</p>
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

                            <p class="subtitle">Step 4</p>
                        </div>
                        <p class="title-medium">After the account is created on the wallet, click the next button
                        </p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-4.jpg" />
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
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-4.jpg" />
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

                            <p class="subtitle">Step 5</p>
                        </div>
                        <p class="title-medium">Now, login to your account by clicking this button</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-5.jpg" />
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
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-5.jpg" />
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

                            <p class="subtitle">Step 6</p>
                        </div>
                        <p class="title-medium">Use your Hypha Wallet to scan the login transaction request pop-ip
                        </p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-6.jpg" />
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
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-6.jpg" />
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

                            <p class="subtitle">Step 7</p>
                        </div>
                        <p class="title-medium">Now that your account is created and connected, click this button to
                            create your DAO</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-7.jpg" />
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
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-7.jpg" />
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

                            <p class="subtitle">Step 8</p>
                        </div>
                        <p class="title-medium">Create and publish your DAO in just 1 step!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-8.jpg" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
                        <a href="#inside-anchor-9" class="button secondary">Next Step</a>
                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-8.jpg" />
                            </div>

                        </div>
                    </div>
                </div>

                <div id="inside-anchor-9" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step9" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 9</p>
                        </div>
                        <p class="title-medium">Choose a template or start from scratch</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-10.jpg" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>

                        <div class="buttons flex gap-20">
                            <a href="#" class="button primary">Create DAO</a>
                            <a href="#pricing" class="button secondary">Pricing plans</a>
                        </div>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/create/create-10.jpg" />
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
                    <div id="step9-counter" class="stp">9</div>
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