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
                    <li><a href="#">Features</a>

                        <ul>
                            <li><a href="#">Shape Your DAO</a></li>
                            <li><a href="#">Templates</a></li>
                            <li><a href="#">Circles</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">Roles</a></li>
                            <li><a href="#">Salaries</a></li>
                            <li><a href="#">DAO Launcher</a></li>
                            <li><a href="#">Voting</a></li>
                            <li><a href="#">Ecosystem Launcher</a></li>
                        </ul>

                        <ul>
                            <li><a href="#">Shape Your DAO</a></li>
                            <li><a href="#">Templates</a></li>
                            <li><a href="#">Circles</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">Roles</a></li>
                            <li><a href="#">Salaries</a></li>
                            <li><a href="#">DAO Launcher</a></li>
                            <li><a href="#">Voting</a></li>
                            <li><a href="#">Ecosystem Launcher</a></li>
                        </ul>

                        <ul>
                            <li><a href="#">Shape Your DAO</a></li>
                            <li><a href="#">Templates</a></li>
                            <li><a href="#">Circles</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">Roles</a></li>
                            <li><a href="#">Salaries</a></li>
                            <li><a href="#">DAO Launcher</a></li>
                            <li><a href="#">Voting</a></li>
                            <li><a href="#">Ecosystem Launcher</a></li>
                        </ul>

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
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt </p>
            </div>
            <div class="col-8">
                <form>
                    <div class="mauticform-row">
                        <label>Email*</label>
                        <input type="email" />
                    </div>
                    <div class="mauticform-row">
                        <label>Name*</label>
                        <input type="email" />
                    </div>
                    <div class="mauticform-row">
                        <button type="submit" class="mauticform-button">Submit</button>
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
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt </p>
            </div>

            <div class="col-8 has-social flex gap-20">
                <div class="col-full">
                    <a class="fot-soc white text-22" href="#">Twitter <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" /></a>
                    <p>twitter.com/hyphaDAO</p>
                </div>
                <div class="col-full">
                    <a class="fot-soc white text-22" href="#">Linkedin <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" /></a>
                    <p>twitter.com/hyphaDAO</p>
                </div>
                <div class="col-full">
                    <a class="fot-soc white text-22" href="#">Discord <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/discord.svg" /> </a>
                    <p>twitter.com/hyphaDAO</p>
                </div>
                <div class="col-full">
                    <a class="fot-soc white text-22" href="#">Medium <img
                            src="<?php echo get_template_directory_uri(); ?>/img/icons/medium.svg" /></a>
                    <p>twitter.com/hyphaDAO</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="flex gap-20">
                <p>HyphaDAO®, Address 123, City Hereaswell. Social Capital $ 1,230,000.00</p>
                <a href="#">Sitemap XML</a>
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
<?php if( is_page_template('home-template.php') || is_singular( 'feature') || is_page_template('features-category-shape.php')  || is_page_template('features-category-engage.php') || is_page_template('features-category-distribute.php') || is_page_template('features-aggregative.php') || is_page_template('about-us.php') ) :?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3-10-1-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.navigation.js"></script>
<?php endif;?>

<!-- DAO Carousel / HOME-->
<?php if( is_page_template('home-template.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/daoscarousel.js"></script>
<?php endif;?>

<!-- Testimonaial carousel / HOME -->
<?php if( is_page_template('home-template.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/testimonialscarousel.js"></script>
<?php endif;?>

<!-- about-us carousel / HOME -->
<?php if( is_page_template('about-us.php') ) :?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/timeline-carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/testimonialscarousel.js"></script>
<?php endif;?>


<!-- Global Animations Js / News / pricing plans / education / archives / Group (CPT Category) / About us -->
<?php if( is_page_template('hypha-news.php')  || is_page_template('generic-page.php') || is_page_template('get-started.php')  || is_page_template('hypha-education.php') || is_post_type_archive('educational')  || is_tax('section')  || is_category() || is_home() || is_single() || is_page_template('pricing-plans.php') || is_page_template('pricing-dao-builder.php') || is_page_template('pricing-ecosystem-builder.php') || is_page_template('pricing-developer.php') || is_tax('group') || is_page_template('features-category-shape.php')  || is_page_template('features-category-engage.php') || is_page_template('features-category-distribute.php') || is_page_template('features-aggregative.php') || is_page_template('about-us.php')  ) :?>
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






<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

</body>

</html>