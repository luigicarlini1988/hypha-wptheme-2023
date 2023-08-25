<?php get_header(); ?>

<main class="dark-theme">
    <?php if ( have_posts() ) :?>
    <?php while ( have_posts() ) : the_post(); ?>

    <section class="news-hero-top category article">
        <div class="area flex gap-50 align-center news-top-area">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>

            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/education/">education</a> >
                        <?php $tex = get_the_term_list( $post->ID, 'section'); echo $tex; ?>
                        <?php 
                            if ( has_post_format( 'video' )) {
                            ?> >
                        <h1 class="text-18 white"><?php the_title();  ?></h1>
                        <?php } ?>
                    </div>



                </div>
                <?php 
                    if ( !has_post_format( 'video' )) {
                ?>
                <h1 class="title-big white"><?php the_title();  ?></h1>
                <?php } ?>
            </div>

            <?php 
                if ( !has_post_format( 'video' )) {
            ?>
            <div class="col-4">
                <div class="social-share flex gap-10 align-center justify-right">
                    <p class="white">Share on socials ></p>
                    <!-- <a href="#" class="share"><img
                            src="<?php //echo get_template_directory_uri(); ?>/img/icons/twitter.svg" /></a>
                    <a href="#" class="share"><img
                            src="<?php //echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" /></a>
                    <a href="#" class="share"><img
                            src="<?php //echo get_template_directory_uri(); ?>/img/icons/facebook.svg" /></a>
                -->
                    <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                </div>
                <div class="author-top-card">
                    <div class="flex align-center">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
                        <p class="text-18 bold white">
                            <?php $fname = get_the_author_meta('first_name');
                                        echo $fname; ?>
                        </p>
                        <p class="grey text-14"><i><?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?></i>
                        </p>
                    </div>

                </div>
            </div>
            <?php } ?>

            <?php 
                if ( has_post_format( 'video' )) {
            ?>
            <div class="col-4">
                <div class="social-share flex gap-10 align-center justify-right">
                    <p class="white">Share on socials ></p>
                    <!-- <a href="#" class="share"><img
                            src="<?php //echo get_template_directory_uri(); ?>/img/icons/twitter.svg" /></a>
                    <a href="#" class="share"><img
                            src="<?php //echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" /></a>
                    <a href="#" class="share"><img
                            src="<?php //echo get_template_directory_uri(); ?>/img/icons/facebook.svg" /></a>
                -->
                    <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                </div>
            </div>
            <?php } ?>
        </div>





    </section>

    <section class="post-content">
        <div class="area">

            <?php 
        
        if ( !has_post_format( 'video' )) {
            ?>

            <div class="wrappo glow-back">
                <?php $large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
                <img src="<?php echo esc_url($large['0']); ?>" />

            </div>

            <?php
          }
          
          ?>



            <div class="text-content">
                <?php the_content(); ?>
            </div>

            <div class="author-bottom">
                <div class="flex align-center">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
                    <div>
                        <span class="subtitle">Written by:</span>
                        <p class="author-name">
                            <?php
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
                        </p>
                    </div>
                </div>

                <p class="bio">
                    <?php the_author_meta('description'); ?>
                </p>
            </div>
        </div>
    </section>

    <?php
        endwhile;
        endif;
     ?>


    <section class="related-articles">
        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-7">

                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Related Articles</h2>
                </div>
                <p class="title-medium">Your might be interested in</p>
            </div>
        </div>

        <div class="area flex gap-20">


            <?php
 
                //get the taxonomy terms of custom post type
                $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'section', array('fields' => 'ids') );
                
                //query arguments
                $args = array(
                    'post_type' => 'educational',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'section',
                            'field' => 'id',
                            'terms' => $customTaxonomyTerms
                        )
                    ),
                    'post__not_in' => array ($post->ID),
                );
                
                //the query
                $relatedPosts = new WP_Query( $args );
                
                //loop through query
                if($relatedPosts->have_posts()){
                    
                    while($relatedPosts->have_posts()){ 
                        $relatedPosts->the_post();
                ?>
            <div class="col-4">

                <article id="post-<?php the_ID(); ?>" class="news-item">
                    <div class="wrappo">
                        <?php 
                            if ( !has_post_format( 'video' )) {
                            ?>
                        <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>

                        <?php } ?>

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
                        <p>
                            <?php echo wp_kses_post( wp_trim_words( $post->post_content, 26 ) ); ?>
                        </p>

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
                        }
                            
                        }else{
                            //no posts found
                        }
                
                //restore original post data
                wp_reset_postdata();
                
                ?>
        </div>
    </section>




</main>

<?php get_footer(); ?>