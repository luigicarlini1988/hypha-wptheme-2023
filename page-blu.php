<?php
/**
 * Template Name: page-blu
 *
 */

 get_header();
 ?>

<main id="blu-pages">
    <!-- test -->
    <div class="about-parall parallax"
        data-image-src="<?php echo get_template_directory_uri(); ?>/img/3-steps-back.jpg">
    </div>

    <?php if ( have_posts() ) :
			// Do we have any posts/pages in the databse that match our query?
			?>

    <?php while ( have_posts() ) : the_post();
				// If we have a page to show, start a loop that will display it
				?>

    <section class="about-header">
        <div class="foglio">
            <a class="backlink" href="javascript:history.back()">Go back</a>
            <h1><?php the_title();?></h1>
            <p class="hero-text"><?php the_field('subheading'); ?></p>
        </div>
    </section>


    <section class="about-body">

        <div id="scroll_top"></div>

        <div class="yellowdots lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
            <img src="<?php echo get_template_directory_uri(); ?>/img/yellowdots.svg" />
        </div>

        <div class="foglio">
            <div class="text-body">
                <?php the_content();?>
            </div>

            <?php if( get_field('special') ): ?>
            <div class="about-portlet">
                <?php the_field('special'); ?>
            </div>
            <?php endif; ?>

        </div>

    </section>

    <?php endwhile; ?>
    <?php endif;  ?>

    <?php get_footer(); ?>