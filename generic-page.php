<?php
/**
 * Template Name: generic-page
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

                <h1 class="title-giga"><?php the_title();  ?></h1>
                <p class="text-20 light-blu"><?php the_field('header_sub_title'); ?></p>

                <div class="buttons gap-20 flex">
                    <a href="#content-area" class="button secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="content-area" class="generic-content">
        <div class="area">
            <?php the_content(); ?>
        </div>
    </section>




</main>


<?php get_footer(); ?>