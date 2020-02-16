<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */

    use COASniffle\COASniffle;
    use COASniffle\Handlers\COA;
    use DynamicalWeb\HTML;
    use DynamicalWeb\Runtime;

    Runtime::import('COASniffle');

    new COASniffle();
    $AvatarURL = COA::getAvatarUrl(
            'normal', '5de2595b98ab26d2a826e2dba8a80989ef9fb06cd9d11bb8918df107a7523fd707ee4fd310e64a0a'
    );


?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Intellivoid - Netkas</title>
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
                            <h1>Zi Xing</h1>
                            <br/>
                            <p class="profile-description"><?PHP HTML::importMarkdown('dev_netkas'); ?></p>
                            <div class="btn-wrapper profile pt-3">
                                <a target="_blank" href="https://twitter.com/narrakas" class="btn btn-icon btn-twitter btn-round">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://github.com/netkas" class="btn btn-icon btn-github btn-round">
                                    <i class="fab fa-github-alt"></i>
                                </a>
                                <a target="_blank" href="https://t.me/netkas" class="btn btn-icon btn-info btn-round">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto pt-5">
                            <div class="card card-coin card-plain">
                                <div class="card-header">
                                    <img src="<?PHP HTML::print($AvatarURL, false); ?>" alt="avatar" class="img-center img-fluid rounded-circle">
                                    <h4 class="title">Founder of Intellivoid</h4>
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
