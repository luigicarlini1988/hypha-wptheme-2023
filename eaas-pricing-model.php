<?php
/**
 * Template Name: eaas-pricing-model
 *
 */

 get_header();
 ?>


<main id="pricing-models">
    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>

    <section id="price-area">

        <div class="price-sidebar ecosystem">
            <div class="bread_crumb"><a href="<?php echo home_url(); ?>">Home ></a> Pricing > Ecosystem Plan </div>
            <div class="ps-center">
                <span class="up-title">Stake as you Grow</span>
                <h1>Ecosystem Builder</h1>
                <p class="small">
                    Do you wish to create a thriving ecosystem of connected DAOs? Then start by setting up an ‘Anchor
                    DAO’ as your DAO launchpad, and <strong>launch more DAOs to build your ecosystem.</strong> Our price
                    plan makes it
                    easy and affordable, as you simply need to <strong>stake Hypha Tokens into your DAO
                        treasury</strong> in addition to
                    paying a small yearly DAO Participation fee. Continue staking as your ecosystem grows through the
                    onboarding of more members, and own your DAO Ecosystem space! <strong>Join our Beta Program
                        now!</strong>

                </p>
                <div class="price-plan-ctas">
                    <a href="<?php echo home_url(); ?>/sign-up-for-your-hypha-dao/" class="button-dark-blu">Join
                        the Beta list</a>
                    <a href="<?php echo home_url(); ?>/dao-plans/" class="cta">DAO Plans</a>
                    <a href="<?php echo home_url(); ?>/developer-plan/" class="cta">Developer Plan</a>
                </div>
            </div>

            <div class="up-small">
                Need more Members, more DAOs or a different model?<br />Contact us at <a
                    href="mailto:hello@hypha.earth">hello@hypha.earth</a>
            </div>

        </div>

        <div class="price-wizard">

            <div class="wiz-wrap ecosystem nu">
                <div class="dao-slider">
                    <p class="optimise">Slide to select the amount of Additional DAOs</p>
                    <div class="range-aligner">
                        <input id="range" type="range" value="0" min="0" max="100" class="slider">
                        <div id="daosnumber">
                            <div id="daosnumber-inside"></div> DAO<span id="plural"></span>
                        </div>

                    </div>
                </div>

                <div class="models-list">

                    <div id="anchor-dao" class="model-card">
                        <h2>Anchor <span>DAO</span></h2>
                        <div class="card-section">
                            <div>
                                <p id="anchor-price" class="ml-main-price"></p>
                                <p class="including"><b>Min. Hypha Token <br />Staked in DAO treasury</b></p>
                            </div>
                            <div class="plus">+</div>
                            <div>
                                <p class="year_fee"><span id="anchor_year_fee"></span>/year</p>
                                <p class="including"><b>DAO participation fee</b></p>
                            </div>
                            <div class="bringer">
                                <div class="mcm">
                                    <span class="big-no">111</span>
                                    <br>Core Members
                                </div>
                                <div class="cmmt">1,000 Community Members</div>
                            </div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">All DAO features</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>


                    <div id="additional-dao" class="model-card">
                        <h2>Each Additional <span>DAO</span></h2>
                        <div class="card-section">
                            <div>
                                <p id="additional-price" class="ml-main-price"></p>
                                <p class="including"><b>Min. Hypha Token <br />Staked in DAO treasury</b></p>
                            </div>
                            <div class="plus">+</div>
                            <div>
                                <p class="year_fee"><span id="additional_year_fee"></span>/year</p>
                                <p class="including"><b>DAO participation fee</b></p>
                            </div>
                            <div class="bringer">
                                <div class="mcm">
                                    <span class="big-no">11</span>
                                    <br>Core Members
                                </div>
                                <div class="cmmt">100 Community Members</div>
                            </div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">All DAO features</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>


                    <div id="totals-card" class="model-card update-2023">
                        <h2 class="update-2023"> Grand Total</h2>



                        <div class="great_tot_burn">
                            <span id="final_total_stake"></span>
                            <p class="including"><b>Min. Hypha Token <br />Staked in DAOs treasuries*</b></p>
                        </div>

                        <div class="plus">+</div>

                        <div class="great_tot_stake">
                            <p class="year_fee"><span id="final_year_fee"></span>/year</p>
                            <p class="including"><b>DAOs participation fees*</b></p>
                        </div>

                        <div class="divider"></div>
                        <div>
                            <div class="tot-notes">
                                <p><i>*(1)Hypha Tokens needs to be staked in each DAO treasury in order to activate each
                                        DAO.</i>
                                </p>
                            </div>

                            <div class="tot-notes">
                                <p><i>*(2)This annual DAO participation fee supports ongoing maintenance and operating
                                        costs.</i></p>
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