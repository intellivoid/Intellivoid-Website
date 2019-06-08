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
            <?PHP HTML::importSection('landing_footer'); ?>
        </div>
        <?PHP HTML::importSection('landing_javascript'); ?>
    </body>
</html>
