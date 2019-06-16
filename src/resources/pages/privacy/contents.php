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
            <div class="page-header" style="overflow: visible; margin-bottom: 200px">
                <div class="page-header-image"></div>

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h1 class="profile-title text-left"><?PHP HTML::print(TEXT_HEADER_TITLE); ?></h1>
                                </div>
                                <div class="card-body text-left">
                                    <?PHP HTML::importMarkdown('privacy'); ?>
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
