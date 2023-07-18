<?php
/**
 * Template Name: dev-pricing-model
 *
 */

 get_header();
 ?>


<main id="pricing-models" class="single_dao_offers">

    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>


    <section id="price-area">

        <div class="price-sidebar">
            <div class="bread_crumb"><a href="<?php echo home_url(); ?>">Home ></a> Pricing > Developer plan </div>
            <div class="ps-center">
                <span class="up-title">Stake for your members</span>
                <h1>Build with Hypha</h1>
                <p class="small">If you are building a dApp and are looking to integrate it with the Hypha tech stack or
                    simply to co-create with the Hypha team, we’ve implemented a simple staking model for your members.
                    We want to <strong>make it easy to build together</strong> inside a vibrant developer community
                    within the Hypha
                    Network. Join us and let’s build a better world together! <strong>Click the button below to contact
                        us!</strong>
                </p>
                <div class="price-plan-ctas">
                    <a href="mailto:hello@hypha.earth" target="_blank" class="button-dark-blu">Connect with us</a>
                    <a href="<?php echo home_url(); ?>/dao-plans/" class="cta">DAO Plans</a>
                    <a href="<?php echo home_url(); ?>/ecosystem-plan/" class="cta">Ecosystem Plan</a>
                </div>
            </div>
            <div class="up-small">
            </div>

        </div>

        <div class="price-wizard">

            <div class="wiz-wrap ecosystem developers">


                <div class="models-list">

                    <div class="model-card">
                        <h2>Developer <span>Plan</span></h2>
                        <div class="card-section">
                            <div>
                                <p id="anchor-price" class="ml-main-price">
                                    <span class="cur hyph">$</span> 5 <span class="perme">/per member</span>
                                </p>
                                <p class="including"><b>Min. Hypha Token <br />Staked in DAO treasury</b></p>
                            </div>
                            <div class="ml-divider"></div>

                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">Essentials</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list"><a href="#">Token</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Profile and Wallet</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Admin Roles/Badges</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Logo Personalisation</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">Contributions</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list"><a href="#">Proposals Dashboard</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Contribution Proposals</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Quest Proposals</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">
                                        <p class="ml-title">Compensation</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list"><a href="#">Salary Bands</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Roles Archetypes</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Role Assignments</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">
                                        <p class="ml-title">Governance</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list coming-soo"><a href="#">Agreements and
                                                        Policies</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo"><a href="#">Configurable
                                                        Governance</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo"><a href="#">Organisation Templates</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">
                                        <p class="ml-title">Treasury</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list shortner coming-soo"><a href="#">Treasury
                                                        Management</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo"><a href="#">Token Sale</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list"><a href="#">Payouts</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">
                                        <p class="ml-title">Branding</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list shortner"><a href="#">Design and Branding</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">
                                        <p class="ml-title">Circles</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list coming-soo shortner"><a href="#">Circle
                                                        Dashboard</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo shortner"><a href="#">Circle
                                                        Budgets</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo shortner"><a href="#">Circle
                                                        Proposals</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">Community Features</p>
                                        <ul>
                                            <li>
                                                <p class="ml-list coming-soo shortner"><a href="#">Upvote
                                                        Delegates</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo shortner"><a href="#">Community
                                                        Quests</a></p>
                                            </li>
                                            <li>
                                                <p class="ml-list coming-soo shortner"><a href="#">Community
                                                        Badges</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>


                </div>
            </div>


        </div>
    </section>

    <?php endwhile; ?>
    <?php endif;  ?>


    <?php get_footer(); ?>