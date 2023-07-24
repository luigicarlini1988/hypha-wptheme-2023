<?php
/**
 * Template Name: home-template-BK
 *
 */

 get_header();
 ?>
<main class="dark-theme">
    <section class="home-header">
        <div class="home-back">
            <div class="pin-area">
                <div class="pin pin1"></div>
                <div class="pin pin2"></div>
                <div class="pin pin3"></div>
                <div class="pin pin4"></div>
                <div class="pin pin5"></div>
                <div class="pin pin6"></div>
                <div class="pin pin7"></div>
            </div>
        </div>
        <div class="top-social">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/discord.svg" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/medium.svg" /></a>
        </div>
        <div class="area">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-8 flex align-center">
                <div class="text-opening">
                    <p class="title-big">Achieve more, <span class="text-gradient">together</span></p>
                    <p class="white text-20">Create human-centered organizations leveraging collective and
                        transparent
                        tools
                        for
                        greater engagement and outcomes for all</p>
                    <div class="buttons gap-20 wrap">
                        <a href="<?php echo home_url(); ?>/get-started/" class="button primary">Get Started</a>
                        <a href="#opening" class="button secondary">Learn More</a>
                    </div>
                </div>
            </div>

            <div id="open-intro-vid" class="bottom-head-video">
                <div class="vider">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/video-snap.jpg" />
                    <div class="play-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-video.svg" />
                    </div>
                </div>
                <div class="video-texter">Play "intro to Hypha"</div>
            </div>
        </div>
    </section>

    <section id="opening" class="opening">
        <div class="area">

            <div class="col-7">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond.svg" />
                    </div>
                    <p class="subtitle">Meeting your needs</p>
                </div>
                <h3 class="title-big">A solution to <br /> many challenges</h3>

                <p class="text-20 light-blu">Hypha’s ‘Organization & Community in a box’ solution <span
                        class="light-blu">enables a better way to work for any team, community or
                        organization, who want to:</span>
                </p>
            </div>
        </div>
        <div class="area flex gap-20 wrap">
            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                </div>
                <p class="text-24 bold white">Launch Ventures</p>
                <p>Launch your new venture fast, bringing on engaged contributors and members, and limiting the
                    usual heavy admin.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plant.svg" />
                </div>
                <p class="text-24 bold white">Accelerate growth <br />& impact</p>
                <p>Enable rapid scaling through the autonomous launch of multiple sub-organizations and the easy
                    deployment of funds.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/empower.svg" />
                </div>
                <p class="text-24 bold white">Attract & empower talents</p>
                <p>Provide multi-layered incentives and rewards for work contributed. Engage your teams through
                    inclusive decision-making.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/engage.svg" />
                </div>
                <p class="text-24 bold white">Engage Communities</p>
                <p>Provide a transparent and participative environment where your community can help vote on key
                    decisions</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/decision.svg" />
                </div>
                <p class="text-24 bold white">Collectively Make Decisions</p>
                <p>Make the most of collective intelligence and take decisions together in a transparent and
                    reliable process.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                </div>
                <p class="text-24 bold white">Deploy & Track <br />Working Capital</p>
                <p>Use tokens to rapidly and cost-effectively deploy and trace funds across your organization around
                    the world.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/network.svg" />
                </div>
                <p class="text-24 bold white">Build Coalitions</p>
                <p>Join or build a new network of like-minded organizations to help achieve your goals faster and
                    with more impact.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/measure.svg" />
                </div>
                <p class="text-24 bold white">Measure Impact</p>
                <p>Through the open and transparent use of token-based measures, gain a reliable means of tracing
                    impact.</p>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="area with-titles gap-20 flex align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" />
                    </div>

                    <h2 class="subtitle">The best tools to build your DAO</h2>
                </div>
                <h3 class="title-56">DAOs: the best tools to reach your team's full potential</h3>
            </div>

            <div class="col-half">
                <p class="text-18 light-blu">
                    <span class="white">Decentralized Autonomous Organizations (DAOs)</span> are digital
                    organization structures with unique, customizable features that enable teams to reach higher
                    levels of growth and success.
                </p>

                <div class="buttons">

                    <a href="#opening" class="button secondary">DAOs vs traditional orgs</a>
                    <a href="<?php echo home_url(); ?>/what-is-a-dao/" target="_blank" class="button primary">What is a
                        DAO</a>
                </div>

            </div>
        </div>

        <div class="area  flex gap-20">
            <div class="col-half flex wrap align-center">
                <div class="feat-section-explainer flex align-center">
                    <div class="wrap">
                        <div class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/templates.svg" />
                            </div>

                            <h2 class="subtitle">Organisational Features</h2>
                        </div>
                        <p class="title-big">Shape Your<br /> Organisation</p>
                        <div class="resp-features-home">
                            <img class="f1" src="<?php echo get_template_directory_uri(); ?>/img/shapeyourdao.png" />
                        </div>
                        <p class="text-20">From a little start-up to a multi-layered organisation, we provide all
                            the features you need to define and easily set up your organization</p>
                        <a id="featureDisplay1" href="#" class="button primary">Learn More</a>

                    </div>
                </div>

                <div class="feat-section-explainer flex align-center">
                    <div class="wrap">
                        <div class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                            </div>

                            <h2 class="subtitle">Members Features</h2>
                        </div>
                        <p class="title-big">Engage <br />Your Members</p>
                        <div class="resp-features-home">
                            <img class="f1" src="<?php echo get_template_directory_uri(); ?>/img/shapeyourdao.png" />
                        </div>
                        <p class="text-20">a DAO is all about members, agreements and co-creation. We developed a
                            variety of feature that will allow high members engagement and participation</p>
                        <a id="featureDisplay2" href="#" class="button primary">Learn More</a>
                    </div>
                </div>

                <div class="feat-section-explainer flex align-center">
                    <div class="wrap">
                        <div class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/treasury.svg" />
                            </div>

                            <h2 class="subtitle">Financial Features</h2>
                        </div>
                        <p class="title-big">Distribute Value</p>
                        <div class="resp-features-home">
                            <img class="f1" src="<?php echo get_template_directory_uri(); ?>/img/shapeyourdao.png" />
                        </div>
                        <p class="text-20">All the features you might need to manage your DAO finance and distribute
                            value to your team, members, and community in a transparent and reliable way</p>
                        <a id="featureDisplay3" href="#" class="button primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-half with-features flex align-center justify-right">
                <div class="feature-animations">

                    <div id="featureset1" class="flex gap-20 wrap">



                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                                <span>Launcher</span>
                            </div>
                        </div>

                        <div id="templatesicon" class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/templates.svg" />
                                <span>Templates</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/policies.svg" />
                                <span>Policies</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/settings.svg" />
                                <span>Voting</span>
                            </div>
                        </div>

                        <div id="circlesicon" class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                                <span>Circles</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                                <span>Roles</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ecosystem.svg" />
                                <span>Ecosystem</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/salaries.svg" />
                                <span>Salaries</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/branding.svg" />
                                <span>Branding</span>
                            </div>
                        </div>

                        <div id="f-lines-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/feature-lines-1.svg" />
                        </div>

                        <div id="f-lines-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/feature-lines-2.svg" />
                        </div>

                    </div> <!-- end first icons seciton-->


                    <div id="featureset2" class="flex gap-20 wrap">
                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/assignments.svg" />
                                <span>Assignments</span>
                            </div>
                        </div>



                        <div id="profileicon" class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                                <span>Profiles</span>
                            </div>
                        </div>



                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wallet.svg" />
                                <span>Wallet</span>
                            </div>
                        </div>



                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/quests.svg" />
                                <span>Quests</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/badges.svg" />
                                <span>Badges</span>
                            </div>
                        </div>



                        <div id="communityicon" class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/community.svg" />
                                <span>Community</span>
                            </div>
                        </div>



                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/election.svg" />
                                <span>Elections</span>
                            </div>
                        </div>


                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/polls.svg" />
                                <span>Polls</span>
                            </div>
                        </div>

                        <div id="f-lines-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/feature-lines-3.svg" />
                        </div>

                        <div id="f-lines-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/feature-lines-4.svg" />
                        </div>

                    </div> <!-- end second iconset-->

                    <div id="featureset3" class="flex gap-20 wrap">
                        <div id="treasuryicon" class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/treasury.svg" />
                                <span>Treasury</span>
                            </div>
                        </div>

                        <div id="payoutsicon" class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/payouts.svg" />
                                <span>Payouts</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/multisig.svg" />
                                <span>Multi-sig</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/utility-token.svg" />
                                <span>Utility Token</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/voice-token.svg" />
                                <span>Voice Token</span>
                            </div>
                        </div>

                        <div class="icon medium clickable">
                            <div class="flex wrap justify-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                                <span>Cash Token</span>
                            </div>
                        </div>


                        <div id="f-lines-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/feature-lines-5.svg" />
                        </div>

                        <div id="f-lines-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/feature-lines-6.svg" />
                        </div>


                    </div> <!-- end third iconset-->

                </div>
            </div>
        </div>
    </section>

    <?php include('incl/daos.php') ?>

    <section id="testimonials">
        <div class="area  flex gap-20 align-bottom">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.svg" loading="lazy">
                    </div>

                    <h3 class="subtitle">Testimonials</h3>
                </div>
                <p class="title-medium">Happy Hypha Customers</p>
            </div>
        </div>
        <div class="area">
            <?php $testimonials_home = get_field('testimonials_slider');
            if( $testimonials_home ): ?>

            <div id="testimonials-carousel" class="owl-carousel owl-theme">

                <?php foreach( $testimonials_home as $post ): 
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





    <section id=" main-cta">
        <div class="area">
            <?php include('incl/maincta.php') ?>
        </div>
    </section>


    <section id="audience">
        <div class="audience-back">
            <img src="<?php echo get_template_directory_uri(); ?>/img/backgrounds/audience.jpg" />
        </div>
        <div class="area with-titles gap-20 flex align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                    </div>

                    <h2 class="subtitle">Use Cases</h2>
                </div>
                <p class="title-medium">A flexible DAO builder for any organisation</p>
            </div>

            <div class="col-half">
                <p class="text-20">
                    Any group of humans who want to acknowledge contributions to a common cause and / or govern a
                    shared pool of resources can benefit from our tools.
                </p>

            </div>
        </div>

        <div class="area flex gap-20">
            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/startups/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40">Startups</h3>
                            <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod tempor </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/impact-projects/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40">Impact Projects</h3>
                            <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod tempor </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4">
                <a class="nostyle" href="<?php echo home_url(); ?>/consultancies/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40">Consultancies</h3>
                            <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod tempor </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="wallet">
        <div class="area flex gap-20 align-center">
            <div class="col-5">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wallet.svg" />
                    </div>
                    <p class="subtitle">Additional Tools</p>
                </div>
                <h2 class="title-big">Hypha Wallet</h2>
                <p class="text-20 light-blu">Everything you need from signing the transaction in your DAO, to
                    onboarding new members, manage tokens, and much more
                </p>
                <div class="wallet-resp">
                    <img class="wr-1" src="<?php echo get_template_directory_uri(); ?>/img/wallet-2.jpg" />
                    <img class="wr-2" src="<?php echo get_template_directory_uri(); ?>/img/wallet-1.jpg" />
                </div>
                <div class="buttons wrap">
                    <a href="" class="button primary">Get Started</a>
                    <a href="" class="button secondary">Learn More</a>
                </div>

                <div class="stores flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/apple.svg" />
                    </div>
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/android.svg" />
                    </div>
                    <p class="text-small"><i>Available on Apple and Google store</i></p>
                </div>
            </div>
            <div class="col-7 flex align-center justify-right">
                <div class="wallet-images flex align-center justify-center">
                    <div class="wallet-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-2.jpg" />
                    </div>
                    <div class="wallet-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/wallet-1.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="strenght">
        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond.svg" />
                    </div>

                    <p class="subtitle">Strength Point</p>
                </div>
                <p class="title-medium">Hypha believes in building inclusive ecosystems rather than isolated
                    solutions. </p>
            </div>

            <div class="col-half">
                <p class="text-20 light-blu">
                    Hence we are ensuring that our platform will provide compatibility with multiple
                    blockchains/crypto currencies and that we provide a wide variety of guides and templates to meet
                    the needs of a large range of DAO’s such as Cities, Co-ops, Businesses, Communities, Farms,
                    Villages etc..
                </p>

            </div>
        </div>

        <div class="area flex gap-20 wrap">
            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/transaction.svg" />
                </div>
                <p class="text-24 bold white">Fee free, onchain transactions</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/templates.svg" />
                </div>
                <p class="text-24 bold white">Templates to kick start your project</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/community.svg" />
                </div>
                <p class="text-24 bold white">A community space to grow your project</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                </div>
                <p class="text-24 bold white">Human centric design in mind</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>
        </div>

    </section>

    <section id="second-cta">
        <div class="area">
            <?php include('incl/maincta.php') ?>
        </div>
    </section>

    <section id="education">
        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-7">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/education.svg" />
                    </div>

                    <h2 class="subtitle">Education Portal</h2>
                </div>
                <p class="title-medium">Learn about blockchain and our tools on the <a
                        href="<?php echo home_url(); ?>/education/">Education Portal</a>

                </p>
            </div>
        </div>

        <?php/* include('incl/education4articles.php') */?>
        <div class="area flex gap-20">
            <?php $educational_home = get_field('education_articles_section');
            if( $educational_home ): ?>

            <?php foreach( $educational_home as $post ): 
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




    <section id="news">

        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-7">

                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Hypha News</h2>
                </div>
                <p class="title-medium">Stay up to date with lorem ipsum <a href="<?php echo home_url(); ?>/news/">Hypha
                        News</a></p>
            </div>
        </div>

        <div class="area flex gap-20">
            <?php $news_home = get_field('news_section');
            if( $news_home ): ?>

            <?php foreach( $news_home as $post ): 
                setup_postdata($post); ?>
            <div class="col-4">

                <article id="post-<?php the_ID(); ?>" class="news-item">
                    <div class="wrappo">
                        <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>
                        <p class="text-14 bold light-blu"><?php the_category(', '); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <?php $medium_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');?>
                            <img class="news-thumb" src="<?php echo esc_url($medium_large['0']); ?>" loading="lazy" />

                            <h3 class="text-24"><?php the_title(); ?></h3>
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