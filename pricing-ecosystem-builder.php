<?php
/**
 * Template Name: pricing-ecosystem-builder
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="pricing-hero-top inside">

        <div class="area top-title-pricing flex align-bottom space-between">

            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>

            <div class="col-4">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/pricing-plans/">Pricing Plans</a> > <?php the_title(); ?>
                    </div>
                </div>
                <h1 class="title-big"><?php the_title(); ?></h1>
            </div>
            <div class="col-8">
                <div class="text-16"><?php the_content(); ?></div>
            </div>


        </div>


    </section>

    <section class="builder-pricing">

        <div class="area with-slider flex justify-center">
            <div class="dao-slider">
                <p class="optimise">Slide to select the amount of Additional DAOs</p>
                <div class="range-aligner">
                    <input id="range" type="range" value="0" min="0" max="100" class="slider">
                    <div id="daosnumber">
                        <div id="daosnumber-inside">0</div> DAO<span id="plural"></span>
                    </div>

                </div>
            </div>
        </div>

        <div class="area flex no-wrap gap-20 space-between">
            <div class="price-column">
                <h2 class="text-18 white"><strong>Anchor</strong> <span class="light-blu">DAO</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <span id="anchor-price" class="title-56 white"></span>
                        </div>
                        <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury</p>
                    </div>

                    <div class="fee-divider flex align-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plus-round.svg" />
                    </div>

                    <div class="bottom-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <div>
                                <span id="anchor_year_fee" class="title-56 white"></span>
                                <span class="text-14 white">/year</span>
                            </div>
                        </div>
                        <p class="text-14 light-blu">DAO Participation Fee</p>
                    </div>

                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">111</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">1,000</span>
                    </div>
                    <div class="feature-list all">

                        <a href="#">All DAO features</a>
                    </div>
                </div>
            </div>


            <div class="price-column">
                <h2 class="text-18 white"><strong>Each Additional</strong> <span class="light-blu">DAO</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <span id="additional-price" class="title-56 white"></span>
                        </div>
                        <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury</p>
                    </div>

                    <div class="fee-divider flex align-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plus-round.svg" />
                    </div>

                    <div class="bottom-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <div>
                                <span id="additional_year_fee" class="title-56 white"></span>
                                <span class="text-14 white">/year</span>
                            </div>
                        </div>
                        <p class="text-14 light-blu">DAO Participation Fee</p>
                    </div>

                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">11</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">100</span>
                    </div>
                    <div class="feature-list all">
                        <a href="#">All DAO features</a>
                    </div>
                </div>
            </div>

            <div class="price-column has-total">
                <h2 class="text-18 white"><strong>Grand</strong> <span class="light-blu">Total</span></h2>
                <div class="price-item-card glow-back">
                    <div class="wrappo">
                        <div class="top-price">
                            <div class="flex align-center justify-center">
                                <img class="hypha-cur"
                                    src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                                <span id="final_total_stake" class="title-56 white"></span>
                            </div>
                            <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury*</p>
                        </div>

                        <div class="fee-divider flex align-center justify-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plus-round.svg" />
                        </div>

                        <div class="bottom-price">
                            <div class="flex align-center justify-center">
                                <img class="hypha-cur"
                                    src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                                <div>
                                    <span id="final_year_fee" class="title-56 white"></span>
                                    <span class="text-14 white">/year</span>
                                </div>
                            </div>
                            <p class="text-14 light-blu">DAO Participation Fee*</p>
                        </div>

                        <div class="fee-divider flex align-center justify-center">
                        </div>

                        <div class="disclaimer">
                            <span>*(1)Hypha Tokens needs to be staked in each DAO treasury in order to activate each
                                DAO.</span>
                            <span>*(2)This annual DAO participation fee supports ongoing maintenance and operating
                                costs.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <section>
        <div class="area flex align-center gap-20">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" />
                    </div>

                    <p class="subtitle">Get Staretd Today</p>
                </div>
                <p class="title-big">Get Started</p>
                <p class="text-24 light-blu">Get in touch with us to share your ecosystem vision and activate the
                    Ecosystem plan
                </p>

            </div>

            <div class="col-half">
                <?php 
                        include ('incl/generic-form.html') ;
                    ?>
            </div>
        </div>
    </section>

    <section class="upsell">
        <?php 
                include ('incl/pricing-upsell.html') ;
            ?>

    </section>



</main>


<?php get_footer(); ?>