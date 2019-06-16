<?PHP

    /** @noinspection PhpUnhandledExceptionInspection */
    use DynamicalWeb\HTML;

?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('landing_headers'); ?>
        <title>Landing Page</title>
    </head>

    <body class="index-page">
        <?PHP HTML::importSection('landing_navbar'); ?>
        <div class="wrapper">
            <div class="page-header">
                <div class="page-header-image"></div>

                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h1 class="profile-title text-left">Contact Us</h1>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary" for="email">
                                                            <i class="fa fa-envelope"></i> Email address
                                                        </label>
                                                        <input name="email" id="email" type="email" class="form-control" placeholder="affoe_x_node@email.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary" for="subject">
                                                            <i class="fa fa-question"></i> Subject
                                                        </label>
                                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="text-primary" for="message">
                                                            <i class="fa fa-pencil-alt"></i> Message
                                                        </label>
                                                        <textarea name="message" id="message" type="text" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-round float-right" value="Submit">
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
                                        <h4 class="info-title">We will get back to you!</h4>
                                        <p>
                                            Contacting us is fast and painless, no unnecessary steps or information.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="fa fa-question"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Have a question?</h4>
                                        <p>We will answer them! No generic or confusing responses. We don't use any AI behind our support team</p>
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
