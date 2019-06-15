<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;

?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Landing Page</title>
    </head>

    <body class="index-page">
        <?PHP HTML::importSection('landing_navbar'); ?>

        <div class="wrapper">

            <div class="page-header header-filter">
                <div class="squares square1"></div>
                <div class="squares square2"></div>
                <div class="squares square3"></div>
                <div class="squares square4"></div>
                <div class="squares square5"></div>
                <div class="squares square6"></div>
                <div class="squares square7"></div>
                <div class="content-center">
                    <div class="row row-grid justify-content-between align-items-center text-left">
                        <div class="col-lg-6 col-md-6">
                            <h1 class="text-white">We are the solution to complex tasks</h1>
                            <p class="text-white mb-3">Unlike others, we take our time to create the best and only the best.</p>
                            
                            <div class="btn-wrapper">
                                <div class="button-container">
                                    <button onclick="window.open('https://twitter.com/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button onclick="window.open('https://t.me/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                    <button onclick="window.open('https://instagram.com/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                    <button onclick="window.open('https://github.com/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                                        <i class="fab fa-github-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <section class="section section-lg section-safe">
                <img src="../assets/img/path4.png" class="path">
                <div class="container">
                    <div class="row row-grid justify-content-between">
                        <div class="col-md-5">
                            <img src="/assets/img/openblu.jpg" alt="OpenBlu VPN" class="img-fluid floating">
                            <div class="card card-stats bg-danger">
                                <div class="card-body">
                                    <div class="justify-content-center">
                                        <div class="numbers">
                                            <p class="card-title">200+</p>
                                            <p class="card-category text-white">Servers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats bg-info">
                                <div class="card-body">
                                    <div class="justify-content-center">
                                        <div class="numbers">
                                            <p class="card-title">5K+</p>
                                            <p class="card-category text-white">Connected Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats bg-default">
                                <div class="card-body">
                                    <div class="justify-content-center">
                                        <div class="numbers">
                                            <p class="card-title">Free</p>
                                            <p class="card-category text-white">Access</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="px-md-5">
                                <hr class="line-success">
                                <h3>OpenBlu VPN</h3>
                                <p>A robust and free VPN Service powered by volunteers with well documented API Access</p>
                                <ul class="list-unstyled mt-5">
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-success mb-2">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6>Standard Encryption on all VPN Servers</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-success mb-2">
                                                <i class="fa fa-cog"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6>Well documented Configuration Files</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-success mb-2">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6>Try API before purchasing access</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success btn-simple" onclick="window.open('https://openblu.intellivoid.info/');">Open Web Application</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-lg">
                <section class="section">
                    <div class="container">
                        <div class="row row-grid justify-content-between">

                            <div class="col-md-6">
                                <div class="pl-md-5">
                                    <h1>Netlenium Framework</h1>
                                    <p>A cross platform and cloud based browser automation framework, designed to create tests, automate complicated tasks or to monitor data without messing with complicated javascript or web components</p>
                                    <br/>
                                    <p>This is a ongoing project, more information will be released in the future</p>
                                    <br/>
                                    <button class="btn btn-primary btn-simple">Coming Soon</button>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="/assets/img/netlenium.jpg" alt="Netlenium Framework" class="img-fluid floating">
                            </div>

                        </div>
                    </div>
                </section>
            </section>

            <?PHP HTML::importSection('landing_footer'); ?>
        </div>
        <?PHP HTML::importSection('landing_javascript'); ?>
    </body>
</html>
