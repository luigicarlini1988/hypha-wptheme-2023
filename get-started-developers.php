<?php
/**
 * Template Name: Get Started Developers
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero">
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
            <div class="get-start-icon-case">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dev.svg" />
            </div>
            <div class="col-9">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                    </div>

                    <div class="breadcrumbs">
                        <a href="<?php echo home_url(); ?>/get-started/">Get Started</a> > <?php the_title();  ?>
                    </div>
                </div>
                <h1 class="title-giga"><?php the_title();  ?></h1>
                <div class="text-20 light-blu"><?php the_content();  ?></div>

                <div class="buttons gap-20 flex">
                    <a href="#begin" class="button primary">Let's begin</a>
                </div>
            </div>
        </div>
    </section>

    <section class="get-steps">
        <div class="area flex">

            <div id="begin" class="steps">
                <div class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step1" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 1 > <span class="white">Get In touch</span></p>
                        </div>
                        <p class="title-medium">Let's get to know each other better</p>

                        <p>Skip the fees and stake 5 Hypha Tokens per member – a great deal! After we get acquainted,
                            we'll
                            fast-track you to the Developer Plan. For now, start with a free plan and witness your
                            vision come to life!</p>

                        <a href="#inside-anchor-2" class="no-resp button secondary">Next Step</a>
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

                <div id="inside-anchor-2" class="get-step flex gap-50 align-center">
                    <div class="col-half">
                        <div id="step2" class="sub-section flex align-center">
                            <div class="icon small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                            </div>

                            <p class="subtitle">Step 2</p>
                        </div>
                        <p class="title-medium">Create your DAO</p>
                        <div class="get-image-resp flex align-center justify-center">
                            <div class="full-screen-dao">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />
                            </div>
                        </div>
                        <p>The process is exactly the same as per any other DAO, what will change, is that instead
                            of paying a fee, you will just need to stake 5 hypha per each of your DAO members.
                            Pretty neat ah?! Once we get to know each other we will grant you permission to activate
                            the Developer Plan. In the meantime, you can sart by creating a normal DAO on the free
                            plan</p>
                        <div class="buttons flex gap-20 wrap">
                            <a href="<?php echo home_url(); ?>/get-started/create-your-dao/" class="button primary">Create Your DAO</a>
                            <a href="#pricing" class="button secondary">Pricing Plans</a>
                        </div>

                    </div>
                    <div class="col-half flex  justify-center">
                        <div class="no-resp dao-outline-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/features/DAO-outline.png" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="steps-counter">
                <div class="counting">
                    <div id="step1-counter" class="stp">1</div>
                    <div id="step2-counter" class="stp">2</div>
                </div>
            </div>

        </div>

    </section>

    <section id="pricing" class="get-pricing">
        <?php 
                include ('incl/pricing-cards.html') ;
            ?>
    </section>


</main>


<?php get_footer(); ?>