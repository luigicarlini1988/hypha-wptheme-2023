<?php
/**
 * Template Name: funnels-static
 *
 */

 get_header();
 ?>


<main id="target_funnel">
    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>



    <section id="target_header">

        <div id="target-header-foglio">
            <div class="cont">
                <div>
                    <p class="pre-title">Our Tools to</p>
                    <h1>Boost your Startup</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <div class="th-cta">
                        <a class="button-blu" href="#">Main Call to Action</a>
                    </div>
                </div>

                <a href="#" class="discover-more">
                    Discover more <div class="triangul"></div>
                </a>
            </div>

            <div class="immg">
                <div class="hfb-wrap">
                    <img class="head-fun-back"
                        src="<?php echo get_template_directory_uri(); ?>/img/funnels/funnels-back.png" />
                </div>
                <div class="hff-wrap">
                    <img class="head-fun-front"
                        src="<?php echo get_template_directory_uri(); ?>/img/funnels/start-up.jpg" />
                </div>
            </div>
        </div>

    </section>


    <section id="problems_solutions">
        <div class="foglio">
            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle">Our Solutions to your Struggles</p>
                    <h3>Most start-ups lorem ipsum dolor sit abet problemas</h3>
                </div>

                <div class="fifty">
                    <p class="intro-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation </p>
                </div>
            </div>

            <div class="sol_prob_list">
                <div class="spl_row">
                    <div class="fifty">
                        <p class="content-pretitle">Problems</p>
                    </div>

                    <div class="fifty">
                        <p class="content-pretitle">Solutions</p>
                    </div>
                </div>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title">Problem title here</p>
                        <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation in minnesota stipe </p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title">Solution title here</p>
                            <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation in minnesota stipe </p>
                        </div>
                    </div>
                </div>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title">Problem title here</p>
                        <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation in minnesota stipe </p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title">Solution title here</p>
                            <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation in minnesota stipe </p>
                        </div>
                    </div>
                </div>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title">Problem title here</p>
                        <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation in minnesota stipe </p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title">Solution title here</p>
                            <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation in minnesota stipe </p>
                        </div>
                    </div>
                </div>

                <div class="spl_row">
                    <div class="fifty">
                        <p class="prob_title">Problem title here</p>
                        <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation in minnesota stipe </p>
                    </div>

                    <div class="fifty">
                        <div class="solution_box">
                            <p class="prob_title">Solution title here</p>
                            <p class="prob_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation in minnesota stipe </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="features">

        <div class="foglio">

            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle">DAO FEATURES for start-ups</p>
                    <h3>The best tool specifically built for Start-ups boost!</h3>
                </div>

                <div class="fifty">
                    <p class="intro-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation </p>
                </div>
            </div>

            <div class="lefty">
                <div class="dao-feature-text">
                    <p class="content-pretitle">Category of the tool</p>
                    <h3>Feature Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam<br /><br />Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/role1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/role2.png" /></div>
                </div>
            </div>

            <div id="quests" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/quest1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/quest2.png" /></div>
                    <div class="coming-soon">Feature under development</div>
                </div>

                <div class="dao-feature-text">
                    <p class="content-pretitle">Category of the tool</p>
                    <h3>Feature Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam<br /><br />Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam,</p>
                </div>
            </div>

            <div class="lefty">
                <div class="dao-feature-text">
                    <p class="content-pretitle">Category of the tool</p>
                    <h3>Feature Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam<br /><br />Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/role1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/role2.png" /></div>
                </div>
            </div>

        </div><!-- foglio -->

    </section>

    <section id="testimonials">
        <div class="foglio">
            <div class="intro-centered">
                <p class="content-pretitle">Start-ups alredy with us</p>
                <h3>Join other start-ups in hypha lorem yea ipsum dolor its!</h3>
            </div>

            <div class="test_monials">
                <div class="tm">
                    <div class="up_tm">
                        <div class="tm_avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/user_x.jpg" />
                        </div>
                        <p class="tm_name">Jane Doe</p>
                        <p class="tm_career">Jon Position @ startup name</p>
                        <p class="tm_testimonial">Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. <br /><br />Ut enim ad minim veniam, quis
                            nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                    </div>
                    <div class="bottom_tm">
                        <div class="review">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/stars.png" />
                        </div>
                        <div class="dao_link">
                            <a href="#">DAO name here</a>
                        </div>
                    </div>
                </div>

                <div class="tm">
                    <div class="up_tm">
                        <div class="tm_avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/user_x.jpg" />
                        </div>
                        <p class="tm_name">Jane Doe</p>
                        <p class="tm_career">Jon Position @ startup name</p>
                        <p class="tm_testimonial">Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. <br /><br />Ut enim ad minim veniam, quis
                            nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                    </div>
                    <div class="bottom_tm">
                        <div class="review">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/stars.png" />
                        </div>
                        <div class="dao_link">
                            <a href="#">DAO name here</a>
                        </div>
                    </div>
                </div>

                <div class="tm">
                    <div class="up_tm">
                        <div class="tm_avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/user_x.jpg" />
                        </div>
                        <p class="tm_name">Jane Doe</p>
                        <p class="tm_career">Jon Position @ startup name</p>
                        <p class="tm_testimonial">Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. <br /><br />Ut enim ad minim veniam, quis
                            nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                    </div>
                    <div class="bottom_tm">
                        <div class="review">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/funnels/stars.png" />
                        </div>
                        <div class="dao_link">
                            <a href="#">DAO name here</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="main-cta">
        <div class="foglio">
            <div class="cta-wrap">
                <p class="content-pretitle">Launch your DAO!</p>
                <h3>Get Started!</h3>
                <p class="cta-extra">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua</p>
                <a class="button-yellow" href="#">Main CTA here</a>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="foglio">
            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle">Related Articles</p>
                    <h3>Some news from our blog you might find helpful</h3>
                </div>
            </div>


            <div class="flexi-cont">
                <article id="post-198" class="featured-article">
                    <a href="#">
                        <div class="blog-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/step2.jpg" />
                        </div>
                    </a>
                    <div class="article-meta">
                        <div class="post-category">
                            <a href="#">Category</a>
                        </div>
                        <div class="auth">
                            <span class="name-author">Author</span>
                        </div>
                    </div>
                    <a class="link-title" href="#">
                        <h4 class="post-title">Lorem ipsum dolor long for our article title</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua</p>
                </article>

                <article id="post-198" class="featured-article">
                    <a href="#">
                        <div class="blog-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/step2.jpg" />
                        </div>
                    </a>
                    <div class="article-meta">
                        <div class="post-category">
                            <a href="#">Category</a>
                        </div>
                        <div class="auth">
                            <span class="name-author">Author</span>
                        </div>
                    </div>
                    <a class="link-title" href="#">
                        <h4 class="post-title">Lorem ipsum dolor long for our article title</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua</p>
                </article>

                <article id="post-198" class="featured-article">
                    <a href="#">
                        <div class="blog-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/step2.jpg" />
                        </div>
                    </a>
                    <div class="article-meta">
                        <div class="post-category">
                            <a href="#">Category</a>
                        </div>
                        <div class="auth">
                            <span class="name-author">Author</span>
                        </div>
                    </div>
                    <a class="link-title" href="#">
                        <h4 class="post-title">Lorem ipsum dolor long for our article title</h4>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua</p>
                </article>

            </div>

        </div>
    </section>


    <section id="additional-content">
        <div class="foglio">
            <div class="intro-text">
                <div class="fifty">
                    <p class="content-pretitle">Additional Content</p>
                    <h3>here other material we might want to place on the page</h3>
                </div>
            </div>

            <div class="flex-between">
                <div class="col3">
                    <a href="#">
                        <div class="add-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/step2.jpg" />
                        </div>
                    </a>
                    <a class="additional_links" href="#" target="_blank">Title of the PDF</a>
                </div>

                <div class="col3">
                    <a href="#">
                        <div class="add-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/step2.jpg" />
                        </div>
                    </a>
                    <a class="additional_links" href="#" target="_blank">Title of the PDF</a>
                </div>

                <div class="col3">
                    <a href="#">
                        <div class="add-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/step2.jpg" />
                        </div>
                    </a>
                    <a class="additional_links" href="#" target="_blank">Title of the PDF</a>
                </div>
            </div>

        </div>
    </section>

    <section id="more_cta">
        <div class="foglio">
            <div class="flex-between">
                <div class="fifty">
                    <div class="secondary_cta">
                        <h3>Secondary CTA title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua</p>
                        <a href="#" class="button-white">Second CTA here</a>
                    </div>
                </div>

                <div class="fifty">
                    <div class="tertiary_cta">
                        <h3>Tertiary CTA title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua</p>
                        <a href="#" class="button-white">Third CTA here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php endwhile; ?>
    <?php endif;  ?>

    <?php get_footer(); ?>