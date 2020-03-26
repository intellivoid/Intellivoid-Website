<?PHP
    use DynamicalWeb\HTML;
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="title">VOID•</h1>
            </div>
            <div class="col-md-3">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="/contact" class="nav-link"><?PHP HTML::print(TEXT_FOOTER_CONTACT_US); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="/privacy" class="nav-link"><?PHP HTML::print(TEXT_FOOTER_PRIVACY_POLICY); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="/tos" class="nav-link"><?PHP HTML::print(TEXT_FOOTER_TERMS_OF_SERVICE); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="https://openblu.intellivoid.net/" class="nav-link">OpenBlu VPN</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://accounts.intellivoid.net" class="nav-link">Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://coffeehouse.intellivoid.net" class="nav-link">CoffeeHouse</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Netlenium <?PHP HTML::print(TEXT_FOOTER_COMING_SOON_PLACEHOLDER); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="title"><?PHP HTML::print(TEXT_FOOTER_FOLLOW_US_TITLE); ?></h3>
                <div class="btn-wrapper profile">
                    <button onclick="window.open('https://twitter.com/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button onclick="window.open('https://t.me/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                        <i class="fab fa-telegram-plane"></i>
                    </button>
                    <button onclick="window.open('https://instagram.com/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                        <i class="fab fa-instagram"></i>
                    </button>
                    <button onclick="window.open('https://github.com/Intellivoid');" class="btn btn-icon btn-simple btn-round btn-neutral">
                        <i class="fab fa-github-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>