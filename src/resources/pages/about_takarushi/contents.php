<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */

    use COASniffle\COASniffle;
    use COASniffle\Handlers\COA;
    use DynamicalWeb\HTML;
    use DynamicalWeb\Runtime;

    Runtime::import('COASniffle');

    new COASniffle();
    $AvatarURL = COA::getAvatarUrl(
            'normal', 'c88120009ba1f069f8749428451b0cc0e1d6d4346e20a4d3a897fd4ceaaee87592eb6caf8a78fa58'
    );
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - Takarushi</title>
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
                            <h1>Takarushi</h1>
                            <br/>
                            <p class="profile-description">
                                Furry Translator who's interested on tech and sometimes, weird experiments with it, Translator af Intellivoid. I also translated apps like Nicegram on iOS, Recordie and Swift Wall on Android.!.
                            </p>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://instagram.com/rtakaru.jpg" class="btn btn-icon btn-primary btn-round">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a target="_blank" href="https://twitter.com/_rtakaru" class="btn btn-icon btn-twitter btn-round">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://t.me/ryoshuuke" class="btn btn-icon btn-info btn-round">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                                <a target="_blank" href="https://takarushi.me" class="btn btn-icon btn-dark btn-round">
                                    <i class="fa fa-globe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="<?PHP HTML::print($AvatarURL, false); ?>" alt="avatar" style="width: 200px; height: 200px;" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">Intellivoid Spanish Translator</h4>
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
