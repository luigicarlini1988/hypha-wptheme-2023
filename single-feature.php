<?php get_header(); ?>

<main class="dark-theme">
    <section class="features-hero single-feature">
        <div class="area flex gap-20 align-bottom">
            <div class="icon faeture-icon-big">
                <img src="<?php echo get_template_directory_uri(); ?><?php the_field('feature_icon_path')?>" />
            </div>
            <div class=" resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" />
                    </div>
                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/features/">Features</a> >
                        <a href="<?php echo home_url(); ?>/features/<?php
                            $terms = get_the_terms( $post->ID , 'group' );
                            
                            if ( $terms != null ){
                            foreach( $terms as $term ) {
                            
                            print $term->slug ;
                            
                            unset($term);
                            } } ?>">
                            <?php
                            $terms = get_the_terms( $post->ID , 'group' );
                            
                            if ( $terms != null ){
                            foreach( $terms as $term ) {
                            
                            print $term->name ;
                            
                            unset($term);
                            } } ?>
                        </a> > <?php the_title();  ?>
                    </div>
                </div>
                <h1 class="title-big"><?php the_title();  ?></h1>

                <p class="text-28 light-blu"><?php the_field('feature_short_description') ?></p>

            </div>
            <div class="col-half">
                <p class="text-18"><?php the_field('feature_additional_description') ?></p>
            </div>
        </div>
    </section>

    <?php if( get_field('gallery_image_1') ): ?>
    <section id="features-overview" class="single-feature">


        <div class="area with-feature-carousel">
            <div id="features-carousel" class="owl-carousel owl-theme">
                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img src="<?php the_field('gallery_image_1') ?>" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('gallery_content_title_1') ?></p>
                        <p class="text-16"><?php the_field('gallery_content_1') ?></p>
                    </div>

                </div>

                <?php if( get_field('gallery_image_2') ): ?>

                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img src="<?php the_field('gallery_image_2') ?>" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('gallery_content_title_2') ?></p>
                        <p class="text-16"><?php the_field('gallery_content_2') ?></p>
                    </div>

                </div>
                <?php endif; ?>

                <?php if( get_field('gallery_image_3') ): ?>
                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img src="<?php the_field('gallery_image_3') ?>" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold"><?php the_field('gallery_content_title_3') ?></p>
                        <p class="text-16"><?php the_field('gallery_content_3') ?></p>
                    </div>

                </div>
                <?php endif; ?>





            </div>
    </section>
    <?php endif; ?>

    <?php if( get_field('additional_detail_title') ): ?>
    <section class="feature-details">
        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <p class="subtitle"><?php the_field('additional_detail_pretitle') ?></p>
                <h3 class="title-medium"><?php the_field('additional_detail_title') ?></h3>
                <p><?php the_field('additional_detail_content') ?></p>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('additional_detail_1_image') ?>" />
            </div>
        </div>

        <?php if( get_field('additional_detail_title_2') ): ?>

        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <p class="subtitle"><?php the_field('additional_detail_pretitle_2') ?></p>
                <h3 class="title-medium"><?php the_field('additional_detail_title_2') ?></h3>
                <p><?php the_field('additional_detail_content_2') ?></p>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('additional_detail_2_image') ?>" />
            </div>
        </div>

        <?php endif; ?>

        <?php if( get_field('additional_detail_title_3') ): ?>

        <div class="area flex gap-50 align-center area-spacer">
            <div class="col-half">
                <p class="subtitle"><?php the_field('additional_detail_pretitle_3') ?></p>
                <h3 class="title-medium"><?php the_field('additional_detail_title_3') ?></h3>
                <p><?php the_field('additional_detail_content_3') ?></p>
            </div>
            <div class="col-half">
                <img class="feature-detail-image" src="<?php the_field('additional_detail_3_image') ?>" />
            </div>
        </div>
        <?php endif; ?>
    </section>
    <?php endif; ?>



    <section class="related-features">
        <div class="area with-titles flex align-bottom">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Explore Features</h2>
                </div>
                <p class="title-medium">Related Features</p>
            </div>

        </div>
        </div>
        <div class="area flex gap-20">

            <?php
 
                //get the taxonomy terms of custom post type
                $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'group', array('fields' => 'ids') );
                
                //query arguments
                $args = array(
                    'post_type' => 'feature',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'group',
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
                <a class="nostyle" href="<?php the_permalink(); ?>">
                    <div class="generic-card feat glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?><?php the_field('feature_icon_path')?>" />
                            </div>
                            <h3 class="title-medium"><?php the_title(); ?></h3>
                            <p><?php the_field('feature_short_description') ?></p>
                            <div class="fake-button space">
                                <p>Discover</p>
                            </div>
                        </div>
                    </div>
                </a>
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

    <section class="cta">
        <div class="area">
            <?php 
                include ('incl/maincta.php') ;
                ?>
        </div>
    </section>








</main>


<?php get_footer(); ?>