<?php
/**
 * Template Name: about-us
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
            <div class="get-start-icon-case about-us">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
            </div>
            <div class="col-9">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                    </div>
                    <p class="subtitle"><?php the_title(); ?></p>
                </div>
                <h1 class="title-giga"><?php the_title(); ?></h1>
                <div class="text-20 light-blu"><?php the_content(); ?></div>

                <div class="buttons gap-50 flex">
                    <a href="#about-us" class="button primary">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="area flex gap-20 align-bottom">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.svg" loading="lazy">
                    </div>

                    <h2 class="subtitle">Core Values</h2>
                </div>
                <p class="title-big">What we stand for</p>

            </div>

            <div class="col-half">
                <p class="text-20 light-blu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et </p>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="area flex gap-50">
            <div class="col-half">
                <p class="subtitle">Core Value 1</p>
                <p class="title-medium white">What is our Core val</p>
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <div class="col-half">
                <p class="subtitle">Core Value 2</p>
                <p class="title-medium white">What is our Core val</p>
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>
        <div class="area flex gap-50">
            <div class="col-half">
                <p class="subtitle">Core Value 1</p>
                <p class="title-medium white">What is our Core val</p>
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <div class="col-half">
                <p class="subtitle">Core Value 2</p>
                <p class="title-medium white">What is our Core val</p>
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>
        <div class="area flex gap-50">
            <div class="col-half">
                <p class="subtitle">Core Value 1</p>
                <p class="title-medium white">What is our Core val</p>
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <div class="col-half">
                <p class="subtitle">Core Value 2</p>
                <p class="title-medium white">What is our Core val</p>
                <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>
    </section>

    <section id="achievements">
        <div class="area  flex gap-20 align-bottom">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/time.svg" loading="lazy">
                    </div>

                    <h3 class="subtitle">Timeline</h3>
                </div>
                <p class="title-medium">Our Key Achievements</p>
            </div>
        </div>
        <div class="area">
            <div id="timeline-carousel" class="owl-carousel owl-theme">
                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain
                        payroll and governance to new primitives like quests, roles, badges, circles and more.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain
                        payroll and governance to new primitives like quests, roles, badges, circles and more.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain
                        payroll and governance to new primitives like quests, roles, badges, circles and more.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain
                        payroll and governance to new primitives like quests, roles, badges, circles and more.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain
                        payroll and governance to new primitives like quests, roles, badges, circles and more.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>We have the most advanced feature set in the burgeoning DAO industry —from fee-free on-chain
                        payroll and governance to new primitives like quests, roles, badges, circles and more.</p>
                </div>

            </div>
    </section>

    <section id="testimonials" class="dao-members">
        <div class="area  flex gap-20 align-bottom">
            <div class="col-full">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" loading="lazy">
                    </div>

                    <h3 class="subtitle">Hypha Team</h3>
                </div>
                <p class="title-medium">The Best Lorem Ispum Creators!</p>
            </div>
        </div>
        <div class="area">
            <?php $hypha_memb = get_field('hypha_members');
            if( $hypha_memb ): ?>

            <div id="testimonials-carousel" class="members-card owl-carousel owl-theme">

                <?php foreach($hypha_memb as $post ): 
                setup_postdata($post); ?>

                <div class="testimonials-card">
                    <a href="<?php the_field('linkedin_url'); ?>" target="_blank">
                        <div class="linkedin flex align-center justify-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.svg" />
                        </div>
                    </a>
                    <div class="testim-top flex align-center">
                        <img src="<?php the_field('avatar'); ?>" />
                        <div class="namespace">
                            <div class="text-20 white"><?php the_title(); ?></div>
                            <p class="light-blu"><?php the_field('job_position'); ?></p>
                        </div>
                    </div>
                    <div class="testim-text">
                        <div class="text-small"><?php the_content(); ?></div>
                    </div>
                    <div class="testim-bottom flex justify-left space-between align-center">
                        <div class="flex align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pin.svg" />
                            Location: <?php the_field('location'); ?>
                        </div>

                        <div class="flex align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/calendar.svg" />
                            Joined: <?php the_field('joined_on'); ?>
                        </div>

                    </div>
                </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            </div>

            <?php endif; ?>

        </div>
    </section>

    <section class="why-hypha">
        <div class="area flex align-center gap-50">
            <div class="col-half">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                    </div>
                    <p class="subtitle">The Mycelial</p>
                </div>
                <h1 class="title-big">Why “Hypha” ?</h1>
                <p class="text-20 ">HYPHA refers to the original Earth internet. It’s the branching
                    filaments that make up the network of the mycelium (fungal) organism, which unites healthy
                    ecosystems helping plants and animals share information and nutrition. We strive to mirror
                    natural systems for how we design DAO tools to coordinate and support thriving organisational
                    ecosystems.</p>
            </div>

            <div class="col-half">
                <div class="wrappo special-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mycelial.jpg" />
                </div>
            </div>
        </div>
    </section>


    <section class="work-with-us">
        <div class="area flex gap-50 align-center">
            <div class="col-half">
                <div id="step1" class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                    </div>

                    <p class="subtitle">Get In touch</p>
                </div>
                <p class="title-big">Work With Us</p>

                <p class="text-28 light-blu">Are you thrilled to participate to the Lorem ipsum dolor sit amet,
                    consect adipiscing elit? Drop us a message</p>
            </div>
            <div class="col-half">
                <?php 
                    include ('incl/generic-form.html') ;
                ?>
            </div>
        </div>
    </section>


</main>


<?php get_footer(); ?>