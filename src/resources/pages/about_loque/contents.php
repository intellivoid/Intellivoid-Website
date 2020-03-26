<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */

    use COASniffle\COASniffle;
    use COASniffle\Handlers\COA;
    use DynamicalWeb\HTML;
    use DynamicalWeb\Runtime;

    Runtime::import('COASniffle');

    new COASniffle();
    $AvatarURL = COA::getAvatarUrl(
            'normal', '0dc9b46878d8dc5afd55049a9d673a44ccb0d59f7fad5f801e574bc8a4b1eafe808526b2987b7da6'
    );
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - Loque036</title>
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
                            <h1>loque</h1>
                            <br/>
                            <p class="profile-description">Spanish translator and moderator at Intellivoid</p>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://github.com/loque036" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="<?PHP HTML::print($AvatarURL, false); ?>" alt="avatar" style="width: 200px; height: 200px;" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">Intellivoid Translator</h4>
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
