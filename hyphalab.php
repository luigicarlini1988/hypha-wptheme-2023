<?php
/**
 * Template Name: Hyphalab
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero about-us">
        <div class="get-started-hero-back">
            <div class="pin-area">
                <div class="pin pin1"></div>
                <div class="pin pin2"></div>
                <div class="pin pin3"></div>
                <div class="pin pin4"></div>
                <div class="pin pin5"></div>
            </div>
        </div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="get-start-icon-case about-us">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
            </div>
            <div class="col-9">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                    </div>
                    <p class="subtitle">Discover the opportunities of</p>
                </div>
                <h1 class="title-giga"><?php the_title(); ?></h1>
                <div class="text-20 light-blu"><?php the_content(); ?></div>

                <div class="buttons gap-50 flex">
                    <a href="#hyphalab" class="button primary">Discover All Opportunities</a>
                </div>
            </div>
        </div>
    </section>

    <section id="hyphalab">
        <div class="area align-center flex gap-50">
            <div class="col-half">
                <p class="subtitle">Become a Hypha:</p>
                <h2 class="title-big white">Ambassador</h2>
                <p class="text-20 light-blu"> Receive Hypha tokens by publicly representing Hypha or actively
                    contributing to raising awareness of the Hypha Network worldwide. </p>
                <div class="buttons hide-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/ambassador/">Let's DAO it!</a>
                </div>
            </div>

            <div class="col-half">
                <div class="generic-card">
                    <div class="wrappo">
                        <div class="fake-label">Details</div>
                        <p>Receive Hypha Tokens each time you create opportunities for Hypha to be featured in
                            public webinars or in-person events. This can be achieved by pitching on behalf of Hypha
                            or by inviting Hypha core members to speak at these events.</p>
                        <div class="bottom-card flex gap-20 align-center">
                            <div class="icon big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/bullhorn.svg" />
                            </div>
                            <div class="bottom-card-text">
                                <p class="white bold text-14">Ambassador Badge</p>
                                <p class="text-12">Please note that the validity of the Ambassador badge can be
                                    renewed every 3 months through a vote in the Hypha DAO.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buttons show-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/ambassador/">Let's DAO it!</a>
                </div>
            </div>
        </div>

        <div class="area align-center flex gap-50">
            <div class="col-half">
                <p class="subtitle">Become a Hypha:</p>
                <h2 class="title-big white">Affiliate</h2>
                <p class="text-20 light-blu">Receive Hypha Tokens whenever the organizations you onboard as DAOs in the
                    Hypha Network make payments for their recurring subscriptions.</p>
                <div class="buttons hide-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/affiliate/">Let's DAO it!</a>
                </div>
            </div>

            <div class="col-half">
                <div class="generic-card">
                    <div class="wrappo">
                        <div class="fake-label">Details</div>
                        <p>This badge lets you receive Hypha tokens whenever you successfully refer organizations to
                            join the Hypha Network as DAOs, and they subsequently pay for their recurring
                            subscriptions. This value flow potential lasts as long as your Affiliate badge remains valid.</p>
                        <div class="bottom-card flex gap-20 align-center">
                            <div class="icon big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/badge-check.svg" />
                            </div>
                            <div class="bottom-card-text">
                                <p class="white bold text-14">Affiliate Badge</p>
                                <p class="text-12">Please note that the validity of the Affiliate badge can be
                                    renewed every 3 months through a vote in the Hypha DAO.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buttons show-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/affiliate/">Let's DAO it!</a>
                </div>
            </div>
        </div>

        <div class="area align-center flex gap-50">
            <div class="col-half">
                <p class="subtitle">Become a Hypha:</p>
                <h2 class="title-big white">Consultant</h2>
                <p class="text-20 light-blu">The Hypha Consultant badge is an exciting opportunity to receive both USD equivalent
                    currency and Hypha tokens by providing consulting services on behalf of the Hypha DAO within the
                    Hypha Network. </p>
                <div class="buttons hide-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/consultant/">Let's DAO it!</a>
                </div>
            </div>

            <div class="col-half">
                <div class="generic-card">
                    <div class="wrappo">
                        <div class="fake-label">Details</div>
                        <p>This badge grants you the ability to utilize your consulting skills on DAO Consulting
                            projects overseen by Hypha DAO. You will receive rewards based on the Hypha
                            Consultant rate card as a combination of USD Equivalent and Hypha tokens, and you will become part
                            of the Hypha delivery team for strategic projects involving Hypha’s DAO and Ecosystem.
                        </p>
                        <div class="bottom-card flex gap-20 align-center">
                            <div class="icon big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/briefcase.svg" />
                            </div>
                            <div class="bottom-card-text">
                                <p class="white bold text-14">Consultant Badge</p>
                                <p class="text-12">Please note that the validity of the Consultant badge can be
                                    renewed every 3 months through a vote in the Hypha DAO.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buttons show-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/consultant/">Let's DAO it!</a>
                </div>
            </div>
        </div>

        <div class="area align-center flex gap-50">
            <div class="col-half">
                <p class="subtitle">Become a Hypha:</p>
                <h2 class="title-big white">Service DAO</h2>
                <p class="text-20 light-blu">The Service DAO badge presents an opportunity for your DAO to enhance
                    its visibility within the Hypha network, be recognized as one of Hypha DAO’s accredited partners
                    for DAO services and receive project leads from Hypha DAO.</p>
                <div class="buttons hide-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/service-dao/">Let's DAO it!</a>
                </div>
            </div>

            <div class="col-half">
                <div class="generic-card">
                    <div class="wrappo">
                        <div class="fake-label">Details</div>
                        <p>Gain the opportunity to independently promote its services to the entire Hypha Network,
                            while benefiting from the endorsement of Hypha DAO. Your service DAO will have the total
                            freedom to develop its own DAOnomics and operate autonomously. When Hypha DAO provides a
                            lead to your service DAO, a percentage in Hypha tokens will be reciprocally sent by your Service DAO back to Hypha DAO.</p>
                        <div class="bottom-card flex gap-20 align-center">
                            <div class="icon big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            </div>
                            <div class="bottom-card-text">
                                <p class="white bold text-14">Service DAO Badge</p>
                                <p class="text-12">Please note that the validity of the Service DAO badge can be
                                    renewed every 3 months through a vote in the Hypha DAO.</p>
                            </div>
                        </div>
                    </div>

                    <div class="buttons show-resp">
                        <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/service-dao/">Let's Do
                            it!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="area align-center flex gap-50">
            <div class="col-half">
                <p class="subtitle">Start To:</p>
                <h2 class="title-big white">Build with Hypha</h2>
                <p class="text-20 light-blu">Gain visibility in the Hypha network by creating applications or
                    integrations with Hypha DAO for DAOs in the Hypha Network to use.</p>

                <div class="buttons hide-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/developer/">Let's DAO it!</a>
                </div>
            </div>

            <div class="col-half">
                <div class="generic-card">
                    <div class="wrappo">
                        <div class="fake-label">Details</div>
                        <p>If you are developing a decentralized application (dApp) and seek to integrate it with
                            the Hypha technology stack, your DAO can apply for the developer badge. This will enable
                            your DAO to be acknowledged in the Hypha App Marketplace. Our aim is to facilitate
                            collaborative development within a vibrant developer community and highlight projects
                            and solutions that contribute value to the solution for DAOs within the Hypha Network.
                            Let’s join forces to create a better world together!</p>
                        <div class="bottom-card flex gap-20 align-center">
                            <div class="icon big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
                            </div>
                            <div class="bottom-card-text">
                                <p class="white bold text-14">Developer Badge</p>
                                <p class="text-12">Please note that the validity of the Developer badge can be
                                    renewed every 3 months through a vote in the Hypha DAO.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons show-resp">
                    <a class="button primary" href="<?php echo home_url(); ?>/hyphalab/developer/">Let's DAO it!</a>
                </div>
            </div>
        </div>

    </section>


</main>


<?php get_footer(); ?>