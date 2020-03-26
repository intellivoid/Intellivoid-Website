<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;

    use COASniffle\COASniffle;
    use COASniffle\Handlers\COA;
    use DynamicalWeb\Runtime;

    Runtime::import('COASniffle');

    new COASniffle();
    $AvatarURL = COA::getAvatarUrl(
        'normal', '410835cda06076145ed59cc8ee16a678adb3e9975058d03fce2e631ffc8fa27bf527f11414517f58'
    );
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - AntiEngineer</title>
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
                            <h1>Diederik Noordhuis</h1>
                            <?PHP HTML::importMarkdown('dev_antiengineer'); ?>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://github.com/AntiEngineer" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github-alt"></i>
                                </a>
                                <a target="_blank" href="https://t.me/antiengineer" class="btn btn-icon btn-info btn-round">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="<?PHP HTML::print($AvatarURL, false); ?>" alt="avatar" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">System Administrator</h4>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary" onclick="location.href='mailto:diederikn@bytecha.in';">Contact</button>
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
