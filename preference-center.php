<?php
/**
 * Template Name: preference-center
 *
 */

 get_header();
 ?>


<main id="newsletter-page">
    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>




    <section id="newsletter-page-header">
        <div class="top-nl-logos">
            <!-- <img class="rl" src="https://mautic.hypha.earth/media/files/5fd70d239db9c80fef1c176bdd32e36d06a5ff84.png">-->
            <img class="tl" src="https://mautic.hypha.earth/media/files/2a0151561f60e8bda496d99f3ce5597c25d37f22.png">
            <p class="prefcenter">Preference Center</p>
        </div>
    </section>

    <section id="pref-space">
        <div id="preference-center-mautic">
            <div class="pcm-top">
                <h2 class="titoletto">Opt-in</h2>
                <p class="fake-title">Subscribe to <br />Hypha’s Newsletter</p>
                <p class="disclaimer">Be the first to receive announcements regarding Hypha’s ecosystem! By subscribing,
                    you will receive important announcements and monthly updates from the Hypha DAO team.</p>
            </div>

            <div id="form-wrap">
                <form autocomplete="false" role="form" method="post"
                    action="https://mautic.hypha.earth/form/submit?formId=2" id="mauticform_hyphawebsite"
                    data-mautic-form="hyphawebsite" enctype="multipart/form-data">
                    <div class="mauticform-error" id="mauticform_hyphawebsite_error"></div>
                    <div class="mauticform-message" id="mauticform_hyphawebsite_message"></div>
                    <div class="mauticform-innerform">

                        <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">
                            <div class="form-line1">
                                <div id="mauticform_hyphawebsite_email" data-validate="email"
                                    data-validation-type="email"
                                    class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">

                                    <input id="mauticform_input_hyphawebsite_email" name="mauticform[email]" value=""
                                        placeholder="Email" class="mauticform-input" type="email">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_hyphawebsite_first_name" data-validate="first_name"
                                    data-validation-type="text"
                                    class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">

                                    <input id="mauticform_input_hyphawebsite_first_name" name="mauticform[first_name]"
                                        value="" placeholder="First Name" class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_hyphawebsite_last_name" data-validate="last_name"
                                    data-validation-type="text"
                                    class="mauticform-row mauticform-text mauticform-field-3 mauticform-required">

                                    <input id="mauticform_input_hyphawebsite_last_name" name="mauticform[last_name]"
                                        value="" placeholder="Last Name" class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_hyphawebsite_what_is_5_times_4" data-validate="what_is_5_times_4"
                                    data-validation-type="captcha"
                                    class="mauticform-row mauticform-text mauticform-field-4 mauticform-required">

                                    <input id="mauticform_input_hyphawebsite_what_is_5_times_4"
                                        name="mauticform[what_is_5_times_4]" value="" placeholder="what is 5 times 4?"
                                        class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>
                            </div>

                            <div class="form-line2">

                                <div id="mauticform_hyphawebsite_privacy_and_terms" data-validate="privacy_and_terms"
                                    data-validation-type="checkboxgrp"
                                    class="mauticform-row mauticform-checkboxgrp mauticform-field-5 mauticform-required">
                                    <label class="mauticform-label"
                                        for="mauticform_checkboxgrp_checkbox_privacy_and_terms_Iagreetothetermsandconditions1"><b>Privacy
                                            Policy, Terms and conditions</b></label>
                                    <div class="flexer">
                                        <div class="mauticform-checkboxgrp-row"> <input
                                                class="mauticform-checkboxgrp-checkbox"
                                                name="mauticform[privacy_and_terms][]"
                                                id="mauticform_checkboxgrp_checkbox_privacy_and_terms_00"
                                                type="checkbox" value="0">
                                            <label id="mauticform_checkboxgrp_label_privacy_and_terms_00"
                                                for="mauticform_checkboxgrp_checkbox_privacy_and_terms_00"
                                                class="mauticform-checkboxgrp-label">I have read and I agree to the <a
                                                    href="terms-of-services">terms and conditions</a></label>
                                        </div>
                                        <div class="mauticform-checkboxgrp-row"> <input
                                                class="mauticform-checkboxgrp-checkbox"
                                                name="mauticform[privacy_and_terms][]"
                                                id="mauticform_checkboxgrp_checkbox_privacy_and_terms_11"
                                                type="checkbox" value="1">
                                            <label id="mauticform_checkboxgrp_label_privacy_and_terms_11"
                                                for="mauticform_checkboxgrp_checkbox_privacy_and_terms_11"
                                                class="mauticform-checkboxgrp-label">I have read and I agree to the <a
                                                    href="privacy-policy">privacy policy</a></label>
                                        </div>
                                    </div>
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_hyphawebsite_submit"
                                    class="mauticform-row mauticform-button-wrapper mauticform-field-6">
                                    <button type="submit" name="mauticform[submit]"
                                        id="mauticform_input_hyphawebsite_submit" value=""
                                        class="mauticform-button btn btn-default">Subscribe me!</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="mauticform[formId]" id="mauticform_hyphawebsite_id" value="2">
                    <input type="hidden" name="mauticform[return]" id="mauticform_hyphawebsite_return" value="">
                    <input type="hidden" name="mauticform[formName]" id="mauticform_hyphawebsite_name"
                        value="hyphawebsite">

                </form>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
    <?php endif;  ?>


    <?php get_footer(); ?>