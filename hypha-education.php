<?php
/**
 * Template Name: hypha-education
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="news-hero-top category education">

        <div class="area flex gap-50 align-bottom news-top-area">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>
            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/education.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <h1 class="subtitle"><b><?php the_title(); ?></b></h1>
                    </div>
                </div>
                <p class="title-big white">Learn more about Blockchain and our tools</p>
            </div>
            <div class="col-4 has-search-form">

                <?php get_search_form(); ?>

            </div>


    </section>

    <section class="learn-with-video">
        <div class="area">
            <h2 class="white title-medium">Learn With Videos</h2>
        </div>
        <div class="area flex gap-20">

            <?php $top_video = get_field('top_video_articles');
            if( $top_video ): ?>

            <?php foreach( $top_video as $post ): 
                setup_postdata($post); ?>

            <div class="col-4">

                <article id="post-<?php the_ID(); ?>" class=" news-item">
                    <div class="wrappo">
                        <p class="text-14 bold light-blu">
                            <?php $tex = get_the_term_list( $post->ID, 'section'); echo $tex; ?>
                        </p>
                        <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                        <a href="<?php the_permalink(); ?>">
                            <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />

                            <div class="player-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg">
                            </div>
                            <h3 class="text-22"><?php the_title(); ?></h3>
                        </a>
                    </div>
                </article>


            </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>


        </div>

    </section>

    <section class="education-top-stories">
        <div class="area">
            <h2 class="white title-medium">Top Education Articles</h2>
        </div>
        <div class="area flex gap-20">

            <?php $top_education = get_field('top_education_articles');
            if( $top_education ): ?>

            <?php foreach( $top_education as $post ): 
                setup_postdata($post); ?>

            <div class="col-4">
                <article id="post-<?php the_ID(); ?>" class="news-item">
                    <div class="wrappo">
                        <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>
                        <p class="text-14 bold light-blu">
                            <?php $tex = get_the_term_list( $post->ID, 'section'); echo $tex; ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">
                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                            <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />

                            <h3 class="text-24"><?php the_title(); ?></h3>
                        </a>
                        <p><?php echo wp_kses_post( wp_trim_words( $post->post_content, 26 ) ); ?></p>
                        <div class="author-meta gap-10 flex align-center">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
                            <p class="text-14 bold white">
                                <?php $fname = get_the_author_meta('first_name');
                 echo $fname; ?>
                            </p>
                            <p class="text-12 grey">
                                <i><?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?></i>
                            </p>
                        </div>
                    </div>
                </article>
                </a>
            </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>

    </section>

    <section class="recent-news">
        <div class="area ">
            <h2 class="white title-medium">Latest Articles</h2>
        </div>

        <div class="area flex wrap gap-20">

            <?php   $recent_posts = array(
                'post_type' => 'educational',
                'post_status' => 'publish',
                'posts_per_page' => '8',
                'orderby'   => array(
                  'date' =>'DESC'
                ),
                
                );

              $arr_feat_post = new WP_Query( $recent_posts );

              if ( $arr_feat_post->have_posts() ) :

              while ( $arr_feat_post->have_posts() ) :
                  $arr_feat_post->the_post();
                  ?>

            <div class="col-3">
                <article id="post-<?php the_ID(); ?>" class="education-item">
                    <div class="wrappo">
                        <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>
                        <div class="flex for-cat">
                            <?php 
                            if ( has_post_format( 'video' )) {
                                ?>
                            <div class="small-player-icon flex align-center">
                                <img
                                    src="http://localhost:8000/wp-content/themes/hypha2023/img/icons/play-big-icon.svg">
                                <p class="white">Video Article</p>
                            </div>
                            <?php } ?>

                            <p class="text-14 bold light-blu">
                                <?php $tex = get_the_term_list( $post->ID, 'section'); echo $tex; ?>
                            </p>
                        </div>

                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text-24"><?php the_title(); ?></h3>
                            <p>
                                <?php echo wp_kses_post( wp_trim_words( $post->post_content, 26 ) ); ?>
                            </p>
                        </a>
                        <div class="author-meta gap-10 flex align-center">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
                            <p class="text-14 bold white">
                                <?php $fname = get_the_author_meta('first_name');
                                echo $fname; ?>
                            </p>
                            <p class="text-12 grey">
                                <i><?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?></i>
                            </p>
                        </div>

                    </div>
                </article>
            </div>

            <?php
              endwhile;
              endif;
           ?>






        </div>

        <div class="area blog-navigation flex align-center justify-center">
            <a href="<?php echo home_url(); ?>/education-archive/" class="button secondary">Education Archive</a>
        </div>
    </section>




</main>



<?php get_footer(); ?>