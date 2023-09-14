<?php ?>

<footer>
    <div class="area">
        <div class="footer-nav-1">
            <div class="icon small">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/home.svg" loading="lazy" />
            </div>
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>
            </nav>
        </div>

        <div class="footer-nav-2">
            <div class="icon small">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/features.svg" loading="lazy" />
            </div>

            <nav>
                <ul>
                    <li><a href="<?php echo home_url(); ?>/features/">Features</a>

                        <?php wp_nav_menu( array( 'theme_location' => 'shapedao-features-menu' ) ); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'members-features-menu' ) ); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'reward-features-menu' ) ); ?>

                    </li>
                </ul>





            </nav>
        </div>

        <div class="footer-newsletter flex gap-20">
            <div class="icon small">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/message.svg" loading="lazy" />
            </div>
            <div class="col-4">
                <p class="text-22 white">Subscribe to our Newsletter</p>
                <p class="no-margin-bottom">Get exclusive access to Hypha’s latest news and announcements as a Hypha
                    Insider.
                    Subscribe now and
                    stay ahead of the curve.</p>
            </div>
            <div class="col-8">
                <form autocomplete="false" role="form" method="post"
                    action="https://mautic.hypha.earth/form/submit?formId=9" id="mauticform_newslettersignup2023"
                    data-mautic-form="newslettersignup2023" enctype="multipart/form-data">
                    <div class="mauticform-error" id="mauticform_newslettersignup2023_error"></div>
                    <div class="mauticform-message" id="mauticform_newslettersignup2023_message"></div>
                    <div class="mauticform-innerform">
                        <div class="pre-button">
                            <div class="pre-checkbox">
                                <div id="mauticform_newslettersignup2023_email" data-validate="email"
                                    data-validation-type="email"
                                    class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">
                                    <label id="mauticform_label_newslettersignup2023_email"
                                        for="mauticform_input_newslettersignup2023_email" class="mauticform-label">Email</label>
                                    <input id="mauticform_input_newslettersignup2023_email" name="mauticform[email]" value=""
                                        class="mauticform-input" type="email">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_newslettersignup2023_first_name" data-validate="first_name"
                                    data-validation-type="text"
                                    class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">
                                    <label id="mauticform_label_newslettersignup2023_first_name"
                                        for="mauticform_input_newslettersignup2023_first_name" class="mauticform-label">First
                                        name</label>
                                    <input id="mauticform_input_newslettersignup2023_first_name" name="mauticform[first_name]"
                                        value="" class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>

                                <div id="mauticform_newslettersignup2023_last_name" data-validate="last_name"
                                    data-validation-type="text"
                                    class="mauticform-row mauticform-text mauticform-field-3 mauticform-required">
                                    <label id="mauticform_label_newslettersignup2023_last_name"
                                        for="mauticform_input_newslettersignup2023_last_name" class="mauticform-label">Last
                                        Name</label>
                                    <input id="mauticform_input_newslettersignup2023_last_name" name="mauticform[last_name]"
                                        value="" class="mauticform-input" type="text">
                                    <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                                </div>
                            </div>

                            <div id="mauticform_newslettersignup2023_privacy_consent" data-validate="privacy_consent" data-validation-type="checkboxgrp" class="wrap-area full checkbo">

                                <div class="mauticform-checkboxgrp-row flex"> <input class="mauticform-checkboxgrp-checkbox" name="mauticform[privacy_consent][]" id="mauticform_checkboxgrp_checkbox_privacy_consent_Agree0" type="checkbox" value="Agree">
                                    <span class="text-12">By submitting this form you agree to our <a href="<?php echo home_url(); ?>/privacy-policy/" target="_blank" class="light-blu">Privacy Policy</a></span>
                                </div>
                                <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                            </div>
                        </div>

                        <div class="mauticform-row">
                            <button type="submit" name="mauticform[submit]"
                                id="mauticform_input_newslettersignup2023_submit" value=""
                                class="mauticform-button btn btn-default">Submit</button>
                        </div>

                        <input type="hidden" name="mauticform[formId]" id="mauticform_newslettersignup2023_id"
                            value="9">
                        <input type="hidden" name="mauticform[return]" id="mauticform_newslettersignup2023_return"
                            value="">
                        <input type="hidden" name="mauticform[formName]" id="mauticform_newslettersignup2023_name"
                            value="newslettersignup2023">
                    </div>
                </form>

            </div>

        </div>

        <div class="footer-social flex gap-20">
            <div class="icon small">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/community.svg" loading="lazy" />
            </div>
            <div class="col-4">
                <p class="text-22 white">Follow us on our socials</p>
                <p>DAO-ify your social media feeds with educational content, exciting events, and more</p>
            </div>

            <div class="col-8 has-social flex gap-20">
                <div class="col-full">
                    <a class="fot-soc white text-22" href="https://x.com/HyphaDAO" target="_blank">Twitter <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/x-logo.svg" /></a>
                    <p>twitter.com/hyphaDAO</p>
                </div>
                <div class="col-full">
                    <a class="fot-soc white text-22" href="https://www.linkedin.com/company/hypha-dao/" target="_blank">Linkedin <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" /></a>
                    <p>linkedin.com/company/hypha-dao/</p>
                </div>
                <div class="col-full">
                    <a class="fot-soc white text-22" href="https://discord.com/invite/NsPQAjH9Jw" target="_blank">Discord <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/discord.svg" /> </a>
                    <p>discord.com/invite/NsPQAjH9Jw</p>
                </div>
                <div class="col-full">
                    <a class="fot-soc white text-22" href="https://medium.com/hyphadao" target="_blank">Medium <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/medium.svg" /></a>
                    <p>medium.com/hyphadao</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="flex gap-20">
                <p>Hypha Genossenschaft, Birkenweg 6, 9490, Vaduz Liechtenstein.</p>
                <!--<a href="#">Sitemap XML</a>-->
            </div>

            <img class="foot-logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
        </div>
    </div>
