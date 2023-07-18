<?php
/**
 * Template Name: funnels
 *
 */

 get_header();
 ?>


<main id="target_funnel">
    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>



    <section id="target_header">

        <div id="target-header-foglio">
            <div class="cont">
                <div>
                    <p class="pre-title"><?php the_field('pre-title'); ?></p>
                    <h1><?php the_title();?></h1>
                    <p><?php the_content();?></p>
                    <div class="th-cta">
                        <a class="button-blu"
                            href=" <?php the_field('main-cta-link'); ?> "><?php the_field('main-cta-text'); ?></a>
                    </div>
                </div>

                <a href="#problems_solutions" class="discover-more">
                    Discover more <div class="triangul"></div>
                </a>
            </div>

            <div class="immg">
                <div class="hfb-wrap">
                    <img class="head-fun-back"
                        src="<?php echo get_template_directory_uri(); ?>/img/funnels/funnels-back.png" />
                </div>
                <div class="hff-wrap">
                    <img class="head-fun-front" src=" <?php the_field('header-image'); ?> " />
                </div>
            </div>
        </div>

    </section>


    <section id="problems_solutions">
        <div class="foglio">
            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle"><?php the_field('solutions-pretitle'); ?></p>
                    <h3><?php the_field('solutions-title'); ?></h3>
                </div>

                <div class="fifty">
                    <p class="intro-bold"><?php the_field('solutions-side-content'); ?></p>
                </div>
            </div>

            <div class="sol_prob_list">
                <div class="spl_row">
                    <div class="fifty">
                        <p class="content-pretitle">Problems</p>
                    </div>

                    <div class="fifty">
                        <p class="content-pretitle">Solutions</p>
                    </div>
                </div>

                <?php if( get_field('problem1-title') ): ?>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title"><?php the_field('problem1-title'); ?></p>
                        <p class="prob_desc"><?php the_field('problem1-text'); ?></p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title"><?php the_field('solution1-title'); ?></p>
                            <p class="prob_desc"><?php the_field('solution1-text'); ?></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>



                <?php if( get_field('problem2-title') ): ?>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title"><?php the_field('problem2-title'); ?></p>
                        <p class="prob_desc"><?php the_field('problem2-text'); ?></p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title"><?php the_field('solution2-title'); ?></p>
                            <p class="prob_desc"><?php the_field('solution2-text'); ?></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>


                <?php if( get_field('problem3-title') ): ?>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title"><?php the_field('problem3-title'); ?></p>
                        <p class="prob_desc"><?php the_field('problem3-text'); ?></p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title"><?php the_field('solution3-title'); ?></p>
                            <p class="prob_desc"><?php the_field('solution3-text'); ?></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>

                <?php if( get_field('problem4-title') ): ?>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title"><?php the_field('problem4-title'); ?></p>
                        <p class="prob_desc"><?php the_field('problem4-text'); ?></p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title"><?php the_field('solution4-title'); ?></p>
                            <p class="prob_desc"><?php the_field('solution4-text'); ?></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>


                <?php if( get_field('problem5-title') ): ?>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title"><?php the_field('problem5-title'); ?></p>
                        <p class="prob_desc"><?php the_field('problem5-text'); ?></p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title"><?php the_field('solution5-title'); ?></p>
                            <p class="prob_desc"><?php the_field('solution5-text'); ?></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="features">

        <div class="foglio">

            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle"><?php the_field('features-pretitle'); ?></p>
                    <h3><?php the_field('features-title'); ?></h3>
                </div>

                <div class="fifty">
                    <p class="intro-bold"><?php the_field('features-side-content'); ?></p>
                </div>
            </div>

            <div class="lefty">
                <div class="dao-feature-text">
                    <p class="content-pretitle"><?php the_field('feature1-category'); ?></p>
                    <h3><?php the_field('feature1-name'); ?></h3>
                    <p><?php the_field('feature1-description'); ?></p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img src="<?php the_field('feature1-image1'); ?>" /></div>
                    <div class="thumb"><img src="<?php the_field('feature1-image2'); ?>" /></div>
                </div>
            </div>

            <?php if( get_field('feature2-name') ): ?>

            <div class="righty">
                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img src="<?php the_field('feature2-image1'); ?>" /></div>
                    <div class="thumb"><img src="<?php the_field('feature2-image2'); ?>" /></div>
                </div>

                <div class="dao-feature-text">
                    <p class="content-pretitle"><?php the_field('feature2-category'); ?></p>
                    <h3><?php the_field('feature2-name'); ?></h3>
                    <p><?php the_field('feature2-description'); ?></p>
                </div>
            </div>

            <?php endif; ?>

            <?php if( get_field('feature3-name') ): ?>

            <div class="lefty">
                <div class="dao-feature-text">
                    <p class="content-pretitle"><?php the_field('feature3-category'); ?></p>
                    <h3><?php the_field('feature3-name'); ?></h3>
                    <p><?php the_field('feature3-description'); ?></p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img src="<?php the_field('feature3-image1'); ?>" /></div>
                    <div class="thumb"><img src="<?php the_field('feature3-image2'); ?>" /></div>
                </div>
            </div>

            <?php endif; ?>

            <?php if( get_field('feature4-name') ): ?>

            <div class="righty">
                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img src="<?php the_field('feature4-image1'); ?>" /></div>
                    <div class="thumb"><img src="<?php the_field('feature4-image2'); ?>" /></div>
                </div>

                <div class="dao-feature-text">
                    <p class="content-pretitle"><?php the_field('feature4-category'); ?></p>
                    <h3><?php the_field('feature4-name'); ?></h3>
                    <p><?php the_field('feature4-description'); ?></p>
                </div>
            </div>

            <?php endif; ?>

            <?php if( get_field('feature5-name') ): ?>
            <div class="lefty">
                <div class="dao-feature-text">
                    <p class="content-pretitle"><?php the_field('feature5-category'); ?></p>
                    <h3><?php the_field('feature5-name'); ?></h3>
                    <p><?php the_field('feature5-description'); ?></p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img src="<?php the_field('feature5-image1'); ?>" /></div>
                    <div class="thumb"><img src="<?php the_field('feature5-image2'); ?>" /></div>
                </div>
            </div>
            <?php endif; ?>

        </div><!-- foglio -->

    </section>

    <?php if( get_field('testimonial1-name') ): ?>
    <section id="testimonials">
        <div class="foglio">
            <div class="intro-centered">
                <p class="content-pretitle"><?php the_field('testimonials-pretitle'); ?></p>
                <h3><?php the_field('testimonials-title'); ?></h3>
            </div>

            <div class="test_monials">
                <div class="tm">
                    <div class="up_tm">
                        <div class="tm_avatar">
                            <img src=" <?php the_field('testimonial1-avatar'); ?> " />
                        </div>
                        <p class="tm_name"><?php the_field('testimonial1-name'); ?></p>
                        <p class="tm_career"><?php the_field('testimonial1-job'); ?></p>
                        <p class="tm_testimonial"><?php the_field('testimonial1-content'); ?></p>
                    </div>
                    <div class="bottom_tm">
                        <div class="review">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/stars.png" />
                        </div>
                        <?php if( get_field('testimonial1-dao-url') ): ?>
                        <div class="dao_link">
                            <a href="<?php the_field('testimonial1-dao-url'); ?>"
                                target="_blank"><?php the_field('testimonial1-dao-name'); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if( get_field('testimonial2-name') ): ?>
                <div class="tm">
                    <div class="up_tm">
                        <div class="tm_avatar">
                            <img src=" <?php the_field('testimonial2-avatar'); ?> " />
                        </div>
                        <p class="tm_name"><?php the_field('testimonial2-name'); ?></p>
                        <p class="tm_career"><?php the_field('testimonial2-job'); ?></p>
                        <p class="tm_testimonial"><?php the_field('testimonial2-content'); ?></p>
                    </div>
                    <div class="bottom_tm">
                        <div class="review">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/stars.png" />
                        </div>
                        <?php if( get_field('testimonial2-dao-url') ): ?>
                        <div class="dao_link">
                            <a href="<?php the_field('testimonial2-dao-url'); ?>"
                                target="_blank"><?php the_field('testimonial2-dao-name'); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if( get_field('testimonial3-name') ): ?>
                <div class="tm">
                    <div class="up_tm">
                        <div class="tm_avatar">
                            <img src=" <?php the_field('testimonial3-avatar'); ?> " />
                        </div>
                        <p class="tm_name"><?php the_field('testimonial3-name'); ?></p>
                        <p class="tm_career"><?php the_field('testimonial3-job'); ?></p>
                        <p class="tm_testimonial"><?php the_field('testimonial3-content'); ?></p>
                    </div>
                    <div class="bottom_tm">
                        <div class="review">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/stars.png" />
                        </div>
                        <?php if( get_field('testimonial3-dao-url') ): ?>
                        <div class="dao_link">
                            <a href="<?php the_field('testimonial3-dao-url'); ?>"
                                target="_blank"><?php the_field('testimonial3-dao-name'); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <section id="main-cta">
        <div class="foglio">
            <div class="cta-wrap">
                <p class="content-pretitle"><?php the_field('cta-pretitle'); ?></p>
                <h3><?php the_field('cta-big-font'); ?></h3>
                <p class="cta-extra"><?php the_field('cta-content'); ?></p>
                <a class="button-yellow"
                    href=" <?php the_field('main-cta-link'); ?> "><?php the_field('main-cta-text'); ?></a>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="foglio">
            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle"><?php the_field('articles-section-pretitle'); ?></p>
                    <h3><?php the_field('articles-section-title'); ?></h3>
                </div>
            </div>



            <?php
            $first_art = get_field('seleced-post');
                if( $first_art ): ?>
            <div class="flexi-cont">
                <?php foreach( $first_art as $post ): 

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                <article class="featured-article">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-image-wrapper">

                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                            <img src="<?php echo esc_url($medium_large['0']); ?>" />

                        </div>
                    </a>
                    <div class="article-meta">
                        <div class="post-category">
                            <?php the_category(', '); ?>
                        </div>
                        <div class="auth">
                            <span class="name-author"><?php
                                  $fname = get_the_author_meta('first_name');
                                  $lname = get_the_author_meta('last_name');
                                  $full_name = '';

                                  if( empty($fname)){
                                      $full_name = $lname;
                                  } elseif( empty( $lname )){
                                      $full_name = $fname;
                                  } else {
                                      //both first name and last name are present
                                      $full_name = "{$fname} {$lname}";
                                  }

                                  echo $full_name;
                                  ?>
                            </span>
                        </div>
                    </div>
                    <a class="link-title" href="<?php the_permalink(); ?>">
                        <h4 class="post-title"><?php the_title(); ?> </h4>
                    </a>
                    <p><?php echo wp_kses_post( wp_trim_words( $post->post_content, 16 ) ); ?></p>
                </article>
                <?php endforeach; ?>
            </div>
            <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
            <?php endif; ?>




        </div>

        </div>
    </section>

    <?php if( get_field('first-additional-content-title') ): ?>
    <section id="additional-content">
        <div class="foglio">
            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle"><?php the_field('additional-pretitle'); ?></p>
                    <h3><?php the_field('additional-title'); ?></h3>
                </div>
            </div>

            <div class="flex-between">


                <div class="col3">
                    <a href="#">
                        <div class="add-wrap">
                            <img src="<?php the_field('first-additional-content-image'); ?>" />
                        </div>
                    </a>
                    <a class="additional_links" href="<?php the_field('first-additional-content-url'); ?>"
                        target="_blank"><?php the_field('first-additional-content-title'); ?></a>
                </div>


                <?php if( get_field('second-additional-content-title') ): ?>
                <div class="col3">
                    <a href="#">
                        <div class="add-wrap">
                            <img src="<?php the_field('second-additional-content-image'); ?>" />
                        </div>
                    </a>
                    <a class="additional_links" href="<?php the_field('second-additional-content-url'); ?>"
                        target="_blank"><?php the_field('second-additional-content-title'); ?></a>
                </div>
                <?php endif; ?>

                <?php if( get_field('third-additional-content-title') ): ?>
                <div class="col3">
                    <a href="#">
                        <div class="add-wrap">
                            <img src="<?php the_field('third-additional-content-image'); ?>" />
                        </div>
                    </a>
                    <a class="additional_links" href="<?php the_field('third-additional-content-url'); ?>"
                        target="_blank"><?php the_field('third-additional-content-title'); ?></a>
                </div>
                <?php endif; ?>


            </div>

        </div>
    </section>
    <?php endif; ?>

    <?php if( get_field('secondary-cta-title') ): ?>
    <section id="more_cta">
        <div class="foglio">
            <div class="flex-between">

                <div class="fifty">
                    <div class="secondary_cta">
                        <h3><?php the_field('secondary-cta-title'); ?></h3>
                        <p><?php the_field('secondary-cta-text'); ?></p>
                        <a href="<?php the_field('secondary-cta-button-url'); ?>"
                            class="button-white"><?php the_field('secondary-cta-button-text'); ?></a>
                    </div>
                </div>


                <?php if( get_field('tertiary-cta-title') ): ?>
                <div class="fifty">
                    <div class="tertiary_cta">
                        <h3><?php the_field('tertiary-cta-title'); ?></h3>
                        <p><?php the_field('tertiary-cta-text'); ?></p>
                        <a href="<?php the_field('tertiary-cta-button-url'); ?>"
                            class="button-white"><?php the_field('tertiary-cta-button-text'); ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>





    <?php endwhile; ?>
    <?php endif;  ?>


    <?php get_footer(); ?>