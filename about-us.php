<?php
/**
 * Template Name: About Us
 *
 */

 get_header();
 ?>

<main class="dark-theme">
    <section class="get-started-hero about-us">
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
                    <a href="#about-intro" class="button primary">Discover More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-intro">
        <div class="area flex gap-20 align-bottom">
            <div class="intro-ab-cont">
                <p>Hypha’s story is one of steadfast commitment, creative experimentation, and courageous exploration into uncharted horizons.</p>
                <p>We formed in 2019 with a deep understanding that our existing systems are breaking down and our economic and governance systems are no longer fit for purpose. We envisaged an operating system for humanity that incentivises harmony with our planet. A living system that is informed by nature. In fact the term Decentralized Autonomous Organizations isn’t the full story, it's more of a Decentralized Human Organism a DHO</p>
                <p>We started with the goal of building Seeds, an adaptable self-governed currency to incentivise regeneration of our planet. We knew we could not build the new system from the old system so we felt we had to be decentralised from the beginning. There were no tools back in 2019 to run a truly decentralised team so we built the HyphaDao to allow us to coordinate ourselves, a space for transparent secure agreements and value exchange and used it for 4 years to build the product itself. So we used the DAO to build the DAO. Think of it as building a plane while flying a plane and while not being able to see out the window. It's been a journey but we have something which is very special as a result.</p>
                <p>We envisage ourselves as the new planetary operating system, easy to use for every human focused on positive outcomes. A large-scale facilitator for the deployment of impact capital across the planet. A space where collective decision making creates the conditions for the emergence of human collective intelligence. We are accelerating into a change point and our vision is the beautiful sunrise on the other side. System change. </p>
                <p>Join us.
            </div>
        </div>
    </section>

    <section class="about-network">
        <div class="area flex gap-20 align-bottom">
            <div class="col-8">
                <div class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ecosystem.svg">
                    </div>

                    <h2 class="subtitle">Hypha Network</h2>
                </div>
                <p class="title-big">A Growing Ecosystem<br />
                    of Interconnected DAOs</p>
            </div>
        </div>
        <div class="area flex gap-20 align-bottom">
            <div class="col-4">
                <div class="generic-card glow-back network">
                    <div class="wrappo">

                        <div class="icon big">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                        </div>
                        <p class="text-62">900+</p>
                        <p class="light-blu">Members</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="generic-card glow-back network">
                    <div class="wrappo">

                        <div class="icon big">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                        </div>
                        <p class="text-62">200+</p>
                        <p class="light-blu">DAOs Enrolled</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="generic-card glow-back network">
                    <div class="wrappo">

                        <div class="icon big">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ecosystem.svg" />
                        </div>
                        <p class="text-62">5+</p>
                        <p class="light-blu">Years Building DAOs</p>
                    </div>
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

                    <h2 class="subtitle">Our Core Values</h2>
                </div>
                <p class="title-big">What we stand for</p>

            </div>

            <div class="col-half">
                <p class="text-20 light-blu">Hypha members come from diverse backgrounds, bound together by a commitment
                    to core values guiding our work, behaviors, and actions.</p>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="area flex gap-50">
            <div class="col-half">
                <p class="title-big white">Integrity</p>
                <p>Integrity empowers us to live by our moral principles to build and deploy technologies and services
                    to benefit humanity and our shared planet</p>
            </div>

            <div class="col-half">
                <p class="title-big white">Responsability</p>
                <p>Our sense of individual and collective responsibility drives how we take accountability for becoming
                    a mature and thriving organism while acting by our values.</p>
            </div>
        </div>
        <div class="area flex gap-50">
            <div class="col-half">
                <p class="title-big white">Trust</p>
                <p>Trust commits us to creating honest and empowering solutions, connecting us to the heart of humanity.
                </p>
            </div>

            <div class="col-half">
                <p class="title-big white">Transparency</p>
                <p>Being fully transparent enables us to live by what we promise and forms the DNA of our technology
                    solutions for collective thriving.</p>
            </div>
        </div>
        <div class="area flex gap-50">
            <div class="col-half">
                <p class="title-big white">Commitment</p>
                <p>Our shared commitments fuel our promise of excellence through radical transparency, diversity and
                    inclusion, responsibility, continual learning, and improvement.</p>
            </div>

            <div class="col-half">
                <p class="title-big white">Reciprocity</p>
                <p>Hypha is committed to honoring all who contribute to the value we co-create, receive, enjoy, and
                    distribute — including Nature herself.</p>
            </div>
        </div>

        <div class="area flex gap-50">
            <div class="col-half">
                <p class="title-big white">Creativity</p>
                <p>Creativity inspires us to expand and grow in consciousness by purposefully inviting diverse
                    perspectives and new horizons for learning and innovation.</p>
            </div>

            <div class="col-half">
                <p class="title-big white">Excellence</p>
                <p>We are compelled to learn, act, and evolve by taking responsibility and accountability for our
                    actions and our standards, promises, and commitments.</p>
            </div>
        </div>


        <div class="area flex gap-50 align-bottom">
            <div class="col-half">
                <div id="step1" class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart.svg" />
                    </div>

                    <p class="subtitle">Hypha Constitution</p>
                </div>
                <p class="title-medium">The only DAO with a constitution inspired by nature’s living systems</p>


            </div>
            <div class="col-half">
                <p class="text-18">Hypha aims to go beyond providing a DAO platform. We aspire to provide humanity with the
                    coordination tools needed to achieve successful, large-scale impact.</p>
                <div class="buttons">
                    <a href="<?php echo home_url(); ?>/constitution/" class="button primary">Read More</a>
                </div>
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

                    <h3 class="subtitle">Timeline of Key Achievements</h3>
                </div>
                <p class="title-medium">Our Journey Together</p>
            </div>
        </div>
        <div class="area">
            <div id="timeline-carousel" class="owl-carousel owl-theme">

                <div class="timeline-item">
                    <p class="text-20 bold white">September 2023</p>
                    <p>Hypha launches the Beta version of our DAO platform, signifying a massive signal for mainstream
                        adoption ahead.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2023</p>
                    <p>Hypha partners with <a href="https://www.digihub.li/" target="_blank">DigiHub.li</a> to bring
                        innovative DAO tools to the European Digital Innovation Hub Network <a
                            href="https://www.digihub.li/" target="_blank" rel="nofollow">DigiHub.li</a></p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">May 2023</p>
                    <p>Hypha partners with <a href="https://localscale.org/" target="_blank"
                            rel="nofollow">LocalScale</a> to improve
                        bioregional organization by allowing bioregions to self-organize as DAOs and create and manage
                        local currencies through Hypha DAO accounts.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">April 2023</p>
                    <p>Hypha opens registrations for our DAO Beta Launch, empowering teams to tackle complex challenges
                        and create solutions together at scale.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">September 2022</p>
                    <p>Hypha DAO receives a <a
                            href="https://hypha.earth/hypha-daos-organization-in-a-box-solution-receives-850k-usd-grant-from-eos-network-foundation/"
                            target="_blank" rel="nofollow">$850k USD grant</a> from <a
                            href="https://eosnetwork.com/about-us/" target="_blank" rel="nofollow">EOS Network
                            Foundation.</a> This grant fueled a powerful
                        roadmap of new advanced features and brought DAO tools to the EOS Community.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">August 2022</p>
                    <p>Hypha DAO was selected by the <a href="https://respond-accelerator.com/" target="_blank"
                            rel="nofollow">RESPOND
                            Accelerator</a>, backed by the <a href="https://bmw-foundation.org/en/" target="_blank"
                            rel="nofollow">BMW
                            Foundation</a>, to participate
                        in its 2022 Accelerator program.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">Feburary 2022</p>
                    <p>Hypha was introduced to the world with the launch of our first website. </p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">March 2020</p>
                    <p>Hypha releases its Alpha version DAO platform for the team to organize itself transparently and
                        collectively while driving engagement from its members and contributors with multi-layered
                        rewards and incentives.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">June 2020</p>
                    <p>SEEDS tokens come into existence to co-create new regenerative economies that incentivize
                        collaboration for collective well-being. </p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">2019</p>
                    <p>Hypha was born. After operating as a DAO while building SEEDS and our network, we realized that
                        our greatest value contribution to humanity is to build and deploy DAOs as a service. As such,
                        empowering humanity with the coordination and alignment tools for our collective thriving.</p>
                </div>

                <div class="timeline-item">
                    <p class="text-20 bold white">2018</p>
                    <p>Hypha’s first project was <a href="https://joinseeds.earth/" target="_blank"
                            rel="nofollow">SEEDS</a>, an initiative to co-create new token-based economic systems for
                        regenerating our planet by empowering the myriads of movements, initiatives, and organizations
                        worldwide with the tools for doing so.</p>
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
                <p class="title-medium">Meet the humans behind Hypha</p>
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
                            <?php the_field('location'); ?>
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
                    <p class="subtitle">Inspired by Nature</p>
                </div>
                <h1 class="title-big">Why the<br />Name Hypha?</h1>
                <p class="text-18">The word “Hypha” refers to the original Earth internet. The branching filaments that
                    comprise the network of the mycelium (fungal) organisms, which unite healthy ecosystems by helping
                    plants and animals share information and nutrition. We mimic natural systems across our DAO tools to
                    coordinate and support thriving organizational ecosystems.</p>
            </div>

            <div class="col-half">
                <div class="wrappo special-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mycelial.jpg" />
                </div>
            </div>
        </div>
    </section>


    <!--<section class="work-with-us">
        <div class="area flex gap-50 align-bottom">
            <div class="col-half">
                <div id="step1" class="sub-section flex align-center">
                    <div class="icon small">
                        <img src="<?php// echo get_template_directory_uri(); ?>/img/icons/rocket.svg" />
                    </div>

                    <p class="subtitle">Get In touch</p>
                </div>
                <p class="title-big">Work With Hypha</p>


            </div>
            <div class="col-half">
                <p class="text-18">Would you like to join a revolutionary team of people shaping innovative solutions
                    for a
                    better world? Together, we’ll unleash our collective potential for a brighter future.</p>
            </div>

        </div>
        <div class="area flex wrap gap-20">
            <div class="col-x">
                <a class="nostyle" href="<?php// echo home_url(); ?>/get-started/create-hypha-account/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">

                            <div class="icon in-card">
                                <img src="<?php// echo get_template_directory_uri(); ?>/img/logos/logo-round.svg" />
                            </div>
                            <h3 class="title-medium">Create your <br />Hypha Account
                            </h3>
                            <div class="fake-button space">
                                <p>LET's DAO it!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-x">
                <a class="nostyle" href="<?php echo home_url(); ?>/get-started/join-a-dao/">
                    <div class="generic-card glow-back has-link">
                        <div class="wrappo">
                            <div class="icon in-card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/circles.svg" />
                            </div>
                            <h3 class="title-medium">Join a DAO<br /> as Member</h3>
                            <div class="fake-button space">
                                <p>Find your DAO</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </section>-->


</main>


<?php get_footer(); ?>