</footer>

<!-- HOME Js -->
<?php if( is_page_template('home-template.php') ) :?>
<script src="<?php echo get_template_directory_uri(); ?>/js/home-features-animations.js" type="text/javascript">
</script>
<?php endif;?>




<!-- carousel JS / HOME / Feature CPT - Group - About Us -->
<?php if( is_page_template('home-template.php') || is_singular( 'feature') || is_page_template('features-category-shape.php')  || is_page_template('features-category-engage.php') || is_page_template('features-category-distribute.php') || is_page_template('features-aggregative.php') || is_page_template('about-us.php') || is_singular( 'usecase' ) || is_singular( 'service')  ) :?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3-10-1-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.navigation.js"></script>
<?php endif;?>

<!-- DAO Carousel / HOME-->
<?php if( is_page_template('home-template.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/daoscarousel.js"></script>
<?php endif;?>

<!-- Testimonaial carousel / HOME / use case CPT / services -->
<?php if( is_page_template('home-template.php') || is_singular( 'usecase' ) || is_singular( 'service') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/testimonialscarousel.js"></script>
<?php endif;?>

<!-- about-us carousel / HOME -->
<?php if( is_page_template('about-us.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/timeline-carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/teamcarousel.js"></script>
<?php endif;?>


<!-- Global Animations Js / News / pricing plans / education / archives / Group (CPT Category) / About us / Use Cases aggregative -->
<?php if( is_page_template('hypha-news.php')  
|| is_page_template('generic-page.php')
|| is_page_template('redirect-post-beta.php')
|| is_page_template('lead-form.php') 
|| is_page_template('newsletter-sub.php') 
|| is_page_template('get-started.php')  
|| is_page_template('hypha-education.php') 
|| is_post_type_archive('educational')  
|| is_tax('section')  
|| is_category() 
|| is_home() 
|| is_single() 
|| is_page_template('pricing-plans.php') 
|| is_page_template('pricing-dao-builder.php') 
|| is_page_template('pricing-ecosystem-builder.php') 
|| is_page_template('pricing-developer.php') 
|| is_tax('group') 
|| is_page_template('features-category-shape.php')  
|| is_page_template('features-category-engage.php') 
|| is_page_template('features-category-distribute.php') 
|| is_page_template('features-aggregative.php') 
|| is_page_template('about-us.php') 
|| is_page_template('use-cases.php')
|| is_page_template('hyphalab.php')
|| is_page_template('pdf-page-template.php')
|| is_singular( 'service') 
|| is_page_template('services-aggregative.php')  ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/global-animations.js"></script>
<?php endif;?>

<!-- DAO builder Js -->
<?php if( is_page_template('pricing-dao-builder.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/dao-builder.js"></script>
<?php endif;?>

<!-- Ecosystem builder Js -->
<?php if( is_page_template('pricing-ecosystem-builder.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ecosystem-builder.js"></script>
<?php endif;?>

<!-- Get Started ACCOUNT Js -->
<?php if( is_page_template('get-started-account.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/get-started-account.js"></script>
<?php endif;?>


<!-- Get Started CREATE DAO Js -->
<?php if( is_page_template('get-started-create.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/get-started-create.js"></script>
<?php endif;?>

<!-- Get Started DEVELOPER Js -->
<?php if( is_page_template('get-started-developers.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/get-started-dev.js"></script>
<?php endif;?>

<!-- Get Started JOIN Js -->
<?php if( is_page_template('get-started-join.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/get-started-join.js"></script>
<?php endif;?>

<!-- Feature CPT -->
<?php if( is_singular( 'feature') || is_page_template('features-category-shape.php')  || is_page_template('features-category-engage.php') || is_page_template('features-category-distribute.php') || is_page_template('features-aggregative.php')  ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/features-carousel.js"></script>
<?php endif;?>

<!-- services -->
<?php if(is_singular( 'service') ):?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/services.js"></script>
<?php endif;?>


<!-- HOME header text animations -->
<?php if( is_page_template('home-template.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/animatext.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".anima").animatext({
        mode: "words",
        speed: 100
    });
});
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/home-text-animations.js"></script>
<?php endif;?>

<!-- animate cookie banner -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    setTimeout(() => {
        $(".cky-consent-container").addClass("in")
    }, 3000);

});
</script>

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

</body>

</html>