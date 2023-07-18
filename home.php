<?php


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

    <div class="foglio">
        <div class="blog-inside-top">
            <a class="backlink" href="<?php echo home_url(); ?>/news-dashboard/">Back to news dashboard</a>
            <h1>Hypha News Archive</h1>
        </div>
    </div>

    <div class="foglio">
        <div class="flexi-cont">



            <?php if ( have_posts() ) :
          // Do we have any posts/pages in the databse that match our query?
          ?>



            <?php while ( have_posts() ) : the_post();
            // If we have a page to show, start a loop that will display it
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
                        | <?php $post_date = get_the_date( 'j M, Y' ); echo $post_date; ?>
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

        <div class="pagination-blog">
            <div class="past-page">
                <?php previous_posts_link( __( '< Newer Articles', 'textdomain' ) ); // Display a link to  newer posts, if there are any, with the text 'newer' ?>
            </div>
            <div class="next-page">
                <?php next_posts_link( __(  'Older Articles >', 'textdomain' ) ); // Display a link to  older posts, if there are any, with the text 'older' ?>
            </div>
        </div>

    </div>

    </div>

</main>

<?php get_footer(); ?>