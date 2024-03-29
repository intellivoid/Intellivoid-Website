<?PHP
    use DynamicalWeb\HTML;

    define("THEME_COLOR", "#100e22");
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Intellivoid Technologies</title>
        <?PHP HTML::importSection("header"); ?>
    </head>
    <body class="page page-home preload">
        <?PHP HTML::importSection("navigation_dark"); ?>
        <main>

            <section class="bg-image-hero center-tablet dark overlay-hero">
                <div class="full-screen -margin-bottom middle padding padding-top-tablet">
                    <div class="row max-width-l">
                        <div class="col-one-half middle">
                            <div>
                                <h1 class="hero">Intellivoid Technologies</h1>
                                <?PHP
                                    $leads = [
                                        "Software & Services for consumers and businesses",
                                        "No bullshit software, pure innovation",
                                        "We lecture NodeJS developers for destroying the web",
                                        "We reinvent the wheel even for the most trivial stuff",
                                        "This website is running of our own solutions",
                                        "Sponsored by LearnToProgramCorrectly4JavascriptDevelopers",
                                        "PHP > Python > NodeJS"
                                    ];
                                    $button_text = [
                                        "Stalk our families",
                                        "Learn more about us",
                                        "Find out where we live"
                                    ];
                                ?>
                                <p class="lead"><?PHP HTML::print($leads[array_rand($leads)]); ?></p>

                                <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("about", [], true); ?>" class="button button-primary space-top header_btn" role="button"><?PHP HTML::print($button_text[array_rand($button_text)]); ?></a>
                            </div>
                        </div>
                        <div class="col-one-half middle">
                            <img src="/assets/media/landing_ill.svg" alt="Visionary">
                        </div>
                    </div>
                </div>
                <div class="padding">
                    <div class="row margin-bottom max-width-l">
                        <div class="col-one-half middle">
                            <h3>Intellivoid Accounts</h3>
                            <p class="paragraph">Second generation authentication solution, privacy focused and allows users to take control over what data they share with the Apps and services they login with</p>
                            <a href="https://accounts.intellivoid.net" class="button button-primary space-top" target="_blank" role="button">Open Intellivoid Accounts</a>
                        </div>
                        <div class="col-one-half">
                            <img class="rounded shadow-l" src="/assets/media/intellivoid_accounts.webp" alt="Intellivoid Accounts">
                        </div>
                    </div>
                    <div class="row max-width-l reverse-order">
                        <div class="col-one-half">
                            <img class="rounded shadow-l" src="/assets/media/coffeehouse.webp" alt="CoffeeHouse">
                        </div>
                        <div class="col-one-half middle">
                            <h3>CoffeeHouse</h3>
                            <p class="paragraph">A Machine Learning & Artificial Intelligence engine written entirely from scratch, no Tensorflow, no Python. Provides features such as Lydia a machine learning chat bot, Natural Language Processing tools and Image Classification Tools</p>
                            <a href="https://coffeehouse.intellivoid.net" class="button button-primary space-top" target="_blank" role="button">Open CoffeeHouse</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-gradient-light -margin-bottom-2 overlay padding">
                <div class="center max-width-m">
                    <h2>What is Intellivoid</h2>
                    <p class="paragraph">We're a small group of talented people that strive to create innovating software & services often from the ground up instead of following a trend or copy-pasting open source projects and calling it our own.</p>
                </div>
                <div class="margin-top max-width-l">
                    <img class="rounded shadow-l" src="/assets/media/todo.webp" alt="Todo Manager">
                </div>
            </section>

            <section class="bg-gradient-dark center dark padding">
                <div class="margin-top max-width-l">
                    <div class="margin-bottom max-width-m">
                        <h3>Over 4.6 million users</h3>
                        <p class="opacity-m paragraph">More than 4.6 million users use our software one way or another, either it's by bots or our API services.</p>
                    </div>
                </div>
            </section>

            <section class="padding">
                <div class="max-width-l">
                    <div class="center">
                        <h2>How we started</h2>
                        <p class="paragraph">Every great story has a beginning, this one doesn't have an end yet.</p>
                    </div>
                    <div class="row margin-top timeline">
                        <div class="col-one-fifth">
                            <h5>2017</h5>
                            <p>Started building the infrastructure of what Intellivoid will become</p>
                        </div>
                        <div class="col-one-fifth">
                            <h5>2018</h5>
                            <p>First launch of OpenBlu which lasted for 4-6 months</p>
                        </div>
                        <div class="col-one-fifth">
                            <h5>2019</h5>
                            <p>CoffeeHouse, OpenBlu and Intellivoid Accounts becomes live, LydiaChatBot becomes a popular bot on Telegram</p>
                        </div>
                        <div class="col-one-fifth">
                            <h5>2020</h5>
                            <p>Intellivoid Accounts 2.0 becomes live, SpamProtectionBot gets released on Telegram and reaches over 1 million active by the end of 3 months</p>
                        </div>
                        <div class="col-one-fifth">
                            <h5>2021</h5>
                            <p>Updated CoffeeHouse and currently working on bigger projects</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?PHP HTML::importSection("footer"); ?>
        <?PHP HTML::importSection("js_scripts"); ?>
    </body>
</html>

