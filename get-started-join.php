<?php
/**
 * Template Name: Get Started Join
 *
 */

 get_header();
 ?>
<main class="dark-theme">
    <div id="eos-banner">
        <a href="https://eos.hypha.earth/" target="_blank">
            <div class="flex gap-20 align-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/eos-logo.png" />
                <p class="white">Want to proceed on EOS? Click here</p>
            </div>
        </a>
    </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
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
                <h1 class="title-giga"><?php the_title();  ?><br /> as a member</h1>
                <div class="text-20 light-blu"><?php the_content();  ?></div>

                <div class="buttons gap-50 flex">
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

                            <p class="subtitle">Step 1 > <span class="white">Explore the Hypha Network</span></p>
                        </div>
                        <p class="title-medium">Explore our network of DAOs and Choose your Next Adventure!</p>
                        <div class="get-image-resp flex align-center justify-center">

                            <div class="full-screen-dao">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-1.png" />
                            </div>

                        </div>
                        <p>Discover your perfect DAO match! With so many DAOs, there’s bound to be one (or even multiple!) that aligns perfectly with your interests.</p>
                        <div class="buttons flex gap-20">
                            <a href="https://dao.hypha.earth/" target="_blank" class="button primary">Explore</a>
                            <a href="#inside-anchor-2" class="button secondary">Next Step</a>
                        </div>
                    </div>
                    <div class="col-half">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-1.png" />
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

                            <p class="subtitle">Step 2 > <span class="white"> Login to your Account</span>
                            </p>
                        </div>
                        <p class="title-medium">Login to your Hypha Account to enter the DAO</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-2.png" />
                            </div>
                        </div>
                        <p>In order to access any DAO on the Hypha network, simply login into your Hypha Account. If you don’t have one, just click on the "create hypha account" button to create one. You can read more about how to create an hypha account by <a class="light-blu" href="<?php echo home_url(); ?>/get-started/create-hypha-account/" target="_blank">clicking here</a></p>

                        <a href="#inside-anchor-3" class="button secondary">Next Step</a>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-2.png" />
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

                            <p class="subtitle">Step 3 > <span class="white">Apply to Join</span></p>
                        </div>
                        <p class="title-medium">Find your perfect match? Apply to join now!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-3.png" />
                            </div>
                        </div>
                        <p>Congrats on discovering the DAO for you! At Hypha, we prioritize our customers’ security and ensure a bot-free environment by vetting all applicants before admission.</p>

                        <a href="#inside-anchor-4" class="button secondary">Next Step</a>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-3.png" />
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

                            <p class="subtitle">Step 4 > <span class="white">Enrollment</span></p>
                        </div>
                        <p class="title-medium">Your application is under review! Check back for updates.</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-4.png" />
                            </div>
                        </div>
                        <p>Your work is done for now! Sit back and relax until your application has been approved.</p>

                        <a href="https://dao.hypha.earth/" target="_blank" class="button primary">Explore Hypha Network</a>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="onb-images flex wrap align-center justify-center">

                            <div class="full-screen-dao flex justify-center align-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-4.png" />
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


</main>


<?php get_footer(); ?>