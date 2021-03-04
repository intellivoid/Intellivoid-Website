<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Opalin HTML Template - About</title>
        <meta name="description" content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code.">
        <?PHP HTML::importSection("header"); ?>
    </head>
    <body class="page page-home preload">
        <?PHP HTML::importSection("navigation_light"); ?>
        <main>

            <section class="bg-gradient-light center padding padding-top">
                <div class="max-width-m">
                    <p class="muted">Who We Are</p>
                    <h1 class="hero">We're a community of designers and developers creating tools for the web.</h1>
                </div>
            </section>

            <section class="bg-gradient-light padding">
                <div class="max-width-l">
                    <div class="row reduce-spacing">
                        <div class="col-one-half">
                            <p class="paragraph serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p class="paragraph serif">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                        <div class="col-one-half">
                            <p class="paragraph serif">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            <p class="paragraph serif">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>
                    </div>
                    <img class="full-width margin-bottom margin-top rounded" src="/assets/media/content/about-01.jpg" srcset="/assets/media/content/about-01.jpg 1x, /assets/media/content/about-01@2x.jpg 2x" alt="About">
                    <p class="paragraph serif">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                    <div class="row margin-top">
                        <div class="col-one-half">
                            <img class="full-width rounded" src="/assets/media/content/about-02.jpg" srcset="/assets/media/content/about-02.jpg 1x, /assets/media/content/about-02@2x.jpg 2x" alt="About">
                        </div>
                        <div class="col-one-half">
                            <img class="full-width rounded" src="/assets/media/content/about-03.jpg" srcset="/assets/media/content/about-03.jpg 1x, /assets/media/content/about-03@2x.jpg 2x" alt="About">
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-image-07 dark overlay padding padding-bottom padding-top">
                <div class="center max-width-m">
                    <h2>Want to join the team?</h2>
                    <p class="paragraph">We’re hiring. Work from anywhere.</p>
                    <a href="#" class="button button-secondary space-top" role="button">Job Openings</a>
                </div>
            </section>

            <section class="bg-gradient-light center padding">
                <div class="max-width-l">
                    <div class="margin-bottom max-width-m">
                        <h3>Our Investors</h3>
                        <p class="paragraph">We've completed a $120 million Series B financing round.</p>
                    </div>
                    <div class="row min-two-columns">
                        <div class="col-one-fourth">
                            <img src="/assets/media/content/trusted-company.png" srcset="/assets/media/content/trusted-company.png 1x, /assets/media/content/trusted-company@2x.png 2x" alt="Trusted Company">
                        </div>
                        <div class="col-one-fourth">
                            <img src="/assets/media/content/trusted-company.png" srcset="/assets/media/content/trusted-company.png 1x, /assets/media/content/trusted-company@2x.png 2x" alt="Trusted Company">
                        </div>
                        <div class="col-one-fourth">
                            <img src="/assets/media/content/trusted-company.png" srcset="/assets/media/content/trusted-company.png 1x, /assets/media/content/trusted-company@2x.png 2x" alt="Trusted Company">
                        </div>
                        <div class="col-one-fourth">
                            <img src="/assets/media/content/trusted-company.png" srcset="/assets/media/content/trusted-company.png 1x, /assets/media/content/trusted-company@2x.png 2x" alt="Trusted Company">
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?PHP HTML::importSection("footer"); ?>
        <?PHP HTML::importSection("js_scripts"); ?>

    </body>
</html>

