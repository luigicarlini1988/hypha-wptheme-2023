<?php
/**
 * Template Name: eartwise-form
 *
 */

 get_header();
 ?>

<main id="lead-capture">

    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>

    <section id="lead-area">

        <div class="lead-sidebar">
            <div class="bread_crumb"><a href="<?php echo home_url(); ?>">Home > </a> Heartwise Form </div>
            <div class="ps-center">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content();?></p>
            </div>

        </div>

        <div class="form-area">
            <div class="form-wrapper new-beta">


                <div id="mauticform_wrapper_betatestworkinprogress" class="mauticform_wrapper">
                    <form autocomplete="false" role="form" method="post"
                        action="https://mautic.hypha.earth/form/submit?formId=5" id="mauticform_betaearthwise"
                        data-mautic-form="betaearthwise" enctype="multipart/form-data">
                        <div class="mauticform-error" id="mauticform_betaearthwise_error"></div>
                        <div class="mauticform-message" id="mauticform_betaearthwise_message"></div>
                        <div class="mauticform-innerform">

                            <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">
                                <div class="mautic_custom_titles">
                                    About You
                                </div>
                                <div id="mauticform_betaearthwise_email" data-validate="email"
                                    data-validation-type="email"
                                    class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">
                                    <label id="mauticform_label_betaearthwise_email"
                                        for="mauticform_input_betaearthwise_email"
                                        class="mauticform-label">Email</label>
                                    <input id="mauticform_input_betaearthwise_email" name="mauticform[email]" value=""
                                        class="mauticform-input" type="email">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_betaearthwise_first_name" data-validate="first_name"
                                    data-validation-type="text"
                                    class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">
                                    <label id="mauticform_label_betaearthwise_first_name"
                                        for="mauticform_input_betaearthwise_first_name" class="mauticform-label">First
                                        Name</label>
                                    <input id="mauticform_input_betaearthwise_first_name" name="mauticform[first_name]"
                                        value="" class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_betaearthwise_last_name" data-validate="last_name"
                                    data-validation-type="text"
                                    class="mauticform-row mauticform-text mauticform-field-3 mauticform-required">
                                    <label id="mauticform_label_betaearthwise_last_name"
                                        for="mauticform_input_betaearthwise_last_name" class="mauticform-label">Last
                                        Name</label>
                                    <input id="mauticform_input_betaearthwise_last_name" name="mauticform[last_name]"
                                        value="" class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div class="mautic_custom_titles">
                                    About Your Organisation
                                </div>

                                <div id="mauticform_betaearthwise_organisation_name" data-validate="organisation_name"
                                    data-validation-type="text"
                                    class="half-row  mauticform-row mauticform-text mauticform-field-4 mauticform-required">
                                    <label id="mauticform_label_betaearthwise_organisation_name"
                                        for="mauticform_input_betaearthwise_organisation_name"
                                        class="mauticform-label">Organisation Name</label>
                                    <input id="mauticform_input_betaearthwise_organisation_name"
                                        name="mauticform[organisation_name]" value="" class="mauticform-input"
                                        type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_betaearthwise_organisation_website"
                                    class="half-row  mauticform-row mauticform-url mauticform-field-5">
                                    <label id="mauticform_label_betaearthwise_organisation_website"
                                        for="mauticform_input_betaearthwise_organisation_website"
                                        class="mauticform-label">Organisation Website</label>
                                    <input id="mauticform_input_betaearthwise_organisation_website"
                                        name="mauticform[organisation_website]" value="" class="mauticform-input"
                                        type="url">
                                    <span class="mauticform-errormsg" style="display: none;"></span>
                                </div>

                                <div id="mauticform_betaearthwise_organisation_purpose"
                                    class="full-row mauticform-row mauticform-text mauticform-field-6">
                                    <label id="mauticform_label_betaearthwise_organisation_purpose"
                                        for="mauticform_input_betaearthwise_organisation_purpose"
                                        class="mauticform-label">Organisation Purpose</label>
                                    <textarea id="mauticform_input_betaearthwise_organisation_purpose"
                                        name="mauticform[organisation_purpose]" class="mauticform-textarea"></textarea>
                                    <span class="mauticform-errormsg" style="display: none;"></span>
                                </div>

                                <div id="mauticform_betaearthwise_what_is_5_times_4" data-validate="what_is_5_times_4"
                                    data-validation-type="captcha"
                                    class="half-row mauticform-row mauticform-text mauticform-field-7 mauticform-required">
                                    <label id="mauticform_label_betaearthwise_what_is_5_times_4"
                                        for="mauticform_input_betaearthwise_what_is_5_times_4"
                                        class="mauticform-label">what is 5 times 4?</label>
                                    <input id="mauticform_input_betaearthwise_what_is_5_times_4"
                                        name="mauticform[what_is_5_times_4]" value=""
                                        placeholder="Please verify you are human by replying to this question"
                                        class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_betaearthwise_submit"
                                    class="half-row mauticform-row mauticform-button-wrapper mauticform-field-8">
                                    <button type="submit" name="mauticform[submit]"
                                        id="mauticform_input_betaearthwise_submit" value=""
                                        class="mauticform-button btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="mauticform[formId]" id="mauticform_betaearthwise_id" value="5">
                        <input type="hidden" name="mauticform[return]" id="mauticform_betaearthwise_return" value="">
                        <input type="hidden" name="mauticform[formName]" id="mauticform_betaearthwise_name"
                            value="betaearthwise">

                    </form>
                </div>



            </div>
        </div>

    </section>



    <?php endwhile; ?>
    <?php endif;  ?>



    <?php get_footer(); ?>