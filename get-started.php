<?php
/**
 * Template Name: get-started
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero intro">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>
            <div class="get-start-icon-case">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
            </div>
            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" loading="lazy" />
                    </div>

                    <p class="subtitle">3 Easy steps to:</p>
                </div>
                <h1 class="title-giga"><?php the_title();  ?></h1>
                <div class="text-20 light-blu">
                    <?php the_content();  ?>

                </div>

            </div>
        </div>

        <div class="area flex wrap gap-20">
            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/create-hypha-account/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="absolut-alert">*Required for the other options</div>
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            </div>
                            <h3 class="title-medium">Create your <br />Hypha Account<span class="light-blu">*</span>
                            </h3>
                            <div class="fake-button space">
                                <p>LET's DAO it!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/create-your-dao/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>
                            <h3 class="title-medium">Create<br />Your DAO</h3>
                            <div class="fake-button space">
                                <p>Let's begin</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/join-a-dao/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                            </div>
                            <h3 class="title-medium">Join a DAO<br /> as Member</h3>
                            <div class="fake-button space">
                                <p>Find your DAO</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/develop-with-us/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
                            </div>
                            <h3 class="title-medium">Develop<br />with Hypha</h3>
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