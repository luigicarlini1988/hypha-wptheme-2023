<?php
/**
 * Template Name: use-cases
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero intro use-cases">
        <div class="get-started-hero-back">

        </div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>

            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" loading="lazy" />
                    </div>

                    <h1 class="subtitle"><?php the_title();  ?></h1>
                </div>
                <p class="title-giga">Discover Our Specific Use Cases</p>
                <div class="text-20 light-blu">
                    <?php the_content();  ?>

                </div>

            </div>
        </div>

        <div class="area flex wrap gap-20">

            <?php $usecases = get_field('select_use_cases');
            if( $usecases ): ?>

            <?php foreach( $usecases as $post ): 
                setup_postdata($post); ?>
            <div class="col-x">
                <a class="nostyle" href="<?php the_permalink(); ?>">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40"><?php the_title(); ?></h3>
                            <p class="text-20 light-blu"><?php the_field('tagline') ?></p>
                            <p><?php the_content(); ?></p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>


        </div>
    </section>



</main>


<?php get_footer(); ?>