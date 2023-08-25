<?php
/**
 * Template Name: Home Template
 *
 */

 get_header();
 ?>
<main class="dark-theme">
    <section class="home-header">
        <div class="home-back filter">
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
            <a href="https://twitter.com/HyphaDAO" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" /></a>
            <a href="https://www.linkedin.com/company/hypha-dao/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" /></a>
            <a href="https://discord.com/invite/NsPQAjH9Jw" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/discord.svg" /></a>
            <a href="https://medium.com/hyphadao" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/medium.svg" /></a>
        </div>
        <div class="area">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div id="payoff-controller">
                <div id="pc-1"><span></span></div>
                <div id="pc-2"><span></span></div>
                <div id="pc-3"><span></span></div>
                <div id="pc-4"><span></span></div>
                <div id="pc-5"><span></span></div>
            </div>
            <div class="col-full flex align-center">
                <div class="text-opening">
                    <p class="achieve title-giga">Achieve More, Together</p>
                    <div class="new-payoffs">
                        <p class="payoffs light-blu text-28">Harness the power of team-driven decisions</p>
                        <p class="payoffs-2 light-blu text-28">Incentivize team and community engagement</p>
                        <p class="payoffs-3 light-blu text-28">Accelerate project launches and scale with ease</p>
                        <p class="payoffs-4 light-blu text-28">Launch a network of organizations for impact at scale</p>
                        <p class="payoffs-5 light-blu text-28">Participate in a global impact collaboration network</p>
                        <p class="payoffs-6 light-blu text-28">Harness the power of team-driven decisions</p>
                    </div>
                    <div class="resp-payoff">
                        <p class="payoff-resp light-blu text-28">Harness the power of team-driven decisions</p>
                    </div>

                    <div class="buttons gap-20 wrap">
                        <a href="<?php echo home_url(); ?>/get-started/" class="button primary">Get Started</a>
                        <a href="#opening" class="button secondary">Learn More</a>
                    </div>
                </div>
            </div>

            <!--<div id="open-intro-vid" class="bottom-head-video">
                <div class="vider">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/video-snap.jpg" />
                    <div class="play-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play-video.svg" />
                    </div>
                </div>
                <div class="video-texter">Play "intro to Hypha"</div>
            </div>-->
        </div>
    </section>

    <section id="opening" class="opening">
        <div class="area">

            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond.svg" />
                    </div>
                    <p class="subtitle">Unlimited Pathways for Success</p>
                </div>
                <h3 class="anima title-big">Discover a World of <br />Opportunities with Hypha</h3>

                <p class="anima text-20 light-blu">Experience the transformative capabilities of using Hypha's toolkit to achieve remarkable outcomes such as:</span>
                </p>
            </div>
        </div>
        <div class="area flex gap-20 wrap">
            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                </div>
                <p class="text-24 bold white">Successful project launches</p>
                <p>Effortlessly launch new projects and onboard members with a few clicks, freeing you from heavy admin
                    tasks.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plant.svg" />
                </div>
                <p class="text-24 bold white">Achieve scalable growth and impact</p>
                <p>Rapidly scale your project thanks to quick and easy ways to onboard team members and deploy funds.
                </p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/empower.svg" />
                </div>
                <p class="text-24 bold white">Transformed team engagement</p>
                <p>Take advantage of Hypha's innovative reward features to recognize all contributions made to your
                    project's success.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/engage.svg" />
                </div>
                <p class="text-24 bold white">Build thriving communities</p>
                <p>Leverage your community's collective intelligence and grow engagement by involving them in
                    decision-making processes.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/decision.svg" />
                </div>
                <p class="text-24 bold white">Team decisions<br /> made easy</p>
                <p>Make decisions fairly and transparently, leveraging the power of your team's collective intelligence.
                </p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                </div>
                <p class="text-24 bold white">Manage resources effectively</p>
                <p>Reward your team instantly and manage resources effortlessly with the transparency of blockchain
                    technology.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/network.svg" />
                </div>
                <p class="text-24 bold white">Belong to a network of like-minded innovators</p>
                <p>Join or build a new network of passionate people and organizations to support you in achieving your
                    goals faster and with more impact.</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/measure.svg" />
                </div>
                <p class="text-24 bold white">Measure impact over time and across teams</p>
                <p>Gain a reliable means of tracing impact with the benefits of blockchain technology.</p>
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

                    <h2 class="subtitle">Experience the Future of Work, Today.</h2>
                </div>
                <h3 class="title-56 anima">DAOs: the best tools to reach your team's full potential</h3>
            </div>

            <div class="col-half">
                <p class="text-18 light-blu">
                    <span class="white">Decentralized Autonomous Organizations (DAOs)</span> are digital
                    organization structures with unique, customizable features that enable teams to reach higher
                    levels of growth and success.
                </p>

                <div class="buttons">

                    <a href="<?php echo home_url(); ?>/educational/10-ways-daos-differ-from-traditional-organizations/" class="button secondary" target="_blank">DAOs vs traditional orgs</a>
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

                            <h2 class="subtitle">Organizational Features</h2>
                        </div>
                        <p class="title-big anima">Shape Your<br />Organization</p>
                        <div class="resp-features-home">
                            <img class="f1" src="<?php echo get_template_directory_uri(); ?>/img/shapeyourdao.png" />
                        </div>
                        <p class="text-20">Transform your vision into a reality using Hypha's organizational features.
                            Easily define and launch your DAO, putting you in control of shaping your success story.</p>
                        <div class="buttons flex gap-20">
                            <a id="featureDisplay1" href="<?php echo home_url(); ?>/features/shape-your-organization/"
                                class="button primary">Learn More</a>
                            <a href="<?php echo home_url(); ?>/features/" class="button secondary">All Features</a>
                        </div>

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
                        <p class="title-big anima">Ignite Team Engagement</p>
                        <div class="resp-features-home">
                            <img class="f1" src="<?php echo get_template_directory_uri(); ?>/img/shapeyourdao.png" />
                        </div>
                        <p class="text-20">Seamlessly onboard, incentivize, and engage your team to achieve shared goals
                            with Hypha’s Member Features.</p>

                        <div class="buttons flex gap-20">
                            <a id="featureDisplay2" href="<?php echo home_url(); ?>/features/ignite-team-engagement/"
                                class="button primary">Learn More</a>
                            <a href="<?php echo home_url(); ?>/features/" class="button secondary">All Features</a>
                        </div>
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
                        <p class="title-big anima">Recognize <br />and Reward</p>
                        <div class="resp-features-home">
                            <img class="f1" src="<?php echo get_template_directory_uri(); ?>/img/shapeyourdao.png" />
                        </div>
                        <p class="text-20">Manage your finances confidently and transparently with Hypha’s Financial
                            Features. Experience revolutionary ways to recognize and reward members efforts.</p>
                        <div class="buttons flex gap-20">
                            <a id="featureDisplay3" href="<?php echo home_url(); ?>/features/recognize-and-reward/"
                                class="button primary">Learn More</a>
                            <a href="<?php echo home_url(); ?>/features/" class="button secondary">All Features</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-half with-features flex align-center justify-right">
                <div class="feature-animations">

                    <div id="featureset1" class="flex gap-20 wrap">



                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/dao-launcher/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                                    <span>Launcher</span>
                                </div>
                            </a>
                        </div>

                        <div id="templatesicon" class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/templates/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/templates.svg" />
                                    <span>Templates</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/policies/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/policies.svg" />
                                    <span>Policies</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/voting/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/settings.svg" />
                                    <span>Voting</span>
                                </div>
                            </a>
                        </div>

                        <div id="circlesicon" class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/circles/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                                    <span>Circles</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/roles/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                                    <span>Roles</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/ecosystem/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ecosystem.svg" />
                                    <span>Ecosystem</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/reward-tiers/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/salaries.svg" />
                                    <span>RewardTiers</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/branding/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/branding.svg" />
                                    <span>Branding</span>
                                </div>
                            </a>
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
                            <a href="<?php echo home_url(); ?>/features-details/assignments/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/assignments.svg" />
                                    <span>Assignments</span>
                                </div>
                            </a>
                        </div>



                        <div id="profileicon" class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/profile/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                                    <span>Profiles</span>
                                </div>
                            </a>
                        </div>



                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/wallet/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wallet.svg" />
                                    <span>Wallet</span>
                                </div>
                            </a>
                        </div>



                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/quests/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/quests.svg" />
                                    <span>Quests</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/badges/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/badges.svg" />
                                    <span>Badges</span>
                                </div>
                            </a>
                        </div>



                        <div id="communityicon" class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/community/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/community.svg" />
                                    <span>Community</span>
                                </div>
                            </a>
                        </div>



                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/elections/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/election.svg" />
                                    <span>Elections</span>
                                </div>
                            </a>
                        </div>


                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/polls/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/polls.svg" />
                                    <span>Polls</span>
                                </div>
                            </a>
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
                            <a href="<?php echo home_url(); ?>/features-details/treasury/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/treasury.svg" />
                                    <span>Treasury</span>
                                </div>
                            </a>
                        </div>

                        <div id="payoutsicon" class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/payouts/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/payouts.svg" />
                                    <span>Payouts</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/multi-sig/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/multisig.svg" />
                                    <span>Multi-sig</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/utility-token/">
                                <div class="flex wrap justify-center">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/icons/utility-token.svg" />
                                    <span>Utility Token</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/voice-token/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/voice-token.svg" />
                                    <span>Voice Token</span>
                                </div>
                            </a>
                        </div>

                        <div class="icon medium clickable">
                            <a href="<?php echo home_url(); ?>/features-details/payout-token/">
                                <div class="flex wrap justify-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                                    <span>Payout Token</span>
                                </div>
                            </a>
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
                <p class="title-medium">Success Stories from Hypha Customers</p>
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
            <div class="col-5">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                    </div>

                    <h2 class="subtitle">Use Cases</h2>
                </div>
                <p class="title-medium">Start your transformation, today</p>
            </div>

            <div class="col-7">
                <p class="text-20">
                    Unleash your success: Discover some of Hypha's customizable use cases and learn how to transform
                    your project with Hypha's Organizational Toolkit! More use cases to come - stay tuned!'
                </p>

            </div>
        </div>

        <div class="area flex gap-20">

            <?php $usecases = get_field('select_use_cases');
            if( $usecases ): ?>

            <?php foreach( $usecases as $post ): 
                setup_postdata($post); ?>
            <div class="col-4">
                <a class="nostyle" href="<?php the_permalink(); ?>">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <h3 class="title-40"><?php the_title(); ?></h3>
                            <p class="text-20 light-blu"><?php the_field('tagline') ?></p>
                            <p><?php the_content(); ?></p>
                            <div class="fake-button space">
                                <p>Learn more</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>


        </div>
    </section>

    <section id="wallet">
        <div class="area flex gap-20 align-center">
            <div class="col-5">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wallet.svg" />
                    </div>
                    <p class="subtitle">Download our new App:</p>
                </div>
                <h2 class="title-big">Hypha Wallet</h2>
                <p class="text-20 light-blu">The key to your new digital organization. With this app you can manage your
                    DAO transactions, tokens, profile, and much more</p>
                </p>
                <div class="wallet-resp">
                    <img class="wr-1" src="<?php echo get_template_directory_uri(); ?>/img/wallet-2.jpg" />
                    <img class="wr-2" src="<?php echo get_template_directory_uri(); ?>/img/wallet-1.jpg" />
                </div>
                <div class="buttons wrap">
                    <a href="<?php echo home_url(); ?>/get-started/" class="button primary">Get Started</a>
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

    <!--<section id="strenght">
        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        
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
                    
                </div>
                <p class="text-24 bold white">Fee free, onchain transactions</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    
                </div>
                <p class="text-24 bold white">Templates to kick start your project</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    
                </div>
                <p class="text-24 bold white">A community space to grow your project</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>

            <div class="col-3">
                <div class="icon big">
                    
                </div>
                <p class="text-24 bold white">Human centric design in mind</p>
                <p>Unlike other DAO’s, Hypha does not charge every time your organisation uses the blockchain to
                    record decisions, transactions etc…</p>
            </div>
        </div>

    </section>-->



    <section id="education">
        <div class="area with-titles flex align-bottom gap-20">
            <div class="col-7">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/education.svg" />
                    </div>

                    <h2 class="subtitle">Hypha Education Hub</h2>
                </div>
                <p class="title-medium">Learn more about DAOs by visiting <a
                        href="<?php echo home_url(); ?>/education/">Hypha Education Hub</a>

                </p>
            </div>
        </div>


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
                <p class="title-medium">Explore Hypha’s latest News<br /> by visiting our <a
                        href="<?php echo home_url(); ?>/news/">Blog</a></p>
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
                        <?php 
                            if ( !has_post_format( 'video' )) {
                            ?> <div class="top-right-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/top-right-link.svg">
                        </div>

                        <?php } ?>
                        <p class="text-14 bold light-blu"><?php the_category(', '); ?></p>
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