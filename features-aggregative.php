<?php
/**
 * Template Name: Features Aggregative
 *
 */

 get_header();
 ?>


<main class="dark-theme">
    <section class="features-hero">
        <div class="area flex gap-50 align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" />
                    </div>
                    <h1 class="subtitle">Features</h1>
                </div>
                <p class="title-big">DAOs: The Best Tools to Reach Your Team’s Potential</p>
                <img class="resp-image"
                    src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />

                <p class="text-20">Experience fast-tracked growth and success for your project with Hypha’s cutting-edge
                    features. Take team collaboration to new heights and <span class="white"><strong>achieve more
                            together</strong></span> with the most comprehensive DAO toolkit available.</p>
                <a href="#features-overview" class="button secondary">Discover</a>
            </div>
            <div class="col-half">
                <img class="feat-top" src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />
            </div>
        </div>
    </section>

    <section id="features-overview">
        <div class="area flex gap-20 align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/eye.svg" loading="lazy">
                    </div>

                    <p class="subtitle">Hypha DAO Platform Overview</p>
                </div>
                <p class="title-medium">Your team’s new home for collaboration</p>
            </div>

            <div class="col-half">
                <p class="text-20">Easily stay on top of everything happening in your organization via overviews
                    covering active proposals, member profiles, voting settings, and more.</p>

            </div>
        </div>

        <div class="area with-feature-carousel">
            <div id="features-carousel" class="owl-carousel owl-theme">
                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/img/features/carousels/main-dashboard.png" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold">Home Dashboard</p>
                        <p class="text-16">Welcome home! The Main Dashboard provides a bird's eye overview of your
                            project, sharing insights on new members, active proposals, agreed assignments, and
                            more.</p>
                    </div>

                </div>

                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/img/features/carousels/main-proposals.png" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold">Proposals Dashboard</p>
                        <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>

                </div>

                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/img/features/carousels/main-members.png" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold">Members Dashboard</p>
                        <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>

                </div>

                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/img/features/carousels/main-organisation.png" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold">Organization Dashboard</p>
                        <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>

                </div>

                <div class="feature-carusel-item">

                    <div class="carousel-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/img/features/carousels/main-explore.png" />
                    </div>
                    <div class="carousel-text">
                        <p class="white text-18 bold">Explore Dashboard</p>
                        <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>

                </div>

            </div>
    </section>

    <?php 
            include ('incl/explore-features-web3.html') ;
        ?>



    <section class="explore-web2">
        <div class="area with-titles flex gap-20 align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Explore Features by Category</h2>
                </div>
                <p class="title-40">Features your competitors will wish they discovered first</p>
            </div>

            <div class="col-half">
                <p class="text-20 light-blu">
                    Position your project for success with our customisable, human-centric features. Unlock the benefits
                    of Hypha’s tools before your competitors!
                </p>

            </div>
        </div>

        <div class="area feature-list flex gap-20">

            <div class="col-2">
                <p class="light-blu text-14 bold">Team Management</p>
                <a href="<?php echo home_url(); ?>/features-details/circles/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                        <p>Circles</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/policies/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/policies.svg" />
                        <p>Policies</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/profile/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                        <p>Profiles</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">HR Management</p>
                <a href="<?php echo home_url(); ?>/features-details/roles/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/roles.svg" />
                        <p>Roles</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/reward-tiers/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/salaries.svg" />
                        <p>Reward Tiers</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/badges/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/badges.svg" />
                        <p>Badges</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/quests/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/quests.svg" />
                        <p>Quests</p>
                    </div>
                </a>

                <a href="<?php echo home_url(); ?>/features-details/assignments/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/assignments.svg" />
                        <p>Assignments</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">Financial Management</p>
                <a href="<?php echo home_url(); ?>/features-details/treasury/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/treasury.svg" />
                        <p>Treasury Dashboard</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/wallet/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/wallet.svg" />
                        <p>Wallet</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/multi-sig/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/multisig.svg" />
                        <p>Multi-sig</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/utility-token/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/utility-token.svg" />
                        <p>Utility Token</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/voice-token/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/voice-token.svg" />
                        <p>Voice Token</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/cash-token/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                        <p>Cash Token</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <p class="light-blu text-14 bold">Administration Tools</p>
                <a href="<?php echo home_url(); ?>/features-details/templates/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/templates.svg" />
                        <p>Templates</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/voting/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/settings.svg" />
                        <p>Voting System</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/branding/">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/branding.svg" />
                        <p>Branding</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/badges#anchor1">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/badges.svg" />
                        <p>Administrator Badge</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/badges#anchor1">
                    <div class="fake-features-button flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/treasury.svg" />
                        <p>Treasurer Badge</p>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <p class="light-blu text-14 bold">Community Features</p>
                <a href="<?php echo home_url(); ?>/features-details/community/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/community.svg" />
                        <p>Community Layer</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/polls/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/polls.svg" />
                        <p>Polls</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/payouts/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/payouts.svg" />
                        <p>Payouts</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/elections/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/election.svg" />
                        <p>Elections</p>
                    </div>
                </a>

            </div>

            <div class="col-2">
                <p class="light-blu text-14 bold">Ecosystem Features</p>
                <a href="<?php echo home_url(); ?>/features-details/ecosystem/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ecosystem.svg" />
                        <p>Ecosystem Dashboard</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/features-details/dao-launcher/">
                    <div class="fake-features-button cs flex align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        <p>DAO Launcher</p>
                    </div>
                </a>

            </div>
        </div>
        <div class="area">
            <div class="col-full flex align-center justify-right">

                <img width="18px" style="margin-right:5px"
                    src="<?php echo get_template_directory_uri(); ?>/img/icons/time.svg" /> = Feature Coming Soon

            </div>
        </div>
    </section>

    <section class="cta">
        <div class="area">
            <?php 
                include ('incl/main-cta.html') ;
                ?>
        </div>
    </section>


</main>


<?php get_footer(); ?>