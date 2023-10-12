<?php
/**
 * Template Name: Pricing Ecosystem Builder
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

        <div class="area with-slider flex justify-center">
            <div class="dao-slider">
                <p class="optimise">Slide to select the amount of Additional DAOs</p>
                <div class="range-aligner">
                    <input id="range" type="range" value="0" min="0" max="100" class="slider">
                    <div id="daosnumber">
                        <div id="daosnumber-inside">0</div> DAO<span id="plural"></span>
                    </div>

                </div>
            </div>
        </div>

        <div class="area flex no-wrap gap-20 space-between">
            <div class="price-column">
                <h2 class="text-18 white"><strong>Anchor</strong> <span class="light-blu">DAO</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <span id="anchor-price" class="title-56 white"></span>
                        </div>
                        <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury</p>
                    </div>

                    <div class="fee-divider flex align-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plus-round.svg" />
                    </div>

                    <div class="bottom-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <div>
                                <span id="anchor_year_fee" class="title-56 white"></span>
                                <span class="text-14 white">/year</span>
                            </div>
                        </div>
                        <p class="text-14 light-blu">DAO Participation Fee</p>
                    </div>

                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">111</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">1,000</span>
                    </div>
                    <div class="feature-list all">

                        <a href="<?php echo home_url(); ?>/features/" target="_blank">All DAO features</a>
                    </div>
                </div>
            </div>


            <div class="price-column">
                <h2 class="text-18 white"><strong>Each Additional</strong> <span class="light-blu">DAO</span></h2>
                <div class="price-item-card">
                    <div class="top-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <span id="additional-price" class="title-56 white"></span>
                        </div>
                        <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury</p>
                    </div>

                    <div class="fee-divider flex align-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plus-round.svg" />
                    </div>

                    <div class="bottom-price">
                        <div class="flex align-center justify-center">
                            <img class="hypha-cur"
                                src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            <div>
                                <span id="additional_year_fee" class="title-56 white"></span>
                                <span class="text-14 white">/year</span>
                            </div>
                        </div>
                        <p class="text-14 light-blu">DAO Participation Fee</p>
                    </div>

                    <div class="core-members flex align-center space-between">
                        <span class="white bold">Core members</span>
                        <span class="white counter">11</span>
                    </div>
                    <div class="community-members flex align-center space-between">
                        <span class="white bold">Community</span>
                        <span class="white counter">100</span>
                    </div>
                    <div class="feature-list all">
                        <a href="<?php echo home_url(); ?>/features/" target="_blank">All DAO features</a>
                    </div>
                </div>
            </div>

            <div class="price-column has-total">
                <h2 class="text-18 white"><strong>Grand</strong> <span class="light-blu">Total</span></h2>
                <div class="price-item-card glow-back">
                    <div class="wrappo">
                        <div class="top-price">
                            <div class="flex align-center justify-center">
                                <img class="hypha-cur"
                                    src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                                <span id="final_total_stake" class="title-56 white"></span>
                            </div>
                            <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury<sup>1</sup></p>
                        </div>

                        <div class="fee-divider flex align-center justify-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/plus-round.svg" />
                        </div>

                        <div class="bottom-price">
                            <div class="flex align-center justify-center">
                                <img class="hypha-cur"
                                    src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                                <div>
                                    <span id="final_year_fee" class="title-56 white"></span>
                                    <span class="text-14 white">/year</span>
                                </div>
                            </div>
                            <p class="text-14 light-blu">DAO Participation Fee<sup>2</sup></p>
                        </div>

                        <div class="fee-divider flex align-center justify-center">
                        </div>

                        <div class="disclaimer">
                            <span>*(1) Hypha Tokens needs to be staked in each DAO treasury in order to activate each
                                DAO.</span>
                            <span>*(2) This annual DAO participation fee supports ongoing maintenance and operating
                                costs.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <section>
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" />
                    </div>

                    <p class="subtitle">Get Started Today</p>
                </div>
                <p class="title-big">Get Started</p>
                <p class="text-24 light-blu">Get in touch with us to share your ecosystem vision and activate the
                    Ecosystem plan
                </p>
                <p>Our team is available to help fast-track your impact through the launch of your Anchor DAO & Ecosystem.</p>


            </div>

            <div class="col-half">
                <div class="form-wrap glow-back">
                    <div class="wrappo">
                        <form autocomplete="false" role="form" method="post"
                            action="https://mautic.hypha.earth/form/submit?formId=16" id="mauticform_ecosystembuilders"
                            data-mautic-form="ecosystembuilders" enctype="multipart/form-data">
                            <div class="mauticform-error" id="mauticform_ecosystembuilders_error"></div>
                            <div class="mauticform-message" id="mauticform_ecosystembuilders_message"></div>
                            <div class="mauticform-innerform">

                                <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                                    <div id="mauticform_ecosystembuilders_email" data-validate="email" data-validation-type="email" class="wrap-area full">
                                        <label id="mauticform_label_ecosystembuilders_email" for="mauticform_input_ecosystembuilders_email" class="mauticform-label">Email</label>
                                        <input id="mauticform_input_ecosystembuilders_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_first_name" data-validate="first_name" data-validation-type="text" class="wrap-area half">
                                        <label id="mauticform_label_ecosystembuilders_first_name" for="mauticform_input_ecosystembuilders_first_name" class="mauticform-label">First name</label>
                                        <input id="mauticform_input_ecosystembuilders_first_name" name="mauticform[first_name]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_website" class="wrap-area half">
                                        <label id="mauticform_label_ecosystembuilders_website" for="mauticform_input_ecosystembuilders_website" class="mauticform-label">Website</label>
                                        <input id="mauticform_input_ecosystembuilders_website" name="mauticform[website]" value="" class="mauticform-input" type="url">
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_number_of_team_members" class="wrap-area half">
                                        <label id="mauticform_label_ecosystembuilders_number_of_team_members" for="mauticform_input_ecosystembuilders_number_of_team_members" class="mauticform-label">Number of Team Members</label>
                                        <input id="mauticform_input_ecosystembuilders_number_of_team_members" name="mauticform[number_of_team_members]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_size_of_community" class="wrap-area half">
                                        <label id="mauticform_label_ecosystembuilders_size_of_community" for="mauticform_input_ecosystembuilders_size_of_community" class="mauticform-label">Size of Community</label>
                                        <input id="mauticform_input_ecosystembuilders_size_of_community" name="mauticform[size_of_community]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;"></span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_your_full_message" data-validate="your_full_message" data-validation-type="textarea" class="wrap-area full">
                                        <label id="mauticform_label_ecosystembuilders_your_full_message" for="mauticform_input_ecosystembuilders_your_full_message" class="mauticform-label">Organizational Purpose</label>
                                        <textarea id="mauticform_input_ecosystembuilders_your_full_message" name="mauticform[your_full_message]" class="mauticform-textarea"></textarea>
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_privacy_consent" data-validate="privacy_consent" data-validation-type="checkboxgrp" class="wrap-area half">
                                        <div class="mauticform-checkboxgrp-row flex"> <input class="mauticform-checkboxgrp-checkbox" name="mauticform[privacy_consent][]" id="mauticform_checkboxgrp_checkbox_privacy_consent_Agree0" type="checkbox" value="Agree">
                                            <span class="text-12">By submitting this form you agree to our <a href="<?php echo home_url(); ?>/privacy-policy/" target="_blank" class="light-blu">Privacy Policy</a></span>
                                        </div>
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_ecosystembuilders_submit" class="wrap-area half">
                                        <button type="submit" name="mauticform[submit]"
                                            id="mauticform_input_ecosystembuilders_submit" value=""
                                            class="mauticform-button btn btn-default">Submit</button>

                                    </div>
                                </div>

                                <input type="hidden" name="mauticform[formId]" id="mauticform_ecosystembuilders_id"
                                    value="16">
                                <input type="hidden" name="mauticform[return]" id="mauticform_ecosystembuilders_return"
                                    value="">
                                <input type="hidden" name="mauticform[formName]" id="mauticform_ecosystembuilders_name"
                                    value="ecosystembuilders">
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>




</main>


<?php get_footer(); ?>