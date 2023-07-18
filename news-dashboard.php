<?php
/**
 * Template Name: news-dashboard
 *
 */

 get_header();
 ?>

<main id="blog">
    <div class="blog-resp-logo">
        <a href="<?php echo home_url(); ?>">
            <img class="dark-log" src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-dark.svg"
                alt="hypha" />
        </a>
    </div>
    <div id="scroll_top"></div>
    <div class="blog-top">

        <div class="foglio">

            <?php $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'meta_key' => 'main_news_top_article',
            'meta_value' => true,
            'posts_per_page' => '1',
            );

            $arr_top_post = new WP_Query( $args );

            if ( $arr_top_post->have_posts() ) :

            while ( $arr_top_post->have_posts() ) :
                $arr_top_post->the_post();
                ?>

            <article id="post-<?php the_ID(); ?>" class="main-article">
                <div class="first-blog-image">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-image-wrapper">
                            <?php $large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');?>
                            <img src="<?php echo esc_url($large['0']); ?>" />
                        </div>
                    </a>
                </div>

                <div class="blog-post-content">
                    <div class="vertical">
                        <div class="top-article-meta">
                            <div class="post-category">
                                <?php the_category(', '); ?>
                            </div>
                            <div class="post-date">
                                | <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
                            </div>
                        </div>
                        <a class="link-title" href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>

                        <p><?php echo wp_kses_post( wp_trim_words( $post->post_content, 26 ) ); ?></p>

                        <div class="author">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>

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
                </div>

            </article>
            <?php
            endwhile;
            endif;
         ?>

        </div>
    </div>

    <div class="blog-top-stories">
        <div class="foglio">
            <div class="blog-section-title">
                <p class="big-big">Top Stories</p>
                <p class="section-title">Top Stories</p>
            </div>
            <div class="flexi-cont">
                <?php $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'meta_key' => '_is_ns_featured_post',
              'meta_value' => 'yes',
              'orderby'   => array(
                'date' =>'DESC'
              ),
              'posts_per_page' => '3',
              );

              $arr_feat_post = new WP_Query( $args );

              if ( $arr_feat_post->have_posts() ) :

              while ( $arr_feat_post->have_posts() ) :
                  $arr_feat_post->the_post();
                  ?>

                <article id="post-<?php the_ID(); ?>" class="featured-article">

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

                        <div class="post-date">
                            - <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
                        </div>

                    </div>

                    <a class="link-title" href="<?php the_permalink(); ?>">
                        <h4 class="post-title"><?php the_title(); ?></h2>
                    </a>

                    <p><?php echo wp_kses_post( wp_trim_words( $post->post_content, 16 ) ); ?></p>

                </article>
                <?php
              endwhile;
              endif;
           ?>

            </div>
        </div>
    </div>

    <div class="blog-latest">
        <div class="foglio">
            <div class="blog-section-title">
                <p class="big-big">Latest News</p>
                <p class="section-title">Latest News</p>
            </div>

            <div class="flexi-cont">
                <?php   $recent_posts = array(
                'posts_per_page' => '8',
                'orderby'   => array(
                  'date' =>'DESC'
                ),
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key' => '_is_ns_featured_post',
                        'value' => 'yes',
                        'compare' => '!=',
                    ),
                    array(
                        'key' => '_is_ns_featured_post',
                        'compare' => 'NOT EXISTS',
                    ),
                  ),
                );

              $arr_feat_post = new WP_Query( $recent_posts );

              if ( $arr_feat_post->have_posts() ) :

              while ( $arr_feat_post->have_posts() ) :
                  $arr_feat_post->the_post();
                  ?>

                <article id="post-<?php the_ID(); ?>" class="latest-article">

                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-image-wrapper">

                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');?>
                            <img src="<?php echo esc_url($medium_large['0']); ?>" />

                        </div>
                    </a>



                    <div class="article-meta">
                        <div class="post-category">
                            <?php the_category(', '); ?>
                        </div>

                        <div class="post-date">
                            <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
                        </div>

                    </div>

                    <a class="link-title" href="<?php the_permalink(); ?>">
                        <h4 class="post-title"><?php the_title(); ?></h2>
                    </a>

                </article>
                <?php
              endwhile;
              endif;
           ?>

            </div>

        </div>

        <div class="foglio">
            <div class="bottom-navigation">
                <a class="trasp-button-dark" href="<?php echo home_url(); ?>/news-archive/">Older News</a>
            </div>
        </div>
    </div>


</main>


<?php get_footer(); ?>