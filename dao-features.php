<?php
/**
 * Template Name: dao-features
 *
 */

 get_header();
 ?>


<main id="dao-features">
    <?php if ( have_posts() ) :
  // Do we have any posts/pages in the databse that match our query?
  ?>

    <?php while ( have_posts() ) : the_post();
    // If we have a page to show, start a loop that will display it
    ?>



    <section id="df-head">
        <div class="before-dah lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self"></div>
        <div class="para">
            <div class="imager lax" data-lax-translate-y="(vh) 1, (-vh) 240" data-lax-anchor="self"></div>
        </div>

        <div class="dfh-center">
            <div class="dfh-text">
                <div class="lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <h1><span class="up-title">Discover all the</span><br>DAO features</h1>
                    <p>Since 2019, we have built and fine-tuned more than 40 tools, ranging from the token creation and
                        management, to the most advanced governance system a DAO can possibly offer to date.</p>
                </div>
                <div class="resp-dao-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/dao-smartphone.png" />
                </div>
            </div>
            <div class="dfh-img">
                <img class="lax" data-lax-translate-y="(vh) 1, (-vh) 100" data-lax-anchor="self"
                    src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-up-dao.png" />
            </div>
        </div>
    </section>

    <section id="features-token">
        <div class="foglio">

            <div class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Create and Manage</span><br>Your DAO Token</h3>
                    <p>We provide fee-free tokens recorded on a blockchain ledger to ensure the integrity and security
                        of all your transactions and holdings of tokens. Deploy your own token with simplicity, without
                        the need to write smart contracts. Each user will have their own wallet, connected to the DAO
                        treasury for fast and secure deposits of their remuneration from the payroll</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/token1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/token2.png" /></div>
                </div>
            </div>

        </div><!-- foglio -->

    </section>

    <section id="compensations">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-1.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Compensation Module</span><br>Manage Roles and Payrolls</h2>
                    <p>A complete set of modules to structure, motivate and compensate your organization’s workforce.
                        From creating role archetypes, salary bands and new assignments, to then voting on role
                        proposals and compensating for work done via a reliable payroll solution, it is all there.</p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="role-archetypes" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Compensation module</span><br>Role Archetypes</h3>
                    <p>These are fundamental to the structure of your team: each member can apply for a role in your DAO
                        by applying to one of the available role archetypes and submitting their role assignment
                        proposal.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/archetype1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/archetype2.png" /></div>
                </div>
            </div>

            <div id="salary-bands" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb-full"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/bands1.png" /></div>
                    <div class="thumb-full spaz"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/bands2.png" /></div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">compensation module</span><br>Salary Bands</h3>
                    <p>Create the Salary Bands that best suit your organisational needs. Simply select a band for each
                        role and focus on finding the best people.</p>
                </div>
            </div>

            <div id="role-assignments" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">compensation module</span><br>Role Assignments</h3>
                    <p>When people want to join your DAO, they will apply for an open assignment for a given role. They
                        simply select from any available roles and submit their application, describing their title and
                        why they are the best fit for that role.] Once their proposal is up, time for voting! All active
                        members in the DAO are then able to cast their vote and enroll new members!</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/role1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/role2.png" /></div>
                </div>
            </div>

            <div id="active-members" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/profile-card1.png" />
                    </div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/profile-card2.png" />
                    </div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/profile-card3.png" />
                    </div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">compensation module</span><br>Active Members</h3>
                    <p>Always keep track of what’s going on in the DAO! All members are listed and filtered in the
                        Active Members section of the main dashboard of the DAO.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="contributions">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-2.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Contribution Module</span><br>Let members participate in DAO activities
                    </h2>
                    <p>Contribution modules allow DAO members to actively participate in DAO activities without
                        necessarily having to be in a role assignment.</p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="compensation-proposals" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Contribution module</span><br>Compensation Proposals</h3>
                    <p>Contribution proposals are ad-hoc non-recurring contributions to the organisation that can be
                        proposed by any member, along with an associated remuneration. These are then voted upon by the
                        DAO members.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/proposals1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/proposals2.png" /></div>
                </div>
            </div>

            <div id="quests" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/quest1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/quest2.png" /></div>
                    <div class="coming-soon">Feature under development</div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Contribution module</span><br>Quests</h3>
                    <p>A quest works like a contribution, but it comes in 2 steps: The first part is the initiation and
                        confirmation to go ahead with a project. The second step is the quest completion and the
                        associated payout.</p>
                </div>
            </div>

            <div id="voting-modules" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Contribution module</span><br>Voting Modules</h3>
                    <p>Role Assignments, Proposals, Contributions; everything in a DAO passes through a decentralised
                        voting system. We created the most intuitive, simple and flexible voting system to meet the
                        needs of different styles of governance.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/voting1.png" /></div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/voting2.png" /></div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/voting3.png" /></div>
                </div>
            </div>

        </div>
    </section>

    <section id="profile">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-3.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Profile Modules</span><br>All profile actions are in one place</h2>
                    <p>Find all the important information about a member in one place. From active assignments, past
                        contributions, biography, time zone, and past votes. Everything is fully transparent and
                        observable by members of the organization.</p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="period-management" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Profile module</span><br>Assignments Payout Periods </h3>
                    <p>Find all the information about an active or past assignment. Including the token payout,
                        timeframe, description, votes and comments.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/period1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/period2.png" /></div>
                </div>
            </div>

            <div id="wallet" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/walletf1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/walletf2.png" /></div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Profile module</span><br>Wallet and payout functions</h3>
                    <p>Access your wallet and find all DAO-specific tokens in one place. From here you can also redeem
                        your cash token and get a payout on your connected crypto wallet</p>
                </div>
            </div>

        </div>
    </section>


    <section id="governance">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-4.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Governance Module</span><br>Govern your DAO in a fully cooperative way
                    </h2>
                    <p>Most parameters in the DAO like unity, quorum and voting period are fully configurable. This will
                        allow you and your team to find the best governance meeting your individual needs.</p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="governance" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Governance Module</span><br>Customisable Governance</h3>
                    <p>Optimise your voting threshold by adjusting your quorum (minimum number of voters) and unity
                        (minimum number of endorsements), and the voting period, for a proposal to pass. We also provide
                        some guides & tools to help you decide on your voting methods!</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb-full"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/config1.png" /></div>
                </div>
            </div>

            <div id="templates" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/template1.png" /></div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/template2.png" /></div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/template3.png" /></div>
                    <div class="coming-soon">Feature under development</div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Governance module</span><br>Organisation Templates</h3>
                    <p>DAOs can be created for any kind of organisational form, such as a startup, a cooperative, a
                        village, a city or a community. Hypha provides a range of pre-defined templates for each
                        organisational form (eg. salary bands, policies, roles, badges, etc) to help them get their DAO
                        up and running in the shortest time possible.</p>
                </div>
            </div>

            <div id="policy-proposals" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Governance Module</span><br>Policy Proposals</h3>
                    <p>Policies are key courses of action which can be proposed by any member of the organisation. Due
                        to the potential impact on the organisation, policies require a different voting method than
                        other proposals and cannot be delegated to circles.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/policy1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/policy2.png" /></div>
                    <div class="coming-soon">Feature under development</div>
                </div>
            </div>

        </div>
    </section>

    <section id="branding">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-5.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Branding Module</span><br>Custom Design</h2>
                    <p>Bring your brand style to life inside your DAO! Thanks to our design configurator you’ll be able
                        to personalise your DAO to align it with your brand style. </p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="brand-elements" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Branding Module</span><br>Brand Elements</h3>
                    <p>With Hypha DAO you have the opportunity to fully customise the appearance of your DAO with
                        colors, fonts, logos, custom headers and messages in order to reflect your brand style!</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/brand1.png" /></div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/brand2.png" /></div>
                    <div class="thumb thr"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/brand3.png" /></div>
                </div>
            </div>
        </div>
    </section>


    <section id="treasury">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-6.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Treasury Module</span><br>Always on top of your DAO finances</h2>
                    <p>The treasury modules will provide the DAO treasurers with all the tools needed to efficiently
                        administrate your DAO’s finances.</p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="blockchain-explorer" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Treasury Module</span><br>Blockchain explorer</h3>
                    <p>Your data lives on the blockchain and you can keep track of each and every transaction through
                        widely available blockchain explorers. From Payrolls to contributions, everything is easily
                        accessible and traceable on the blockchain ledger.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb-full"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/treasury1.png" /></div>
                </div>
            </div>

            <div id="multi-signature" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/treasury2.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/treasury3.png" /></div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Treasury module</span><br>Treasurer Badges & Multi-signature</h3>
                    <p>Members that hold the Treasurer Badge can multi-sign and redeem cash tokens. For example, in
                        order for a 1,000 token redemption to be executed, 3 out of 5 Treasurers need to sign the payout
                        for it.</p>
                </div>
            </div>


            <div id="budgeting-dashboard" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Treasury Module</span><br>Budgeting Dashboard</h3>
                    <p>See your organization’s budget at a glance. Keep track of how much you are spending with each
                        circle, for assignments, Roles and all other DAO features.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"></div>
                    <div class="thumb"></div>
                    <div class="coming-soon">Feature under development</div>
                </div>
            </div>

            <div id="account-management" class="righty">

                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"></div>
                    <div class="thumb"></div>
                    <div class="coming-soon">Feature under development</div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Treasury Module</span><br>Account and Finance</h3>
                    <p>Get a detailed view on your financial picture (such as balances, cash flows, or accounts
                        receivables or payables). Unlike traditional accounting modules, your DAO will present you with
                        a multi-currency view and double-entry accounting to execute transactions securely on chain.</p>
                </div>
            </div>

        </div>
    </section>


    <section id="advanced-role-features">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-7.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Advanced Role Features</span><br>Smart Badges and Administrator Roles
                    </h2>
                    <p>A digital badge serves both as recognition of achievement and confirmation of a status level.
                        They are held by individuals and become part of their personal profile to display their levels
                        of access within the DAO and their achievements. </p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="core-badges" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Treasury Module</span><br>Administrator & Core Badges</h3>
                    <p>Administrator and Core Badges enable members to execute important tasks in the organisation like
                        treasury management, changing configuration settings, and enrolling new members.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/badge1.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/badge2.png" /></div>
                </div>
            </div>

            <div id="smart-badges" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/badge3.png" /></div>
                    <div class="thumb"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/dao-features/badge4.png" /></div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Treasury module</span><br>Smart Badges & Token Multiplier</h3>
                    <p>Smart Badges reward members for their achievements or extra roles they take on (e.g.
                        Facilitators, Tech Support, etc…). The Badges can be created in the DAO and then members can
                        apply for them. They can come with a token multiplier (ie a token based reward) but don't have
                        to.</p>
                </div>
            </div>

        </div>
    </section>


    <section id="circles">
        <div class="section-opener">
            <div class="before-so"></div>
            <div class="so-para lax" data-lax-translate-y="(vh) 1, (-vh) 160" data-lax-anchor="self">
                <div class="imager"></div>
            </div>
            <div class="foglio">
                <div class="laptop lax" data-lax-translate-y="(vh) 1, (-vh) -80" data-lax-anchor="self">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dao-features/mock-8.png" />
                </div>
                <div class="opener-text">
                    <h2><span class="up-title">Circles Module</span><br>Keep bigger organisations agile with Circles
                    </h2>
                    <p>These Circle management tools are designed to make your teams more effective, efficient and
                        focused.</p>
                </div>
            </div>
            <div class="after-so"></div>
        </div>

        <div class="foglio">
            <div id="circle-governance" class="lefty">
                <div class="dao-feature-text">
                    <h3><span class="up-title">Circles Module</span><br>Circle Proposals & Governance</h3>
                    <p>Circle proposals are tied to the context of a given circle (AKA a ‘team’) and allow circle
                        members to expedite the vote on proposals that affect their specific circle. Each circle has a
                        circle lead and members that coordinate activities with other circles.</p>
                </div>
                <div class="dao-feature-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"></div>
                    <div class="thumb"></div>
                    <div class="coming-soon">Feature under development</div>
                </div>
            </div>

            <div id="circle-budgeting" class="righty">

                <div class="dao-feature-thumbs long-thumbs">
                    <div class="dotter">
                        <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                            src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
                    </div>
                    <div class="thumb"></div>
                    <div class="thumb"></div>
                    <div class="coming-soon">Feature under development</div>
                </div>

                <div class="dao-feature-text">
                    <h3><span class="up-title">Circles module</span><br>Circle Budgeting</h3>
                    <p>This feature enables the allocation of budgets to specific circles to be managed within the
                        circles. Once a new circle is approved the circle has its own budget responsibilities and must
                        elect a circle lead to represent the circle.</p>
                </div>
            </div>

        </div>
    </section>


    <section id="feature-roadmap">
        <div class="foglio">
            <div class="dotter">
                <img class="lax" data-lax-translate-y="(vh) 1, (-vh) -120" data-lax-anchor="self"
                    src="<?php echo get_template_directory_uri(); ?>/img/bludots-small.svg" />
            </div>
            <div class="roadmap-title">
                <h3><span class="up-title">ROADMAP</span><br>New Features</h3>
            </div>

            <div id="roadmap-slider" class="owl-carousel owl-theme">

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Circles</h4>
                        <p>These Circle management tools are designed to make your teams more effective, efficient and
                            focused</p>
                    </div>
                </div>

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Policy proposals</h4>
                        <p>This module will allow DAO members to take governance decisions together</p>
                    </div>
                </div>

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Organisation Templates</h4>
                        <p>A series of pre-configured DAO modules to kickstart your DAO</p>
                    </div>
                </div>

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Quest Proposals</h4>
                        <p>A quest works like a contribution, but in 2 steps: proposal & agreement, then payout</p>
                    </div>
                </div>

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Notifications</h4>
                        <p>Notification and alerts system for all your important DAO activities</p>
                    </div>
                </div>

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Budgeting Dashboard</h4>
                    </div>
                </div>

                <div class="first-future">
                    <div class="thumb-list"></div>
                    <div class="text-cont">
                        <h4>Account Management</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="price-plans-cta" class="home-pp">
        <div class="foglio">
            <div>
                <h2 id="gs-anchor" class="titoletto">Price Plans</h2>
                <div class="flex-wrap">
                    <p class="fake-title">From your first single DAO <br />to an Ecosystem of interconnected DAOs for
                        impact</p>
                    <p class="subsub">We offer several flexible paths for organizations. You could join an existing DAO
                        or build your own, inviting partners and communities into the ecosystem. Or launch an
                        organizational DAO. Lead your community in later to create an interconnected DAO ecosystem,
                        driving impact in your focus area.</p>
                </div>
            </div>

            <div class="actual-plans">
                <div class="saas">
                    <div class="freepla">Free plan available!</div>
                    <h3><strong>Single DAO</strong> builder</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/price-plans/saas-skeme.png" />
                    <p>If you wish to build your own single DAO and <strong>let your organization grow using Hypha’s
                            tools</strong>, these are the price models for you! We provide 3 attractive price plans with
                        increasing feature inclusions, PLUS a free plan to help you try out the power of our DAO
                        solution!</p>
                    <a href="<?php echo home_url(); ?>/single-dao-pricing-models/" class="button-yellow">Single DAO
                        plans</a>
                </div>

                <div class="eaas">
                    <h3><strong>Ecosystem DAO</strong> builder</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/price-plans/eaas-skeme.png" />
                    <p>Is your dream to <strong>build an impactful ecosystem of like-minded communities locally or
                            worldwide?</strong> Then you could create or join an ecosystem of interconnected DAOs. Use
                        our price plans to offer working capital for your DAO launch. You can even choose the number of
                        DAOs to include. Alternatively we could connect you to potential working capital providers to
                        support your DAO. </p>
                    <a href="<?php echo home_url(); ?>/ecosystem-pricing-models/" class="button-yellow">Ecosystem DAO
                        plans</a>
                </div>

            </div>
        </div>
    </section>


    <?php endwhile; ?>
    <?php endif;  ?>


    <?php get_footer(); ?>