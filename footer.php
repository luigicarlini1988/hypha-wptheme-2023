<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer class="site-footer">
    <div class="foglio">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>

        <div class="bottom-foot">
            <div class="foot-log"><img src="<?php echo get_template_directory_uri(); ?>/img/hypha-logo-dark.svg" />
            </div>
            <p class="credits">All content is licensed under a creative commons attribution sharealike 4.0 Hypha</p>
            <a href="https://discord.gg/NsPQAjH9Jw" target="_blank">
                <div class="discord-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.08 14.44">
                        <defs></defs>
                        <title>Path 23</title>
                        <g id="Livello_2" data-name="Livello 2">
                            <g id="Livello_1-2" data-name="Livello 1">
                                <path id="Path_23" data-name="Path 23" class="cls-1"
                                    d="M12.77,0l-.24.28a11.44,11.44,0,0,1,4.28,2.18A14.1,14.1,0,0,0,11.63.81a14.39,14.39,0,0,0-3.47,0,1.45,1.45,0,0,0-.29,0A12.86,12.86,0,0,0,4,2c-.64.29-1,.5-1,.5A11.59,11.59,0,0,1,7.48.21L7.3,0A8.55,8.55,0,0,0,2.48,1.8,23,23,0,0,0,0,11.82a6.21,6.21,0,0,0,5.24,2.61S5.88,13.66,6.4,13a5.34,5.34,0,0,1-3-2,5.51,5.51,0,0,0,.48.29.18.18,0,0,0,.07.05l.15.09A10.21,10.21,0,0,0,5.35,12a14,14,0,0,0,2.52.74,11.94,11.94,0,0,0,4.46,0A11.49,11.49,0,0,0,14.82,12a10,10,0,0,0,2-1,5.47,5.47,0,0,1-3.12,2c.52.65,1.14,1.39,1.14,1.39a6.25,6.25,0,0,0,5.26-2.61,23,23,0,0,0-2.48-10A8.41,8.41,0,0,0,12.77,0ZM6.82,10.23A1.84,1.84,0,0,1,5.07,8.32,1.83,1.83,0,0,1,6.82,6.41h0A1.82,1.82,0,0,1,8.58,8.29v0a1.82,1.82,0,0,1-1.74,1.91Zm6.28,0a1.85,1.85,0,0,1-1.76-1.91,1.83,1.83,0,0,1,1.75-1.91h0a1.83,1.83,0,0,1,1.75,1.91h0a1.84,1.84,0,0,1-1.75,1.91Z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <?php if( is_page_template('custom-home.php') ) :?>
    <script type="text/javascript">
    if (sessionStorage.getItem('hidepopup') == "true") {
        document.getElementById("pop-up").classList.toggle("gone")
    }

    function fcnx1() {
        document.getElementById("pop-up").classList.toggle("hide");
        sessionStorage.setItem('hidepopup', "true");
    }

    function fcnx2() {
        document.getElementById("pop-up").classList.toggle("gone");
    }
    </script>
    <?php endif;?>
</footer><!-- #colophon .site-footer -->

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

</body>

</html>