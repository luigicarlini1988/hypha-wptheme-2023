<?php get_header(); ?>

<main class="dark-theme">
    <section class="get-started-hero about-us">
        <div class="get-started-hero-back">
            <div class="pin-area">
                <div class="pin pin1"></div>
                <div class="pin pin2"></div>
                <div class="pin pin3"></div>
                <div class="pin pin4"></div>
                <div class="pin pin5"></div>
            </div>
        </div>
        <div class="area gap-50 flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>

            <div class="col-7">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                    </div>
                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/use-cases/">Use Cases</a> > <?php the_title(); ?>
                    </div>
                </div>
                <h1 class="title-big"><?php the_title(); ?></h1>
                <div class="feat-use-image-resp">
                    <img src="<?php the_field('header_image') ?>" />
                </div>
                <p class="text-20 light-blu"><?php the_field('tagline') ?></p>
                <div class="text-20"><?php the_content(); ?></div>

                <div class="buttons gap-50 flex">
                    <a href="#main-content" class="button primary">Read More</a>
                </div>
            </div>

            <div class="col-5">
                <div class="feat-use-image">
                    <img src="<?php the_field('header_image') ?>" />
                </div>
            </div>
        </div>
    </section>

    <section id="main-content">
        <div class="area flex gap-20 align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Our Solutions</h2>
                </div>
                <p class="title-medium"><?php the_field('our_solutions_big_text') ?></p>

            </div>

            <div class="col-half">
                <p class="text-20 light-blu"><?php the_field('our_solutions_small_text') ?></p>
            </div>
        </div>
    </section>

    <section class="solutions">
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <p class="subtitle">Problem</p>
                <p class="title-40 white"><?php the_field('problem1_title') ?></p>
                <p><?php the_field('problem1_text') ?></p>
            </div>

            <div class="col-half">
                <div class="generic-card glow-back">
                    <div class="wrappo">
                        <p class="subtitle">Solution</p>
                        <p class="title-40 white"><?php the_field('solution1_title') ?></p>
                        <p><?php the_field('solution1_text') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="area flex align-center gap-50">
            <div class="col-half">
                <p class="subtitle">Problem</p>
                <p class="title-40 white"><?php the_field('problem2_title') ?></p>
                <p><?php the_field('problem2_text') ?></p>
            </div>

            <div class="col-half">
                <div class="generic-card glow-back">
                    <div class="wrappo">
                        <p class="subtitle">Solution</p>
                        <p class="title-40 white"><?php the_field('solution2_title') ?></p>
                        <p><?php the_field('solution2_text') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="area flex align-center gap-50">
            <div class="col-half">
                <p class="subtitle">Problem</p>
                <p class="title-40 white"><?php the_field('problem3_title') ?></p>
                <p><?php the_field('problem3_text') ?></p>
            </div>

            <div class="col-half">
                <div class="generic-card glow-back">
                    <div class="wrappo">
                        <p class="subtitle">Solution</p>
                        <p class="title-40 white"><?php the_field('solution3_title') ?></p>
                        <p><?php the_field('solution3_text') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php if( get_field('problem4_title') ): ?>
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <p class="subtitle">Problem</p>
                <p class="title-40 white"><?php the_field('problem4_title') ?></p>
                <p><?php the_field('problem4_text') ?></p>
            </div>

            <div class="col-half">
                <div class="generic-card glow-back">
                    <div class="wrappo">
                        <p class="subtitle">Solution</p>
                        <p class="title-40 white"><?php the_field('solution4_title') ?></p>
                        <p><?php the_field('solution4_text') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if( get_field('problem5_title') ): ?>
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <p class="subtitle">Problem</p>
                <p class="title-40 white"><?php the_field('problem5_title') ?></p>
                <p><?php the_field('problem5_text') ?></p>
            </div>

            <div class="col-half">
                <div class="generic-card glow-back">
                    <div class="wrappo">
                        <p class="subtitle">Solution</p>
                        <p class="title-40 white"><?php the_field('solution5_title') ?></p>
                        <p><?php the_field('solution5_text') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </section>

    <section class="feature-details use-case-var">

        <div class="area flex gap-20 align-bottom area-spacer">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Specific Features</h2>
                </div>
                <p class="title-medium"><?php the_field('features_big_text') ?></p>

            </div>

            <div class="col-half">
                <p class="text-20 light-blu"><?php the_field('features_small_text') ?></p>
            </div>
        </div>

        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <h2 class="subtitle"><?php the_field('feature1_name') ?></h2>
                <p class="title-medium"><?php the_field('feature1_title') ?></p>
                <p><?php the_field('feature1_description') ?></p>
                <a href="<?php the_field('feature1_read_more') ?>" class="button secondary">read more</a>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('feature1_image') ?>" />
            </div>
        </div>

        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <h2 class="subtitle"><?php the_field('feature2_name') ?></h2>
                <p class="title-medium"><?php the_field('feature2_title') ?></p>
                <p><?php the_field('feature2_description') ?></p>
                <a href="<?php the_field('feature2_read_more') ?>" class="button secondary">read more</a>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('feature2_image') ?>" />
            </div>
        </div>

        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <h2 class="subtitle"><?php the_field('feature3_name') ?></h2>
                <p class="title-medium"><?php the_field('feature3_title') ?></p>
                <p><?php the_field('feature3_description') ?></p>
                <a href="<?php the_field('feature3_read_more') ?>" class="button secondary">read more</a>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('feature3_image') ?>" />
            </div>
        </div>

        <?php if( get_field('feature4_name') ): ?>
        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <h2 class="subtitle"><?php the_field('feature4_name') ?></h2>
                <p class="title-medium"><?php the_field('feature4_title') ?></p>
                <p><?php the_field('feature4_description') ?></p>
                <a href="<?php the_field('feature4_read_more') ?>" class="button secondary">read more</a>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('feature4_image') ?>" />
            </div>
        </div>
        <?php endif; ?>

        <?php if( get_field('feature5_name') ): ?>
        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <h2 class="subtitle"><?php the_field('feature5_name') ?></h2>
                <p class="title-medium"><?php the_field('feature5_title') ?></p>
                <p><?php the_field('feature5_description') ?></p>
                <a href="<?php the_field('feature5_read_more') ?>" class="button secondary">read more</a>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('feature5_image') ?>" />
            </div>
        </div>
        <?php endif;?>
    </section>

    <section id="testimonials" class="dao-members">
        <div class="area  flex gap-20 align-bottom">
            <div class="col-7">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.svg" loading="lazy">
                    </div>

                    <h3 class="subtitle">Customers Testimonials</h3>
                </div>
                <p class="title-medium">Hear from others how Hypha’s tools have helped their transformations</p>
            </div>
        </div>

        <div class="area">
            <?php $testimonials = get_field('testimonials');
            if( $testimonials ): ?>

            <div id="testimonials-carousel" class="owl-carousel owl-theme">

                <?php foreach( $testimonials as $post ): 
                setup_postdata($post); ?>
                <div class="testimonials-card">
                    <a href="<?php the_field('linkedin_url'); ?>" target="_blank">
                        <div class="linkedin flex align-center justify-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" />
                        </div>
                    </a>
                    <div class="testim-top flex align-center">
                        <img src="<?php the_field('avatar_image'); ?>" />
                        <div class="namespace">
                            <p class="text-20 white"><?php the_title(); ?></p>
                            <p class="light-blu"><?php the_field('job_title'); ?></p>
                        </div>
                    </div>
                    <div class="testim-text">
                        <p class="text-small"><?php echo wp_kses_post( wp_trim_words( $post->post_content, 45 ) ); ?>
                        </p>
                    </div>
                    <div class="testim-bottom flex align-center">
                        <img class="dao-logo" src="<?php the_field('dao_logo'); ?>">
                        <a href="<?php the_field('dao_url'); ?>" target="_blank"><?php the_field('dao_name'); ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            </div>



            <?php endif; ?>


        </div>


    </section>




    <section class="cta">
        <div class="area">
            <?php 
                include ('incl/maincta.php') ;
                ?>
        </div>
    </section>



    <section class="use-edu">
        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-7">

                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/education.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Hypha Education</h2>
                </div>
                <p class="title-medium">Some Articles you Might Find helpful</p>
            </div>
        </div>

        <div class="area flex gap-20">
            <?php $articles = get_field('articles');
            if( $articles ): ?>

            <?php foreach( $articles as $post ): 
                setup_postdata($post); ?>

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

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>


</main>


<?php get_footer(); ?>