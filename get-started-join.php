<?php
/**
 * Template Name: get-started-join
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
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
                <h1 class="title-giga"><?php the_title();  ?><br /> as a member</h1>
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

                            <p class="subtitle">Step 1 > <span class="white">Login your Hypha Account*</span></p>
                        </div>
                        <p class="title-medium">Visit the Our DAO and log-in your account</p>
                        <div class="get-image-resp flex align-center justify-center">

                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-1.png" />
                            </div>

                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>
                        <div class="buttons flex gap-20">
                            <a href="https://dao.hypha.earth/hypha/login" target="_blank"
                                class="button primary">Login</a>
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

                    <div class="bottom-alert">
                        *Hypha Account required<br />
                        <a href="#">Click here to discover how to create one</a>
                    </div>
                </div>


                <div id="inside-anchor-2" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step2" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 2 > <span class="white">Visit the Explore Page</span></p>
                        </div>
                        <p class="title-medium">Click on the Explore Icon bottom left</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-2.png" />
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

                            <p class="subtitle">Step 3 > <span class="white">Explore the Hypha Network</span></p>
                        </div>
                        <p class="title-medium">Browse all hypha network DAOs on our Explore page </p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-3.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>

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

                            <p class="subtitle">Step 4 > <span class="white">join a DAO</span></p>
                        </div>
                        <p class="title-medium">Click the top right button “Became Member”</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-4.png" />
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
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-4.png" />
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

                            <p class="subtitle">Step 5 > <span class="white">Enrollment</span></p>
                        </div>
                        <p class="title-medium">A Dao Enroller is now in charge to let you in!</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/get-started/join-dao/join-4.png" />
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, </p>

                        <a href="https://dao.hypha.earth/hypha/explore" target="_blank" class="button primary">Explore
                            Hypha Network</a>

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
                    <div id="step5-counter" class="stp">5</div>
                </div>
            </div>

        </div>

    </section>


</main>


<?php get_footer(); ?>