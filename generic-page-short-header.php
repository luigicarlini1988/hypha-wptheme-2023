<?php
/**
 * Template Name: Generic Page Short Header
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="generic-hero short">
        <div class="generic-hero-back short"></div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-9">
                <?php if( get_field('pre_title_blu_text') ): ?>
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy" />
                    </div>

                    <p class="subtitle">
                        <?php the_field('pre_title_blu_text'); ?>
                    </p>
                </div>
                <?php endif; ?>

                <h1 class="title-giga">
                    <?php the_field('big_title'); ?>
                </h1>
                <p class="text-20 light-blu">
                    <?php the_field('header_sub_title'); ?>
                </p>
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