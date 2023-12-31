<?php get_header(); ?>

<main class="dark-theme">
    <section class="news-hero-top category">

        <div class="area flex gap-50 align-bottom news-top-area">
            <div class="resp-logo">
                <img src="img/logos/logo-white.svg">
            </div>
            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/education.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/knowledge/">Hypha Knowledge</a> >
                        <?php echo $wp_query->found_posts; ?> results for:
                    </div>
                </div>
                <p class="title-medium white"><?php the_search_query(); ?></p>
            </div>
            <div class="col-4 has-search-form">
                <?php get_search_form(); ?>
            </div>


    </section>

    <section class="cat-article-wrap">
        <div class="area wrap flex gap-20">

            <?php if ( have_posts() ) :
      			// Do we have any posts/pages in the databse that match our query?
      			?>



            <?php while ( have_posts() ) : the_post();
      				// If we have a page to show, start a loop that will display it
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
                                <img
                                    src="http://localhost:8000/wp-content/themes/hypha2023/img/icons/play-big-icon.svg">
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
              endwhile; ?>

            <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

            <div class="col-full no-results">
                <p class="title-big">We are sorry, no content is available for your search.</p>
            </div>

            <?php  endif;
           ?>







        </div>

        <div class="area blog-navigation flex align-center justify-center">
            <div class="pagination-blog">
                <div class="past-page">
                    <?php previous_posts_link( __( '< Newer Articles', 'textdomain' ) ); // Display a link to  newer posts, if there are any, with the text 'newer' ?>
                </div>
                <div class="next-page">
                    <?php next_posts_link( __(  'Older Articles >', 'textdomain' ) ); // Display a link to  older posts, if there are any, with the text 'older' ?>
                </div>
            </div>
        </div>

    </section>




</main>


<?php get_footer(); ?>