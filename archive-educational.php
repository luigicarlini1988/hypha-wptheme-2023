<?php get_header(); ?>

<main class="dark-theme">
    <section class="news-hero-top category">

        <div class="area news-top-area">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg">
            </div>
            <div class="sub-section flex align-center">
                <div class="icon small">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" />
                </div>

                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>/education/">Education</a> > Archive
                </div>
            </div>
            <h1 class="title-big white">Education Archive</h1>
        </div>


    </section>

    <section class="cat-article-wrap archive">
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
                        <p class="text-14 bold light-blu">
                            <?php $tex = get_the_term_list( $post->ID, 'section'); echo $tex; ?>
                        </p>
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
                            <?php $content = wp_kses_post( wp_trim_words( $post->post_content, 26 )) ; 
                                    $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
                                    echo preg_replace($regex, ' ', $content); ?>
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
                endwhile;
                endif;
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