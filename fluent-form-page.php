<?php
/**
 * Template Name: fluent-form-page
 *
 */

 get_header();
 ?>


<main id="newsletter-page">
    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>




    <section id="newsletter-page-header">
        <div class="top-nl-logos">
            <!-- <img class="rl" src="https://mautic.hypha.earth/media/files/5fd70d239db9c80fef1c176bdd32e36d06a5ff84.png"> -->
            <img class="tl" src="https://mautic.hypha.earth/media/files/2a0151561f60e8bda496d99f3ce5597c25d37f22.png">
            <p class="prefcenter"><?php the_title(); ?></p>
        </div>
    </section>

    <section id="pref-space">
        <div id="preference-center-mautic">
            <div class="pcm-top">

                <p class="fake-title"><?php the_field('fluent_form_title'); ?></p>
                <p class="disclaimer"><?php the_field('fluent_form_description'); ?></p>
            </div>

            <div id="form-wrap">
                <?php the_content();?>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif;  ?>


    <?php get_footer(); ?>