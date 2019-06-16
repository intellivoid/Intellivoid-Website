<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - Dav</title>
    </head>

    <body class="profile-page">
        <?PHP HTML::importSection('landing_navbar'); ?>
        <div class="wrapper">
            <div class="page-header" style="overflow: visible; margin-bottom: 200px">
                <img alt="dots" src="/assets/img/dots.png" class="dots">
                <img alt="path" src="/assets/img/path4.png" class="path">
                <div class="container align-items-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h1>David Zurek</h1>
                            <br/>
                            <p class="profile-description"><?PHP HTML::importMarkdown('dev_dav'); ?></p>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://twitter.com/dav2070" class="btn btn-icon btn-twitter btn-round">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://github.com/Dav2070" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="/assets/img/devs/dav2070.jpg" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">German Translator</h4>
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
