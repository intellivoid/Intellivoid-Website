<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Opalin HTML Template - Pricing</title>
        <meta name="description" content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code.">
        <?PHP HTML::importSection("header"); ?>
    </head>
    <body class="page page-home preload">
        <?PHP HTML::importSection("navigation_light"); ?>
        <main>

            <section class="bg-gradient-light padding padding-top">
                <div class="center max-width-l">
                    <h1 class="hero">Find the perfect plan for your business.</h1>
                </div>
                <div class="row margin-top max-width-l">
                    <div class="col-one-third card card-content">
                        <p class="muted">Free Forever</p>
                        <h2>
                            <span class="pricing-price">Free</span>
                        </h2>
                        <p class="paragraph">Ut enim ad minima veniam, quis nostrum exercitationem.</p>
                        <ul class="space-bottom">
                            <li>At vero eos et accusamus</li>
                            <li>Odio dignissimos ducimus</li>
                            <li>Blanditiis praesentium</li>
                        </ul>
                        <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("signup", [], true); ?>" class="button button-secondary full-width space-top" role="button">Sign Up For Free</a>
                    </div>
                    <div class="col-one-third card card-content">
                        <p class="muted">For Teams</p>
                        <h2>
                            <span class="pricing-price">$20</span>
                            <span class="pricing-duration muted sans">/MO</span>
                        </h2>
                        <p class="paragraph">Nemo enim ipsam voluptatem quia voluptas sit.</p>
                        <ul class="space-bottom">
                            <li>At vero eos et accusamus</li>
                            <li>Odio dignissimos ducimus</li>
                            <li>Blanditiis praesentium</li>
                        </ul>
                        <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("signup", [], true); ?>" class="button button-secondary full-width space-top" role="button">Start 14-Day Trial</a>
                    </div>
                    <div class="col-one-third card card-content dark">
                        <p class="muted">For Enterprises</p>
                        <h2>
                            <span class="pricing-price">$140</span>
                            <span class="pricing-duration muted sans">/MO</span>
                        </h2>
                        <p class="paragraph">Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <ul class="space-bottom">
                            <li>At vero eos et accusamus</li>
                            <li>Odio dignissimos ducimus</li>
                            <li>Blanditiis praesentium</li>
                        </ul>
                        <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("signup", [], true); ?>" class="button button-primary full-width space-top" role="button">Start 14-Day Trial</a>
                    </div>
                </div>
            </section>

            <section class="bg-gradient-light padding">
                <div class="bg-image-08 dark margin-bottom max-width-l overlay padding padding-bottom padding-top rounded">
                    <div class="center max-width-m">
                        <h2>Packed With Epic Features</h2>
                        <p class="paragraph">So you can focus on your most important work.</p>
                    </div>
                </div>
                <div class="row center margin-bottom max-width-l min-two-columns">
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">format_shapes</i>
                        <h6>Minimal Design</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">network_check</i>
                        <h6>Rocket Fast</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">line_style</i>
                        <h6>Framework</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">chrome_reader_mode</i>
                        <h6>Style Guide</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                </div>
                <div class="row center max-width-l min-two-columns">
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">code</i>
                        <h6>CSS + SASS</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">settings</i>
                        <h6>Customizable</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">dashboard</i>
                        <h6>Modular Design</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                    <div class="col-one-fourth">
                        <i class="feature-icons material-icons">check</i>
                        <h6>HTML5 Valid</h6>
                        <p class="muted paragraph">Sed ut perspiciatis unde omnis iste natus.</p>
                    </div>
                </div>
            </section>

            <section class="bg-light padding">
                <div class="center max-width-m">
                    <h2>Grow your startup the right way.</h2>
                    <p class="paragraph">Don't waste another minute.</p>
                    <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("signup", [], true); ?>" class="button button-primary space-top" role="button">Sign Up For Free</a>
                </div>
            </section>

        </main>

        <?PHP HTML::importSection("footer"); ?>
        <?PHP HTML::importSection("js_scripts"); ?>

    </body>
</html>

