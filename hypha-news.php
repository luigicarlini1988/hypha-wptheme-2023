<?php
/**
 * Template Name: Hypha News
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="news-hero-top">

        <div class="area news-top-area">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>


            <?php
                $top_article = get_field('top_header_article');
                if( $top_article ): ?>

            <?php 
                $post = $top_article;
                setup_postdata($post); ?>

            <article id="post-<?php the_ID(); ?>" class="flex gap-20 main-article align-center news-item">
                <div class="col-7">
                    <a href="<?php the_permalink(); ?>">
                        <div class="wrappo glow-back">
                            <?php $large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');?>
                            <img src="<?php echo esc_url($large['0']); ?>" />
                            <?php 
                            if ( has_post_format( 'video' )) {
                            ?>
                            <div class="player-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg">
                            </div>
                            <?php } ?>
                        </div>
                    </a>
                </div>
                <div class="col-5">
                    <p class="text-14 bold light-blu"><?php the_category(', '); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="title-medium"><?php the_title(); ?></h2>
                    </a>
                    <p><?php echo wp_kses_post( wp_trim_words( $post->post_content, 26 ) ); ?></p>
                    <div class="author-meta gap-10 flex align-center">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
                        <p class="text-14 bold white">
                            <?php $fname = get_the_author_meta('first_name');
                                 echo $fname; ?>
                        </p>
                        <p class="text-12 grey"><i><?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?></i>
                        </p>
                    </div>
                </div>
            </article>

            <?php wp_reset_postdata(); ?>
            <?php endif; ?>


        </div>


    </section>

    <section class="top-stories">
        <div class="area">
            <h2 class="white title-medium">Top Stories</h2>
        </div>
        <div class="area flex gap-20">

            <?php $top_news = get_field('top_news');
            if( $top_news ): ?>

            <?php foreach( $top_news as $post ): 
                setup_postdata($post); ?>
            <div class="col-4">

                <article id="post-<?php the_ID(); ?>" class="news-item">
                    <div class="wrappo">
                        <?php 
                            if ( !has_post_format( 'video' )) {
                            ?> <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>

                        <?php } ?>
                        <p class="text-14 bold light-blu"><?php the_category(', '); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                            <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />
                            <?php 
                            if ( has_post_format( 'video' )) {
                            ?>
                            <div class="player-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg">
                            </div>
                            <?php } ?>

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


            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </section>

    <section class="recent-news">
        <div class="area ">
            <h2 class="white title-medium">Latest News</h2>
        </div>
        <div class="area flex wrap gap-20">
            <?php   $recent_posts = array(
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

                <article id="post-<?php the_ID(); ?>" class="news-item">
                    <div class="wrappo">
                        <?php 
                            if ( !has_post_format( 'video' )) {
                            ?> <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>

                        <?php } ?>
                        <p class="text-14 bold light-blu"><?php the_category(', '); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                            <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />
                            <?php 
                            if ( has_post_format( 'video' )) {
                            ?>
                            <div class="player-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-big-icon.svg">
                            </div>
                            <?php } ?>

                            <h3 class="text-22"><?php the_title(); ?></h3>
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
            <a class="button secondary" href="<?php echo home_url(); ?>/news-archive/">Older News</a>
        </div>
    </section>



</main>

<?php get_footer(); ?>