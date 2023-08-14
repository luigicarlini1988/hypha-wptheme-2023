<?php
/**
 * Template Name: Redirect Post Beta
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="generic-hero">
        <div class="generic-hero-back"></div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-9">
                <?php if( get_field('pre_title_blu_text') ): ?>
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" loading="lazy" />
                    </div>

                    <p class="subtitle">
                        The Wait is over!
                    </p>
                </div>
                <?php endif; ?>

                <h1 class="title-giga">
                    You Can Now <br />Create your DAO!
                </h1>
                <div class="text-20 light-blu">
                    <?php the_content(); ?>
                </div>

                <div class="buttons gap-20 flex">
                    <a href="<?php echo home_url(); ?>/get-started/" class="button primary">Get Started!</a>
                </div>
            </div>
        </div>
    </section>





</main>


<?php get_footer(); ?>