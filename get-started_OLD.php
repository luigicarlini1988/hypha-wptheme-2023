<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypha::GetStarted</title>

    <!-- Global css -->
    <link rel="stylesheet" href="css/global.css" />

    <!-- Get Started css -->
    <link rel="stylesheet" href="css/get-started.css" />

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Work+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
        include ('incl/header-nav.html') ;
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
                    <img src="img/logos/logo-white.svg">
                </div>
                <div class="get-start-icon-case">
                    <img src="img/icons/rocket.svg" />
                </div>
                <div class="col-8">
                    <div class="sub-section flex align-center">
                        <div class="icon small">
                            <img src="img/icons/rocket.svg" loading="lazy" />
                        </div>

                        <p class="subtitle">3 Easy steps to:</p>
                    </div>
                    <h1 class="title-giga">Get Started</h1>
                    <p class="text-20 light-blu">Either you want to Launch a new DAO, or you are here to Join a DAO, or
                        also in case you want to Build with us, we provided a seamless onboarding for all cases. </p>
                    <a href="#begin" class="button primary">Let's begin</a>
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
                                    <img src="img/icons/rocket.svg" loading="lazy" />
                                </div>

                                <p class="subtitle">1:: Join Hypha Network</p>
                            </div>
                            <p class="title-medium">Visit our onboarding and scan your QR-code</p>
                            <div class="get-image-resp flex align-center justify-center">
                                <div class="onb-1">
                                    <img src="img/get-started/get1.png">
                                </div>
                                <div class="onb-2">
                                    <img src="img/get-started/get2.png">
                                </div>
                            </div>
                            <p>Click on the link below to access your QR-code invite in order to
                                set-up your Hypha Account. Then scan the QR-code with your mobile phone to download the
                                Hypha wallet.</p>
                            <a class="copy-link" href="#">dao.hypha.earth/hypha/sign-up</a> <br />
                            <a href="#inside-anchor-2" class="button primary">Next Step</a>
                        </div>
                        <div class="col-half">
                            <div id="onb-images" class="onb-images pre flex align-center justify-center">
                                <div class="onb-1">
                                    <img src="img/get-started/get1.png">
                                </div>
                                <div class="onb-2">
                                    <img src="img/get-started/get2.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="inside-anchor-2" class="get-step flex gap-50 align-center">
                        <div class="col-half">
                            <div id="step2" class="sub-section flex align-center">
                                <div class="icon small">
                                    <img src="img/icons/rocket.svg" loading="lazy" />
                                </div>

                                <p class="subtitle">2:: Create your Hypha Account</p>
                            </div>
                            <p class="title-medium">Proceed with Hypha Wallet to create your account</p>
                            <div class="get-image-resp flex align-center justify-center">
                                <div class="onb-1">
                                    <img src="img/wallet-2.jpg">
                                </div>
                                <div class="onb-2">
                                    <img src="img/wallet-3.jpg">
                                </div>
                            </div>
                            <p>The Invite will automatially download the hypha wallet on your phone and validate your
                                access. This way you can directly create your account without any further verification
                                required</p>
                            <a href="#inside-anchor-3" class="button primary">Next Step</a>
                        </div>
                        <div class="col-half flex  justify-center">
                            <div class="wallet-images pre flex align-center justify-center">
                                <div class="wallet-1">
                                    <img src="img/wallet-3.jpg">
                                </div>
                                <div class="wallet-2">
                                    <img src="img/wallet-2.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="inside-anchor-3" class="get-step choose flex wrap">
                        <div class="col-8">
                            <div id="step3" class="sub-section flex align-center">
                                <div class="icon small">
                                    <img src="img/icons/rocket.svg" loading="lazy" />
                                </div>

                                <p class="subtitle">3:: Choose your next step!</p>
                            </div>
                            <p class="title-medium">With your Hypha Account configured, you can now <span
                                    class="light-blu">select 1
                                    of 3 options </span></p>

                        </div>


                        <div class="col-full flex gap-20">
                            <div class="col-4">
                                <a class="nostyle" href="#">
                                    <div class="generic-card glow-back has-link">
                                        <div class="wrappo">
                                            <div class="icon in-card">
                                                <img src="img/icons/circles.svg" />
                                            </div>
                                            <h3 class="title-medium">Join <br />a DAO</h3>
                                            <div class="fake-button space">
                                                <p>Next</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="nostyle" href="#">
                                    <div class="generic-card glow-back has-link">
                                        <div class="wrappo">
                                            <div class="icon in-card">
                                                <img src="img/icons/rocket.svg" />
                                            </div>
                                            <h3 class="title-medium">Create <br />your DAO</h3>
                                            <div class="fake-button space">
                                                <p>Next</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4">
                                <a class="nostyle" href="#">
                                    <div class="generic-card glow-back has-link">
                                        <div class="wrappo">
                                            <div class="icon in-card">
                                                <img src="img/icons/dev.svg" />
                                            </div>
                                            <h3 class="title-medium">Develop <br />with Hypha</h3>
                                            <div class="fake-button space">
                                                <p>Next</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="steps-counter">
                    <div class="counting">
                        <div id="step1-counter" class="stp">1</div>
                        <div id="step2-counter" class="stp">2</div>
                        <div id="step3-counter" class="stp">3</div>
                    </div>
                    <!-- debug -->
                    <div id="create-images"></div>
                </div>

            </div>

        </section>


    </main>


    <?php 
        include ('incl/footer.html') ;
    ?>

    <script type="text/javascript" src="js/get-started.js"></script>
</body>

</html>