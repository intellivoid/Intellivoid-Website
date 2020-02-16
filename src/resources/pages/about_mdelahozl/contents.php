<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - Mateo De la Hoz</title>
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
                            <h1>Mateo De la Hoz</h1>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://github.com/mdelahozl" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="/assets/img/devs/mdelahozl.jpg" alt="avatar" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">Project licensing & compliance manager security auditor</h4>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary" onclick="location.href='mailto:mateo.delahoz@funade.edu.co';">Contact</button>
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
