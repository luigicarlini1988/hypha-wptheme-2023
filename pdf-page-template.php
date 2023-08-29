<?php
/**
 * Template Name: PDF page template
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="pdf-hero-top">

        <div class="area top-title-pricing flex gap-50 align-center space-between">

            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>

            <div class="col-8 flex align-center">
                <div>
                    <div class="sub-section flex align-center">
                        <div class="icon small">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                        </div>
                        <p class="subtitle"><?php the_field('pre_title') ?></p>
                    </div>
                    <h1 class="title-78"><?php the_title()?></h1>
                    <div class="text-18">
                        <p>
                            <?php the_field('explainer_text') ?>
                        </p>
                    </div>

                    <div class="buttons flex gap-20">
                        <a href="<?php the_field('url_pdf') ?>" target="_blank" class="button primary">Download PDF</a>
                        <a href="#summary" class="button secondary">Read Summary</a>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="wrappo">

                    <img src="<?php the_field('cover_image') ?>" />
                </div>
            </div>

        </div>

    </section>

    <section id="summary">
        <div class="area">
            <?php the_content()?>
            <div class="buttons flex gap-20">
                <a href="<?php the_field('url_pdf') ?>" target="_blank" class="button primary">Download PDF</a>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>