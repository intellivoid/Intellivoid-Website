<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */

    use COASniffle\COASniffle;
    use COASniffle\Handlers\COA;
    use DynamicalWeb\HTML;
    use DynamicalWeb\Runtime;

    Runtime::import('COASniffle');

    new COASniffle();
    $AvatarURL = COA::getAvatarUrl(
            'normal', '5a9834667c4fa379a044c4af18402bf0420b914c846cdb1dfc8b62384f6cff181dcfd90ae861fe19'
    );
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - pqhaz</title>
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
                            <h1>Paul M.</h1>
                            <br/>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://github.com/pqhaz" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a target="_blank" href="https://twitter.com/pqhaz" class="btn btn-icon btn-twitter btn-round">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/pqhaa/" class="btn btn-icon btn-primary btn-round">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="<?PHP HTML::print($AvatarURL, false); ?>" alt="avatar" style="width: 200px; height: 200px;" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">Software Developer</h4>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary" onclick="location.href='mailto:me@pqhaz.site';">Contact</button>
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
