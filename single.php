<?php get_header(); ?>

<main id="blog">

    <div class="blog-resp-logo">
        <a href="<?php echo home_url(); ?>">
            <img class="dark-log" src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-dark.svg"
                alt="hypha" />
        </a>
    </div>

    <div id="scroll_top"></div>



    <?php if ( have_posts() ) :?>

    <?php while ( have_posts() ) : the_post(); ?>

    <article class="post">

        <div class="foglio">
            <div class="single-width">
                <div class="article-single-top">
                    <div class="article-meta">
                        <div class="post-category">
                            <a href="<?php echo home_url(); ?>/news-dashboard/">Hypha News</a> >
                            <?php the_category(', '); ?>
                        </div>
                        <div class="post-date">
                            | <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
                        </div>
                    </div>
                    <h1 class="title"><?php the_title(); // Display the title of the post ?></h1>

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
        </div>


        <div class="article-image">
            <div class="blog-image-wrapper">
                <?php $large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
                <img src="<?php echo esc_url($large['0']); ?>" />
            </div>
        </div>

        <div class="foglio">
            <div class="single-width">

                <div class="the-content">
                    <?php the_content(); ?>
                </div>

                <div class="author-bottom">

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

                    <div class="author-bio">
                        <p><?php the_author_meta('description'); ?></p>
                    </div>

                </div>

            </div>
        </div>

    </article>
    <?php
        endwhile;
        endif;
     ?>

    <div class="article-related">
        <div class="foglio">
            <div class="blog-section-title">
                <p class="big-big">Related Articles</p>
                <p class="section-title">Related Articles</p>
            </div>
        </div>

        <div class="foglio">
            <div class="flexi-cont">
                <?php
            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
            if( $related ) foreach( $related as $post ) {
            setup_postdata($post); ?>
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
                            | <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
                        </div>
                    </div>

                    <a class="link-title" href="<?php the_permalink(); ?>">
                        <h4 class="post-title"><?php the_title(); ?></h2>
                    </a>

                    <p><?php echo wp_kses_post( wp_trim_words( $post->post_content, 16 ) ); ?></p>

                </article>
                <?php }
            wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>