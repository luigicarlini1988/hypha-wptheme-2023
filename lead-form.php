<?php
/**
 * Template Name: Lead Form
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="generic-hero lead">
        <div class="generic-hero-back"></div>
        <div class="area flex gap-50 align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-half">

                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?><?php the_field('icon_path')?>" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/hyphalab/">hyphalab</a> > Become an Hypha's:
                    </div>
                </div>


                <h1 class="title-big">
                    <?php the_title();  ?>
                </h1>
                <p class="text-20 light-blu">
                    <?php the_field('header_subtitle_blu'); ?>
                </p>
                <?php if( get_field('header_subtitle_white') ): ?>
                <p class="white">
                    <?php the_field('header_subtitle_white'); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="col-half">
                <?php 
                    include ('incl/mautic-form-dynamic.html') ;
                    ?>
            </div>
        </div>
    </section>


</main>


<?php get_footer(); ?>