<?php
/**
 * Template Name: Pricing DAO builder
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

        <div class="area with-toggle flex justify-right">
            <div class="flex align-center gap-20">
                <p class="light-blu tex-16 bold">Year Upfront Save 20%</p>
                <div id="fake_toggle">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="area flex no-wrap gap-20 space-between">
            <div class="price-column">
                <h2 class="text-18 white"><strong>Founder</strong> <span class="light-blu">Plan</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <p class="title-56 white">Free</p>
                        <p class="text-14 light-blu">Always free, forever</p>
                    </div>
                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">5</span>
                    </div>
                    <div class="feature-list">
                        <ul>
                            <li class="has-child">Essentials
                                <ul>
                                    <li>Token</li>
                                    <li>Profile and Wallet</li>
                                    <li>Admin Roles/Badges</li>
                                    <li>Logo Personalisation</li>
                                </ul>
                            </li>

                            <li class="has-child">Contributions
                                <ul>
                                    <li>Proposals Dashboard</li>
                                    <li>Contribution Proposals</li>
                                    <li>Quest Proposals</li>
                                </ul>
                            </li>

                            <li class="has-child">Compensations
                                <ul>
                                    <li>Salary Bands</li>
                                    <li>Roles Archetypes</li>
                                    <li>Role Assignments</li>
                                </ul>
                            </li>
                            <li class="has-child">Governance
                                <ul>
                                    <li>Agreements and Policies</li>
                                    <li>Configurable Governance</li>
                                    <li>Organisation Templates</li>
                                </ul>
                            </li>
                            <li class="has-child">Treasury
                                <ul>
                                    <li>Treasury Management</li>
                                    <li>Token Sale</li>
                                    <li>Payouts</li>
                                </ul>
                            </li>
                            <li class="has-child">Circles
                                <ul>
                                    <li>Circle Dashboard</li>
                                    <li>Circle Budgets</li>
                                    <li>Circle Proposals</li>
                                </ul>
                            </li>

                            <li class="has-child">Branding
                                <ul>
                                    <li>Colors Customisation</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="price-column">
                <h2 class="text-18 white"><strong>Starter</strong> <span class="light-blu">Plan</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-bottom justify-center">
                            <span class="text-14 white">$</span>
                            <span id="starter-price" class="title-big white"></span>
                            <span class="text-14 white">/mo</span>
                        </div>
                        <p class="text-14 light-blu">When payed <span class="timeframe"></span></p>
                    </div>
                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">15</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">500</span>
                    </div>
                    <div class="feature-list">
                        <ul>
                            <li class="has-child">Essentials
                                <ul>
                                    <li>Token</li>
                                    <li>Profile and Wallet</li>
                                    <li>Admin Roles/Badges</li>
                                    <li>Logo Personalisation</li>
                                </ul>
                            </li>

                            <li class="has-child">Contributions
                                <ul>
                                    <li>Proposals Dashboard</li>
                                    <li>Contribution Proposals</li>
                                    <li>Quest Proposals</li>
                                </ul>
                            </li>

                            <li class="has-child">Compensations
                                <ul>
                                    <li>Salary Bands</li>
                                    <li>Roles Archetypes</li>
                                    <li>Role Assignments</li>
                                </ul>
                            </li>
                            <li class="has-child">Governance
                                <ul>
                                    <li>Agreements and Policies</li>
                                    <li>Configurable Governance</li>
                                    <li>Organisation Templates</li>
                                </ul>
                            </li>
                            <li class="has-child">Treasury
                                <ul>
                                    <li>Treasury Management</li>
                                    <li>Token Sale</li>
                                    <li>Payouts</li>
                                </ul>
                            </li>
                            <li class="has-child">Circles
                                <ul>
                                    <li>Circle Dashboard</li>
                                    <li>Circle Budgets</li>
                                    <li>Circle Proposals</li>
                                </ul>
                            </li>
                            <li class="has-child">Community Features
                                <ul>
                                    <li>Upvote Delegates</li>
                                    <li>Community Quests</li>
                                    <li>Community Badges</li>
                                </ul>
                            </li>

                            <li class="has-child">Branding
                                <ul>
                                    <li>Colors Customisation</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="price-column">
                <h2 class="text-18 white"><strong>Growth</strong> <span class="light-blu">Plan</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-bottom justify-center">
                            <span class="text-14 white">$</span>
                            <span id="growth-price" class="title-big white"></span>
                            <span class="text-14 white">/mo</span>
                        </div>
                        <p class="text-14 light-blu">When payed <span class="timeframe"></span></p>
                    </div>
                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">50</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">2000</span>
                    </div>
                    <div class="feature-list">
                        <ul>
                            <li class="has-child">Essentials
                                <ul>
                                    <li>Token</li>
                                    <li>Profile and Wallet</li>
                                    <li>Admin Roles/Badges</li>
                                    <li>Logo Personalisation</li>
                                </ul>
                            </li>

                            <li class="has-child">Contributions
                                <ul>
                                    <li>Proposals Dashboard</li>
                                    <li>Contribution Proposals</li>
                                    <li>Quest Proposals</li>
                                </ul>
                            </li>

                            <li class="has-child">Compensations
                                <ul>
                                    <li>Salary Bands</li>
                                    <li>Roles Archetypes</li>
                                    <li>Role Assignments</li>
                                </ul>
                            </li>
                            <li class="has-child">Governance
                                <ul>
                                    <li>Agreements and Policies</li>
                                    <li>Configurable Governance</li>
                                    <li>Organisation Templates</li>
                                </ul>
                            </li>
                            <li class="has-child">Treasury
                                <ul>
                                    <li>Treasury Management</li>
                                    <li>Token Sale</li>
                                    <li>Payouts</li>
                                </ul>
                            </li>
                            <li class="has-child">Circles
                                <ul>
                                    <li>Circle Dashboard</li>
                                    <li>Circle Budgets</li>
                                    <li>Circle Proposals</li>
                                </ul>
                            </li>
                            <li class="has-child">Community Features
                                <ul>
                                    <li>Upvote Delegates</li>
                                    <li>Community Quests</li>
                                    <li>Community Badges</li>
                                </ul>
                            </li>

                            <li class="has-child">Branding
                                <ul>
                                    <li>Colors Customisation</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="price-column">
                <h2 class="text-18 white"><strong>Thrive</strong> <span class="light-blu">Plan</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-bottom justify-center">
                            <span class="text-14 white">$</span>
                            <span id="thrive-price" class="title-big white"></span>
                            <span class="text-14 white">/mo</span>
                        </div>
                        <p class="text-14 light-blu">When payed <span class="timeframe"></span></p>
                    </div>
                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">150</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">5000</span>
                    </div>
                    <div class="feature-list">
                        <ul>
                            <li class="has-child">Essentials
                                <ul>
                                    <li>Token</li>
                                    <li>Profile and Wallet</li>
                                    <li>Admin Roles/Badges</li>
                                    <li>Logo Personalisation</li>
                                </ul>
                            </li>

                            <li class="has-child">Contributions
                                <ul>
                                    <li>Proposals Dashboard</li>
                                    <li>Contribution Proposals</li>
                                    <li>Quest Proposals</li>
                                </ul>
                            </li>

                            <li class="has-child">Compensations
                                <ul>
                                    <li>Salary Bands</li>
                                    <li>Roles Archetypes</li>
                                    <li>Role Assignments</li>
                                </ul>
                            </li>
                            <li class="has-child">Governance
                                <ul>
                                    <li>Agreements and Policies</li>
                                    <li>Configurable Governance</li>
                                    <li>Organisation Templates</li>
                                </ul>
                            </li>
                            <li class="has-child">Treasury
                                <ul>
                                    <li>Treasury Management</li>
                                    <li>Token Sale</li>
                                    <li>Payouts</li>
                                </ul>
                            </li>
                            <li class="has-child">Circles
                                <ul>
                                    <li>Circle Dashboard</li>
                                    <li>Circle Budgets</li>
                                    <li>Circle Proposals</li>
                                </ul>
                            </li>
                            <li class="has-child">Community Features
                                <ul>
                                    <li>Upvote Delegates</li>
                                    <li>Community Quests</li>
                                    <li>Community Badges</li>
                                </ul>
                            </li>

                            <li class="has-child">Branding
                                <ul>
                                    <li>Colors Customisation</li>
                                </ul>
                            </li>
                        </ul>
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

                    <p class="subtitle">Get Started Today</p>
                </div>
                <p class="title-big">Start For Free</p>
                <p class="text-24 light-blu">The plans payment & activation<br /> happens directly inside your DAO!
                </p>
                <p>Start today with creating your Free DAO and upgrade in any moment directly from
                    your Plan
                    Payments Dashboards</p>
            </div>

            <div class="col-half">
                <div class="generic-card glow-back has-link">
                    <div class="wrappo">
                        <div class="icon in-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        </div>
                        <h3 class="title-medium">Create your DAO</h3>
                        <p>Check out our Get started guide to discover everything you need to know to get your DAO
                            up and running. If you are ready, click the blu button instead!</p>
                        <div class="buttons flex wrap gap-20">
                            <a href="<?php echo home_url(); ?>/get-started/create-your-dao/"
                                class="button secondary">Get
                                Started Guide</a>
                            <a class="button primary" href="https://dao.hypha.earth/hypha/create-your-dao" target="_blank">Create DAO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="upsell">
        <?php // include('incl/pricing-upsell.html') ?>
    </section> -->



</main>


<?php get_footer(); ?>