<?php

 get_header();
 ?>

<main class="dark-theme">
    <section class="features-hero">
        <div class="area flex gap-50 align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" />
                    </div>
                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/features/">Features</a> >
                        <?php the_title();  ?>
                    </div>
                </div>
                <h1 class="title-big"><?php the_title(); ?></h1>
                <img class="resp-image shape" src="<?php the_field('header_image') ?>" />

                <div class="text-20"><?php the_content();  ?></div>
                <a href="#features-overview" class="button secondary">Discover</a>
            </div>
            <div class="col-half">
                <img class="feat-top shape" src="<?php the_field('header_image') ?>" />
            </div>
        </div>
    </section>

    <section id="features-overview">
        <div class="area flex gap-20 align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/eye.svg" loading="lazy">
                    </div>

                    <p class="subtitle">Features Overview</p>
                </div>
                <p class="text-28 white"><?php the_field('overview_text_big') ?></p>
            </div>

            <div class="col-half">
                <p class="text-20"><?php the_field('overview_text_small') ?>
                </p>

            </div>
        </div>

        <div class="area with-feature-carousel">
            <div id="features-carousel" class="owl-carousel owl-theme">
                <?php if( get_field('video_url') ): ?>
                <div class="feature-carusel-item">

                    <div class="embedwrapper">
                        <?php the_field('video_url') ?>
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('video_title') ?></p>
                        <p class="text-16"><?php the_field('video_description') ?></p>
                    </div>

                </div>
                <?php endif; ?>

                <?php if( get_field('gallery_image_1') ): ?>
                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img src="<?php the_field('gallery_image_1') ?>" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('gallery_content_title_1') ?></p>
                        <p class="text-16"><?php the_field('gallery_content_1') ?></p>
                    </div>

                </div>
                <?php endif; ?>

                <?php if( get_field('gallery_image_2') ): ?>
                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img src="<?php the_field('gallery_image_2') ?>" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('gallery_title_2') ?></p>
                        <p class="text-16"><?php the_field('gallery_content_2') ?></p>
                    </div>

                </div>
                <?php endif; ?>

                <?php if( get_field('gallery_image_3') ): ?>
                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img src="<?php the_field('gallery_image_3') ?>" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('gallery_title_3') ?></p>
                        <p class="text-16"><?php the_field('gallery_content_3') ?></p>

                    </div>

                </div>
                <?php endif; ?>

            </div>
    </section>

    <section class="feature-cpt-list">
        <div class="area with-titles flex gap-20 align-bottom">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Explore "<i><?php the_title(); ?></i>" Features</h2>
                </div>
                <p class="text-28 white">Want to dive deep? Check out all the features in this
                    "<i><?php the_title(); ?></i>"
                    category</p>
            </div>


        </div>
        <div class="area flex gap-20 wrap">

            <?php   $recent_posts = array(
                'post_type' => 'feature',
                'tax_query' => array(             
                    array(
                       'taxonomy' => 'group',
                       'field' => 'slug',
                       'terms' => 'shape-your-organisation'
                   ),
                ),
                'post_status' => 'publish',
                'posts_per_page' => '20',
                'orderby'   => array(
                  'date' =>'DESC'
                ),
                
                );

              $arr_feat_post = new WP_Query( $recent_posts );

              if ( $arr_feat_post->have_posts() ) :

              while ( $arr_feat_post->have_posts() ) :
                  $arr_feat_post->the_post();
                  ?>


            <div class="col-4">
                <a class="nostyle" href="<?php the_permalink(); ?>">
                    <div class="generic-card feat glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?><?php the_field('feature_icon_path')?>" />
                            </div>
                            <h3 class="title-medium"><?php the_title(); ?></h3>
                            <p><?php the_field('feature_short_description') ?></p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php
              endwhile;
              endif;
           ?>



        </div>
    </section>

    <?php 
        include ('incl/explore-features-web3.html') ;
    ?>

    <section class="cta">
        <div class="area">
            <?php 
                include ('incl/maincta.php') ;
                ?>
        </div>
    </section>








</main>


<?php get_footer(); ?>