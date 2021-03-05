<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Intellivoid Technologies - About</title>
        <?PHP HTML::importSection("header"); ?>
    </head>
    <body class="page page-home preload">
        <?PHP HTML::importSection("navigation_light"); ?>
        <main>

            <section class="bg-gradient-light center padding padding-top">
                <div class="max-width-m">
                    <h1 class="hero">Who are we?</h1>
                </div>
            </section>

            <section class="bg-gradient-light padding">
                <div class="max-width-l">
                    <p class="paragraph serif">Intellivoid is a small group of talented people with a goal to create Software & Services for Consumers & Businesses. Intellivoid is not a big corporation striving to exploit users, we design our services in such a way where your privacy is our priority and we do not sell or monetize your data in order to show ads. We do not show ads on any of our services and or share your personal information publicly. Here is a few things that we do</p>
                    <div class="row reduce-spacing" style="margin-top: 5rem;">
                        <div class="col-one-half">
                            <h4>Intellivoid Accounts</h4>
                            <a href="https://accounts.intellivoid.net/">
                                <img class="rounded" src="/assets/media/intellivoid_accounts.webp" alt="Intellivoid Accounts">
                            </a>
                            <p class="paragraph serif" style="margin-top: 1rem;">Intellivoid Accounts which is an alternative to Google Accounts allowing you to safely authenticate to any service or app that implements Intellivoid Accounts giving you the user the ability to securely choose what information you want to share with the vendor. Additionally we do not make personal information a requirement and we don't verify your accounts via Email verification or Phone verification. We will rarely ever send you emails either. </p>
                        </div>
                        <div class="col-one-half">
                            <h4>Intellivoid Suite (WIP)</h4>
                            <a href="https://todo.intellivoid.net/">
                                <img class="rounded" src="/assets/media/todo.webp" alt="OpenBlu">
                            </a>
                            <p class="paragraph serif" style="margin-top: 1rem;">Intellivoid Suite is a work in progress project aimed to provide cloud-services that respects your privacy such as a Todo manager, Contacts, 2FA Manager, Notes, Calender, etc. At the moment Todo is publicly available as a test and we're currently working on the other services too.</p>
                        </div>
                    </div>
                    <div class="row reduce-spacing mt-5" style="margin-top: 5rem;">
                        <div class="col-one-half">
                            <h4>OpenBlu</h4>
                            <a href="https://openblu.intellivoid.net/">
                                <img class="rounded" src="/assets/media/openblu.webp" alt="OpenBlu">
                            </a>
                            <p class="paragraph serif" style="margin-top: 1rem;">OpenBlu is a open-platform decentralized VPN Service offering more than 10,000 servers hosted by volunteers from around the world, you can use any OpenVPN Client to connect to these servers and you don't need to install or authenticate using proprietary software unlike other paid VPN services that claims to be secured and good for your privacy, which isn't.</p>
                        </div>
                        <div class="col-one-half">
                            <h4>CoffeeHouse</h4>
                            <a href="https://coffeehouse.intellivoid.net/">
                                <img class="rounded" src="/assets/media/coffeehouse.webp" alt="CoffeeHouse">
                            </a>
                            <p class="paragraph serif" style="margin-top: 1rem;">CoffeeHouse is a cloud-based Machine Learning & Artificial Intelligence engine, a project we implement on bots like <a href="https://t.me/LydiaChatBot">@LydiaChatBot</a> and <a href="https://t.me/SpamProtectionBot">@SpamProtectionBot</a> we also offer API access allowing you to implement these complicated algorithms into your own projects. What makes CoffeeHouse special is that it was written from scratch without using third-party services or dependencies such as Tensorflow. </p>
                        </div>
                    </div>

                    <p class="paragraph serif" style="margin-top: 4rem;">And like-wise all of our services and software are written from the ground up, using our own infrastructure and technologies so that we can offer complete transparency over how our closed source solutions operate. From the compiler and the web framework that we use; we created it from the ground up. We've been operating on the Internet since 2017 and our team is a small but dedicated team where each member has it's own role. If you have any questions about how we operate or who we are then please do not hesitate to ask us questions in our communities.</p>
                </div>
            </section>
        </main>

        <?PHP HTML::importSection("footer"); ?>
        <?PHP HTML::importSection("js_scripts"); ?>

    </body>
</html>

