<?php
/**
 * Template Name: Pricing Developer
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="pricing-hero-top inside">

        <div class="area top-title-pricing dev gap-50 flex align-bottom space-between">

            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>

            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cash.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/pricing-plans/">Pricing Plans</a> > <?php the_title(); ?>
                    </div>
                </div>
                <h1 class="title-big"><?php the_title(); ?></h1>

                <div class="text-18"><?php the_content(); ?></div>
            </div>

            <div class="col-full">
                <div class="generic-card dev-plan">
                    <div class="wrappo flex wrap gap-20">
                        <div class="col-full flex space-between">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
                            </div>
                            <p class="text-18 white"><strong>Developer</strong> <span class="light-blu">Plan</span>
                            </p>
                        </div>

                        <div class="col-full flex gap-20 align-bottom">
                            <div class="col-x">
                                <p class="white text-42">All DAO Features</p>
                            </div>
                            <div class="col-full text-right">
                                <div class="flex align-center justify-right">
                                    <img class="hypha-cur"
                                        src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                                    <span class="title-56 white">5</span>
                                </div>
                                <p class="text-14 light-blu">Min. Hypha Token Staked in DAO treasury, <br /><span
                                        class="white">Per each DAO member</span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </section>
    <section class="builder-pricing">
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/news.svg" />
                    </div>

                    <p class="subtitle">Get Started Today</p>
                </div>
                <p class="title-big">Get Started</p>
                <p class="text-24 light-blu">Get in touch with us to share your project vision and activate the
                    Developer plan
                </p>
                <p>In order to maintain a healthy ecosystem of developers we decided to go for a IRL chat with you
                    or your DEV group, prior to the unlocking of the Developer DAO. so that we can align and offer
                    all the support required.</p>

            </div>

            <div class="col-half">
                <div class="form-wrap glow-back">
                    <div class="wrappo">
                        <form autocomplete="false" role="form" method="post" action="https://mautic.hypha.earth/form/submit?formId=15" id="mauticform_hyphalabdevelopers" data-mautic-form="hyphalabdevelopers" enctype="multipart/form-data">
                            <div class="mauticform-error" id="mauticform_15_error"></div>
                            <div class="mauticform-message" id="mauticform_hyphalabdevelopers_message"></div>
                            <div class="mauticform-innerform">

                                <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                                    <div id="mauticform_hyphalabdevelopers_email" data-validate="email" data-validation-type="email" class="wrap-area full">
                                        <label id="mauticform_label_hyphalabdevelopers_email" for="mauticform_input_hyphalabdevelopers_email" class="mauticform-label">Email</label>
                                        <input id="mauticform_input_hyphalabdevelopers_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_hyphalabdevelopers_first_name" data-validate="first_name" data-validation-type="text" class="wrap-area half">
                                        <label id="mauticform_label_hyphalabdevelopers_first_name" for="mauticform_input_hyphalabdevelopers_first_name" class="mauticform-label">First name</label>
                                        <input id="mauticform_input_hyphalabdevelopers_first_name" name="mauticform[first_name]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_hyphalabdevelopers_last_name" data-validate="last_name"
                                        data-validation-type="text" class="wrap-area half">
                                        <label id="mauticform_label_hyphalabdevelopers_last_name" for="mauticform_input_hyphalabdevelopers_last_name" class="mauticform-label">Last Name</label>
                                        <input id="mauticform_input_hyphalabdevelopers_last_name" name="mauticform[last_name]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>



                                    <div id="mauticform_hyphalabdevelopers_your_full_message" data-validate="your_full_message" data-validation-type="textarea" class="wrap-area full">
                                        <label id="mauticform_label_hyphalabdevelopers_your_full_message" for="mauticform_input_hyphalabdevelopers_your_full_message" class="mauticform-label">Your Full Message</label>
                                        <textarea id="mauticform_input_hyphalabdevelopers_your_full_message" name="mauticform[your_full_message]" rows="4" class="mauticform-textarea"></textarea>
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>



                                    <div id="mauticform_hyphalabdevelopers_privacy_consent" data-validate="privacy_consent" data-validation-type="checkboxgrp" class="wrap-area half">
                                        <div class="mauticform-checkboxgrp-row flex"> <input class="mauticform-checkboxgrp-checkbox" name="mauticform[privacy_consent][]" id="mauticform_checkboxgrp_checkbox_privacy_consent_Agree0" type="checkbox" value="Agree">
                                            <span class="text-12">By submitting this form you agree to our <a href="<?php echo home_url(); ?>/privacy-policy/" target="_blank" class="light-blu">Privacy Policy</a></span>
                                        </div>
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>


                                    <div id="mauticform_hyphalabdevelopers_submit" class="wrap-area half">

                                        <button type="submit" name="mauticform[submit]" id="mauticform_input_hyphalabdevelopers_submit" value="" class="mauticform-button btn btn-default">Submit</button>

                                    </div>


                                </div>

                                <input type="hidden" name="mauticform[formId]" id="mauticform_hyphalabdevelopers_id" value="15">
                                <input type="hidden" name="mauticform[return]" id="mauticform_hyphalabdevelopers_return" value="">
                                <input type="hidden" name="mauticform[formName]" id="mauticform_hyphalabdevelopers_name" value="hyphalabdevelopers">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="upsell">
        <?php 
               // include ('incl/pricing-upsell.html') ;
            ?>

    </section> -->



</main>


<?php get_footer(); ?>