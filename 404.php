<?php get_header(); ?>

<main class="dark-theme">
    <section class="generic-hero not-found">
        <div class="generic-hero-back">
            <p class="not-fa">404</p>
        </div>
        <div class="area flex align-center">
            <div class="resp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-white.svg" />
            </div>
            <div class="col-9">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/broken-chain.svg"
                            loading="lazy" />
                    </div>

                    <p class="subtitle">Lost in the Blockchain Wilderness?</p>
                </div>
                <h1 class="title-big">You’ve Entered <br />Uncharted Territory…</h1>
                <p class="text-20">Welcome, fellow explorer! It seems you’ve ventured into uncharted
                    blockchain territory. While we appreciate your adventurous spirit, it appears we couldn’t find
                    the page you were looking for. Don’t worry; we’ll help you find your way back to the community
                    hive.</p>

                <div class="buttons gap-20 flex">
                    <a href="<?php echo home_url(); ?>" class="button secondary">BACK TO HOMEPAGE</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>