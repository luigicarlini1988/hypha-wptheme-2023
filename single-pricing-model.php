<?php
/**
 * Template Name: single-pricing-model
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
            <div class="bread_crumb"><a href="<?php echo home_url(); ?>">Home ></a> Pricing > DAO Plans </div>
            <div class="ps-center">
                <span class="up-title">Pay as you go</span>
                <h1>DAO Builder</h1>
                <p class="small">Starting out on your DAO journey? If you wish to create a DAO for your organization,
                    then these are the price plans for you! <strong>Get started for free</strong> with our Founder Plan!
                    As your members and community grow, evolve through our progressive plans with increasing feature and
                    member inclusions. <strong>Join our Beta Program now!</strong>
                </p>
                <div class="price-plan-ctas">
                    <a href="<?php echo home_url(); ?>/sign-up-for-your-hypha-dao/" target="_blank"
                        class="button-dark-blu">Join the Beta list</a>
                    <a href="<?php echo home_url(); ?>/ecosystem-plan/" class="cta">Ecosystem Plan</a>
                    <a href="<?php echo home_url(); ?>/developer-plan/" class="cta">Developer Plan</a>
                </div>
            </div>
            <div class="up-small">
                Need more Members, more DAOs or a different model?<br />Contact us at <a
                    href="mailto:hello@hypha.earth">hello@hypha.earth</a>
            </div>

        </div>

        <div class="price-wizard">

            <div class="wiz-wrap">

                <div class="price-toggle" style="display:none;">

                    <div id="toggle-usd" class="active">
                        <div class="icon-usd">$</div>USD
                    </div>
                    <div id="toggle-hypha">
                        <div class="icon-hypha"></div>HYPHA
                    </div>
                </div>

                <div id="dao-toggle" class="dao-toggle to_year">
                    <div class="save_20">Save 20%</div>
                    <div class="fake_toggle"></div>
                    <div class="tog_month">Monthly</div>
                    <div class="tog_year">Year Upfront</div>
                </div>

                <div class="models-list">

                    <div id="ml-freemium" class="model-card to_year">
                        <h2>Founder <span>Plan</span></h2>
                        <div class="card-section">
                            <div class="single_prices">
                                <div class="big_top_price">
                                    <span></span><span id="freemium_price">Free</span><span></span>
                                </div>
                                <div class="year_price">
                                    When payed annually
                                </div>
                            </div>
                            <div class="ml-divider"></div>

                            <div class="bringer">
                                <div class="mcm">
                                    <span class="big-no">5</span>
                                    <br>Core Members
                                </div>
                            </div>

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

                        </div>

                    </div>

                    <div id="ml-starter" class="model-card to_year">
                        <h2>Starter <span>Plan</span></h2>
                        <div class="card-section">
                            <div class="single_prices">
                                <div class="big_top_price">
                                    <span class="dolo">$</span><span id="single_starter_price"></span><span>/mo</span>
                                </div>
                                <div class="year_price">
                                    When payed annually
                                </div>
                            </div>

                            <div class="ml-divider"></div>

                            <div class="bringer">
                                <div class="mcm">
                                    <span class="big-no">15</span>
                                    <br>Core Members
                                </div>
                                <div class="cmmt">500 Community Members</div>
                            </div>

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


                    <div id="ml-growth" class="model-card to_year">
                        <h2>Growth <span>Plan</span></h2>
                        <div class="card-section">
                            <div class="single_prices">
                                <div class="big_top_price">
                                    <span class="dolo">$</span><span id="single_growth_price"></span><span>/mo</span>
                                </div>
                                <div class="year_price">
                                    When payed annually
                                </div>
                            </div>

                            <div class="ml-divider"></div>

                            <div class="bringer">
                                <div class="mcm">
                                    <span class="big-no">50</span>
                                    <br>Core Members
                                </div>
                                <div class="cmmt">2,000 Community Members</div>
                            </div>
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

                    <div id="ml-thrive" class="model-card to_year">
                        <h2>Thrive <span>Plan</span></h2>
                        <div class="card-section">
                            <div class="single_prices">
                                <div class="big_top_price">
                                    <span class="dolo">$</span><span id="single_thrive_price"></span><span>/mo</span>
                                </div>
                                <div class="year_price">
                                    When payed annually
                                </div>
                            </div>

                            <div class="ml-divider"></div>

                            <div class="bringer">
                                <div class="mcm">
                                    <span class="big-no">150</span>
                                    <br>Core Members
                                </div>
                                <div class="cmmt">5,000 Community Members</div>
                            </div>

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

            <div class="notice">
                <p class="coming-soo">Upcoming Features</p>
                <h4 id="opt-scroll">Optional <span>offers</h4>
                <p class="expander">Show Features</p>
            </div>

            <div class="optional">

                <div id="opt_list" class="models-list">

                    <div class="model-card">
                        <h2>Founder <span>Plan</span></h2>
                        <div class="card-section">
                            <p>DAO Kickstart <span>Program</span><span class="priz"><span class="dolo">$</span><span
                                        id="kick-free"></span></span></p>
                        </div>

                        <div class="card-section second">
                            <p>1:1 Workshop<span> Activation</span><span class="priz"><span class="dolo">$</span><span
                                        id="work-free"></span></span></p>
                        </div>
                    </div>

                    <div class="model-card">
                        <h2>Starter <span>Plan</span></h2>
                        <div class="card-section">
                            <p>DAO Kickstart <span>Program</span><span class="priz"><span class="dolo">$</span><span
                                        id="kick-start"></span></span></p>
                        </div>

                        <div class="card-section second">
                            <p>1:1 Workshop<span> Activation</span><span class="priz"><span class="dolo">$</span><span
                                        id="work-start"></span></span></p>
                        </div>
                    </div>

                    <div class="model-card">
                        <h2>Growth <span>Plan</span></h2>
                        <div class="card-section">
                            <p>DAO Kickstart <span>Program</span><span class="priz"><span class="dolo">$</span><span
                                        id="kick-grow"></span></span></p>
                        </div>

                        <div class="card-section second">
                            <p>1:1 Workshops<span> Activation</span><span class="priz"><span class="dolo">$</span><span
                                        id="work-grow"></span></span></p>
                        </div>
                    </div>

                    <div class="model-card">
                        <h2>Thrive <span>Plan</span></h2>
                        <div class="card-section">
                            <p>DAO Kickstart <span>Program</span><span class="priz"><span class="dolo">$</span><span
                                        id="kick-thrive"></span></span></p>
                        </div>

                        <div class="card-section second">
                            <p>1:1 Workshops<span> Activation</span><span class="priz"><span class="dolo">$</span><span
                                        id="work-thrive"></span></span></p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php endwhile; ?>
    <?php endif;  ?>


    <?php get_footer(); ?>