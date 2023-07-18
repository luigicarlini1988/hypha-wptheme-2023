<?php
/**
 * Template Name: lead-capture
 *
 */

 get_header();
 ?>

<main id="lead-capture">

    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>

    <section id="lead-area">

        <div class="lead-sidebar">
            <div class="bread_crumb"><a href="<?php echo home_url(); ?>">Home > </a> Sign-up for your DAO </div>
            <div class="ps-center">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content();?></p>
            </div>

        </div>

        <div class="form-area">
            <div class="form-wrapper">

                <iframe src="<?php the_field('lead-form-url'); ?>" frameborder="0"
                    sandbox="allow-top-navigation allow-scripts allow-forms allow-same-origin" allowfullscreen></iframe>

            </div>
        </div>

    </section>



    <?php endwhile; ?>
    <?php endif;  ?>



    <?php get_footer(); ?>