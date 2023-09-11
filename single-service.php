<?php
 get_header();
 ?>

<main class="dark-theme">
    <section class="service-hero">
        <div class="area flex gap-50 align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-4">
                <div class="service-card">
                    <img src="<?php the_field('service_image') ?>" />
                    <div class="activation-method">
                        <p class="text-20 bord white bold">Activation Method</p>
                        <div class="flex gap-10 align-center space-between">
                            <div class="purch-detail text-14 white"><?php the_field('price_description') ?></div>
                            <?php if( get_field('price') ): ?>
                            <div class="cost white text-42"><span class="text-20">$</span><?php the_field('price') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">

                <h1 class="title-big"><?php the_title(); ?></h1>
                <img class="service-resp-image" src="<?php the_field('service_image') ?>" />

                <p class="text-28 light-blu"><?php the_field('short_description') ?></p>
                <p><?php the_field('longer_description') ?></p>
                <div class="buttons flex gap-20">
                    <a href="#lets-do-it" class="button primary">Let's Do it</a>
                    <a href="#details" class="button secondary">Discover More</a>
                </div>
            </div>

        </div>
    </section>

    <section id="details" class="service-detail">
        <div class="area flex gap-50 align-top">
            <div class="col-4 side-offer">
                <h2 class="text-20 bold tit light-blu">Logistic</h2>

                <div class="logic">
                    <?php the_field('logistic_1') ?>
                </div>

                <?php if( get_field('logistic_2') ): ?>
                <div class="logic">
                    <?php the_field('logistic_2') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('logistic_3') ): ?>
                <div class="logic">
                    <?php the_field('logistic_3') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('logistic_4') ): ?>
                <div class="logic">
                    <?php the_field('logistic_4') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('logistic_5') ): ?>
                <div class="logic">
                    <?php the_field('logistic_5') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('side_image_title') ): ?>
                <h2 class="text-20 bold sub-side-tit light-blu"><?php the_field('side_image_title') ?></h2>
                <?php endif; ?>

                <?php if( get_field('side_image') ): ?>
                <img class="details-image" src="<?php the_field('side_image') ?>" />
                <?php endif; ?>

                <?php if( get_field('side_button_text') ): ?>
                <div id="pop-trigger" class="button primary">
                    <?php the_field('side_button_text') ?>
                </div>
                <?php endif; ?>

            </div>

            <div class="col-8 main-offer">
                <h2 class="text-20 tit bold light-blu">What's included in this offer</h2>

                <div class="offer-point">
                    <?php the_field('offer_detail_group_1') ?>
                </div>

                <?php if( get_field('offer_detail_group_2') ): ?>
                <div class="offer-point">
                    <?php the_field('offer_detail_group_2') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('offer_detail_group_3') ): ?>
                <div class="offer-point">
                    <?php the_field('offer_detail_group_3') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('offer_detail_group_4') ): ?>
                <div class="offer-point">
                    <?php the_field('offer_detail_group_4') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('offer_detail_group_5') ): ?>
                <div class="offer-point">
                    <?php the_field('offer_detail_group_5') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('offer_detail_group_6') ): ?>
                <div class="offer-point">
                    <?php the_field('offer_detail_group_6') ?>
                </div>
                <?php endif; ?>

                <?php if( get_field('offer_detail_group_7') ): ?>
                <div class="offer-point">
                    <?php the_field('offer_detail_group_7') ?>
                </div>
                <?php endif; ?>


            </div>
        </div>

    </section>


    <section id="testimonials">
        <div class="area  flex gap-20 align-bottom">
            <div class="col-7">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.svg" loading="lazy">
                    </div>

                    <h3 class="subtitle">Customers Testimonials</h3>
                </div>
                <p class="title-medium">Hear from others how Hypha’s Services have helped their transformations</p>
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

    <section id="lets-do-it">
        <div class="area flex align-center gap-50">
            <div class="col-half">

                <p class="title-big">Let's do it!</p>
                <div class="text-24 light-blu"><?php the_field('lead_form_payoff'); ?></div>


            </div>

            <div class="col-half">
                <?php 
                    include ('incl/mautic-form-dynamic.html') ;
                ?>
            </div>
        </div>
    </section>

    <?php if( get_field('faq_1') ): ?>
    <section id="faq">
        <div class="area main-offer">
            <h2 class="text-20 tit bold light-blu">More informations about the activation process:</h2>

            <div class="offer-point">
                <?php the_field('faq_1') ?>
            </div>


            <?php if( get_field('faq_2') ): ?>
            <div class="offer-point">
                <?php the_field('faq_2') ?>
            </div>
            <?php endif; ?>

            <?php if( get_field('faq_3') ): ?>
            <div class="offer-point">
                <?php the_field('faq_3') ?>
            </div>
            <?php endif; ?>

            <?php if( get_field('faq_4') ): ?>
            <div class="offer-point">
                <?php the_field('faq_4') ?>
            </div>
            <?php endif; ?>

            <?php if( get_field('faq_5') ): ?>
            <div class="offer-point">
                <?php the_field('faq_5') ?>
            </div>
            <?php endif; ?>

            <?php if( get_field('faq_6') ): ?>
            <div class="offer-point">
                <?php the_field('faq_6') ?>
            </div>
            <?php endif; ?>

            <?php if( get_field('faq_7') ): ?>
            <div class="offer-point">
                <?php the_field('faq_7') ?>
            </div>
            <?php endif; ?>

        </div>
    </section>
    <?php endif; ?>

    <?php if( get_field('pop_up_title') ): ?>
    <section id="pop-up">
        <div class="area flex align-center justify-center">
            <div class="pop-inside">
                <div id="pop-close">X</div>
                <div class="text-20 bold white"><?php the_field('pop_up_title')?></div>
                <?php if( get_field('inside_pop_up_image') ): ?>
                <img src="<?php the_field('inside_pop_up_image') ?>" />
                <?php endif;?>
                <?php the_field('pop_up_content')?>
            </div>
        </div>
    </section>
    <?php endif;?>

</main>





<?php get_footer(); ?>