<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;

    HTML::importScript('recaptcha');
    HTML::importScript('alert');
?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <?PHP HTML::print(re_import(), false); ?>
        <title><?PHP HTML::print(TEXT_PAGE_TITLE); ?></title>
    </head>

    <body class="index-page">
        <?PHP HTML::importSection('landing_navbar'); ?>
        <div class="wrapper">
            <div class="page-header" style="height: 100%; overflow: visible; margin-bottom: 100px">
                <div class="page-header-image"></div>

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h1 class="profile-title text-left"><?PHP HTML::print(TEXT_HEADER_TITLE); ?></h1>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary" for="email">
                                                            <i class="fa fa-envelope"></i> <?PHP HTML::print(TEXT_LABEL_EMAIL_ADDRESS); ?>
                                                        </label>
                                                        <input name="email" id="email" type="email" class="form-control" placeholder="affoe_x_node@email.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary" for="subject">
                                                            <i class="fa fa-question"></i> <?PHP HTML::print(TEXT_LABEL_SUBJECT); ?>
                                                        </label>
                                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="<?PHP HTML::print(TEXT_SUBJECT_PLACEHOLDER); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="text-primary" for="message">
                                                            <i class="fa fa-pencil-alt"></i> <?PHP HTML::print(TEXT_LABEL_MESSAGE); ?>
                                                        </label>
                                                        <textarea name="message" id="message" type="text" rows="3" class="form-control" placeholder="<?PHP HTML::print(TEXT_MESSAGE_PLACEHOLDER); ?>"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div style="text-align: center; display: inline-block;">
                                                            <?PHP print(re_render()); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-round float-right" value="<?PHP HTML::print(TEXT_SUBMIT_BUTTON); ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="info info-horizontal pt-1">
                                    <div class="icon icon-primary">
                                        <i class="fa fa-bolt"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title"><?PHP HTML::print(TEXT_FEATURE_1_TITLE); ?></h4>
                                        <p><?PHP HTML::print(TEXT_FEATURE_1_DESC); ?></p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="fa fa-question"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title"><?PHP HTML::print(TEXT_FEATURE_2_TITLE); ?></h4>
                                        <p><?PHP HTML::print(TEXT_FEATURE_2_DESC); ?></p>
                                    </div>
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
