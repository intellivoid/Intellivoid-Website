<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */

    use COASniffle\COASniffle;
    use COASniffle\Handlers\COA;
    use DynamicalWeb\HTML;
    use DynamicalWeb\Runtime;

    Runtime::import('COASniffle');

    new COASniffle();
    $AvatarURL = COA::getAvatarUrl(
        'normal', '3d5e068d2bc40e6c6b89aecfb8e90b0ca92ac9ec0ca82429fb2431339b94e1a207edebab5b4f54bc'
    );
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - NodeStorm</title>
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
                            <h1>NodeStorm</h1>
                            <br/>
                            <p>Intellivoid Support Moderator / Translator</p>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://github.com/qlg1" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="<?PHP HTML::print($AvatarURL, false); ?>" alt="avatar" style="width: 200px; height: 200px;" class="img-center img-fluid rounded-circle" style="max-height: 150px;">
                                    <h4 class="title">Programmer / Greek Translator</h4>
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
