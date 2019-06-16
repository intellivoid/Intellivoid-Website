<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;

?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title><?PHP HTML::print(TEXT_PAGE_TITLE); ?></title>
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
                            <h1 class="text-white"><?PHP HTML::print(TEXT_HEADER_TITLE); ?></h1>
                            <p class="text-white mb-3"><?PHP HTML::print(TEXT_HEADER_SUB); ?></p>
                            
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
                <img src="/assets/img/path4.png" class="path">
                <div class="container">
                    <div class="row row-grid justify-content-between">
                        <div class="col-md-5">
                            <img src="/assets/img/openblu.jpg" alt="OpenBlu VPN" class="img-fluid floating">
                            <div class="card card-stats bg-danger">
                                <div class="card-body">
                                    <div class="justify-content-center">
                                        <div class="numbers">
                                            <p class="card-title">200+</p>
                                            <p class="card-category text-white"><?PHP HTML::print(TEXT_SECTION_OPENBLU_SERVERS); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats bg-info">
                                <div class="card-body">
                                    <div class="justify-content-center">
                                        <div class="numbers">
                                            <p class="card-title">5K+</p>
                                            <p class="card-category text-white"><?PHP HTML::print(TEXT_SECTION_OPENBLU_CONNECTED_USERS); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats bg-default">
                                <div class="card-body">
                                    <div class="justify-content-center">
                                        <div class="numbers">
                                            <p class="card-title"><?PHP HTML::print(TEXT_SECTION_OPENBLU_FREE); ?></p>
                                            <p class="card-category text-white"><?PHP HTML::print(TEXT_SECTION_OPENBLU_ACCESS); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="px-md-5">
                                <hr class="line-success">
                                <h3><?PHP HTML::print(TEXT_SECTION_OPENBLU_HEADER); ?></h3>
                                <p><?PHP HTML::print(TEXT_SECTION_OPENBLU_DESC); ?></p>
                                <ul class="list-unstyled mt-5">
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-success mb-2">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6><?PHP HTML::print(TEXT_SECTION_OPENBLU_FEATURE_1); ?></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-success mb-2">
                                                <i class="fa fa-cog"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6><?PHP HTML::print(TEXT_SECTION_OPENBLU_FEATURE_2); ?></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-success mb-2">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="ml-3">
                                                <h6><?PHP HTML::print(TEXT_SECTION_OPENBLU_FEATURE_3); ?></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success btn-simple" onclick="window.open('https://openblu.intellivoid.info/');"><?PHP HTML::print(TEXT_SECTION_OPENBLU_OPEN_APPLICATION_BUTTON); ?></button>
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
                                    <h1><?PHP HTML::print(TEXT_SECTION_NETLENIUM_HEADER); ?></h1>
                                    <p><?PHP HTML::print(TEXT_SECTION_NETLENIUM_DESC_1); ?></p>
                                    <br/>
                                    <p><?PHP HTML::print(TEXT_SECTION_NETLENIUM_DESC_2); ?></p>
                                    <br/>
                                    <button class="btn btn-primary btn-simple"><?PHP HTML::print(TEXT_SECTION_NETLENIUM_BUTTON); ?></button>
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
