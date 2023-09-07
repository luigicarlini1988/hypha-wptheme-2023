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

                <?php if (!is_page('get-started')):?>
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?><?php the_field('icon_path')?>" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/hypha-labs/">Hypha Labs</a> > Become an Hypha's:
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!is_page('get-started')):?>
                    <h1 class="title-big">
                       <?php the_title();  ?>
                     </h1>
                <?php endif; ?>

                <?php if (is_page('get-started')):?>
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?><?php the_field('icon_path')?>" />
                    </div>

                    <div class="breadcrumbs">
                        <h1 class="subtitle light-blu">Get Started</h1>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (is_page('get-started')):?>
                    <h2 class="title-big">
                        Signup for <br />your Hypha DAO
                    </h2>
                <?php endif; ?>
                

                

                

                <?php ?>

                <p class="text-20 light-blu">
                    <?php the_field('header_subtitle_blu'); ?>
                </p>
                <?php if( get_field('header_subtitle_white') ): ?>
                <p>
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