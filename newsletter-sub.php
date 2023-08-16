<?php
/**
 * Template Name: Newsletter Subscription
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="generic-hero lead">
        <div class="generic-hero-back"></div>
        <div class="area flex gap-50 align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-half">

                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/message.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <p class="subtitle">Keep in Touch</p>
                    </div>
                </div>


                <h1 class="title-big">
                    Subscribe to<br /> Our Newsletter
                </h1>
                <p class="text-20 light-blu">
                    <?php the_field('header_subtitle_blu'); ?>
                </p>

            </div>

            <div class="col-half">
                <div class="form-wrap glow-back">
                    <div class="wrappo">

                        <form autocomplete="false" role="form" method="post" action="https://mautic.hypha.earth/form/submit?formId=9" id="mauticform_newslettersignup2023" data-mautic-form="newslettersignup2023" enctype="multipart/form-data">
                            <div class="mauticform-error" id="mauticform_newslettersignup2023_error"></div>
                            <div class="mauticform-message" id="mauticform_newslettersignup2023_message"></div>
                            <div class="mauticform-innerform">

                                <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                                    <div id="mauticform_newslettersignup2023_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-1 mauticform-required wrap-area full">
                                        <label id="mauticform_label_newslettersignup2023_email" for="mauticform_input_newslettersignup2023_email" class="mauticform-label">Email</label>
                                        <input id="mauticform_input_newslettersignup2023_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_newslettersignup2023_first_name" data-validate="first_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-2 mauticform-required wrap-area half">
                                        <label id="mauticform_label_newslettersignup2023_first_name" for="mauticform_input_newslettersignup2023_first_name" class="mauticform-label">First name</label>
                                        <input id="mauticform_input_newslettersignup2023_first_name" name="mauticform[first_name]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_newslettersignup2023_last_name" data-validate="last_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-3 mauticform-required wrap-area half">
                                        <label id="mauticform_label_newslettersignup2023_last_name" for="mauticform_input_newslettersignup2023_last_name" class="mauticform-label">Last Name</label>
                                        <input id="mauticform_input_newslettersignup2023_last_name" name="mauticform[last_name]" value="" class="mauticform-input" type="text">
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>



                                    <div id="mauticform_newslettersignup2023_privacy_consent" data-validate="privacy_consent" data-validation-type="checkboxgrp" class="wrap-area half">

                                        <div class="mauticform-checkboxgrp-row flex"> <input class="mauticform-checkboxgrp-checkbox" name="mauticform[privacy_consent][]" id="mauticform_checkboxgrp_checkbox_privacy_consent_Agree0" type="checkbox" value="Agree">
                                            <span class="text-12">By submitting this form you agree to our <a href="<?php echo home_url(); ?>/privacy-policy/" target="_blank" class="light-blu">Privacy Policy</a></span>
                                        </div>
                                        <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                    </div>

                                    <div id="mauticform_newslettersignup2023_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-4 wrap-area half">
                                        <button type="submit" name="mauticform[submit]" id="mauticform_input_newslettersignup2023_submit" value="" class="mauticform-button btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="mauticform[formId]" id="mauticform_newslettersignup2023_id" value="9">
                            <input type="hidden" name="mauticform[return]" id="mauticform_newslettersignup2023_return" value="">
                            <input type="hidden" name="mauticform[formName]" id="mauticform_newslettersignup2023_name" value="newslettersignup2023">

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>


</main>


<?php get_footer(); ?>