<?php
/**
 * Template Name: eaas-pricing-modelOLD
 *
 */

 get_header('eaas-pricing');
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
            <div class="bread_crumb"><a href="<?php echo home_url(); ?>">Home ></a> Pricing > Ecosystem DAO </div>
            <div class="ps-center">
                <h1><span class="up-title">Ecosystem</span><br />DAO Builder</h1>
                <p class="small">
                    Is your dream to <strong>build an impactful system of like-minded communities locally or
                        worldwide?</strong> Then you could create an interconnected DAO ecosystem. Invite partners and
                    communities to create their DAOs in your DAO ecosystem.
                    Our Ecosystem DAO Builder price plans offer <strong>working capital for your DAO ecosystem
                        launch</strong>. You can even choose the number of DAOs to include. Alternatively we could
                    connect you to potential working capital providers to support your DAO ecosystem
                </p>
                <div class="price-plan-ctas">
                    <a href="#" class="button-dark-blu">Activate your Ecosystem</a>
                    <a href="<?php echo home_url(); ?>/single-dao-pricing-models" class="cta">Single DAO Builder</a>
                </div>
            </div>

            <div class="up-small">
                Need more Members, more DAOs or a different model?<br />Contact us at <a
                    href="mailto:hello@hypha.earth">hello@hypha.earth</a>
            </div>

        </div>

        <div class="price-wizard">

            <div class="price-toggle">
                <div id="toggle-usd" class="active">
                    <div class="icon-usd">$</div>USD
                </div>
                <div id="toggle-hypha">
                    <div class="icon-hypha"></div>HYPHA
                </div>
            </div>

            <div class="wiz-wrap ecosystem nu">
                <div class="dao-slider">
                    <p class="optimise">Slide to select amount of Additional DAOs</p>
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
                                <p class="including"><strong>One time payment</strong></p>
                            </div>
                            <div class="bringer">
                                <span class="big-no">150</span>
                                <br />Max Core Members
                            </div>
                            <div class="commun">
                                <span class="big-no">Unlimited</span>
                                <br />Community Members
                            </div>
                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">All DAO features</p>
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
                                <p class="including"><strong>includes <span id="anchor_stake"></span></strong>
                                    <br />added to your DAO stake in Hypha
                                </p>
                            </div>

                        </div>
                    </div>


                    <div id="additional-dao" class="model-card">
                        <h2>Each Additional <span>DAO</span></h2>
                        <div class="card-section">
                            <div>
                                <p id="additional-price" class="ml-main-price"></p>
                                <p class="including"><strong>One time payment</strong></p>
                            </div>
                            <div class="bringer">
                                <span class="big-no">150</span>
                                <br />Max Core Members
                            </div>
                            <div class="commun">
                                <span class="big-no">Unlimited</span>
                                <br />Community Members
                            </div>
                            <div class="ml-divider"></div>
                            <div>
                                <ul>
                                    <li class="feat-list">
                                        <p class="ml-title">All DAO features</p>
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
                                <p class="including"><strong>includes <span id="additional_stake"></span></strong>
                                    <br />added to your DAO stake in Hypha
                                </p>
                            </div>

                        </div>
                    </div>


                    <div id="totals-card" class="model-card">
                        <h2>Totals</h2>

                        <div class="tot-anch-dao">
                            <div>Anchor DAO</div>
                            <div id="total-anchor-dao"></div>
                        </div>

                        <div class="tot-additional-dao">
                            <div id="tot-additonal-field"></div>
                            <div>Additional DAOs</div>
                            <div id="total-additional-dao"></div>
                        </div>

                        <div class="tot-discount-dao">
                            <div id="disc-3" class="disc-l">
                                <div><span id="total-discount-3-percent"></span> Discount</div>
                                <div id="total-discount-3"></div>
                            </div>
                        </div>


                        <div class="great-total">
                            <div id="great-final-total">

                            </div>
                            <div>
                                <p class="including"><strong>includes <span id="final_total_stake"></span></strong>
                                    <br />added to your DAO stake in Hypha
                                </p>
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