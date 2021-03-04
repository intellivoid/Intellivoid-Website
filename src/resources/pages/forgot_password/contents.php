<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Opalin HTML Template - Forgot Password</title>
        <meta name="description" content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code.">
        <?PHP HTML::importSection("header"); ?>
    </head>
    <body class="page page-home preload">
        <main>

            <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("index", [], true); ?>" class="button button-close" role="button"></a>

            <section class="row no-gutter reverse-order">
                <div class="col-one-half middle padding">
                    <div class="max-width-s">
                        <h5>Forgot password?</h5>
                        <p class="paragraph">We'll send you an email with instructions to reset it.</p>
                        <form>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" type="email" name="email">
                            </div>
                            <a href="#" class="button button-primary full-width space-top" role="button">Forgot Password</a>
                        </form>
                    </div>
                    <div class="center max-width-s space-top">
                        <span class="muted">Already have an account? </span><a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("login", [], true); ?>">Log In</a>
                    </div>
                </div>
                <div class="col-one-half bg-image-06 featured-image"></div>
            </section>

        </main>

        <?PHP HTML::importSection("js_scripts"); ?>

    </body>
</html>

