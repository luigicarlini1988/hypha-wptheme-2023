<?php
/**
 * Template Name: tokenomics
 *
 */

 get_header();
 ?>

<main id="tokenomics">
    <!-- test -->

    <?php if ( have_posts() ) :
			// Do we have any posts/pages in the databse that match our query?
			?>

    <?php while ( have_posts() ) : the_post();
				// If we have a page to show, start a loop that will display it
				?>

    <section id="tokenomics-full">
        <div class="foglio">
            <div class="tok-centered">
                <div class="tok-log-h">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-light.svg" />
                    <h1>White Papers</h1>
                </div>
                <button type="submit"
                    onclick="window.open('<?php echo get_template_directory_uri(); ?>/pdf/Hypha_V1_5.pdf')"
                    class="button-blu">Download
                    PDF</button>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif;  ?>

    <?php get_footer(); ?>