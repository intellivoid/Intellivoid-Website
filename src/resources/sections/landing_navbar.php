<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" title="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_BRAND_TOOLTIP); ?>" data-placement="bottom">
                <span>INTELLIVOID•</span> Technologies
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_TOGGLE_LABEL); ?>">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a>INTELLIVOID•</a>
                    </div>
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_TOGGLE_LABEL); ?>">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SOCIAL_TWITTER_TOOLTIP); ?>" data-placement="bottom" href="https://twitter.com/Intellivoid" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SOCIAL_TELEGRAM_TOOLTIP); ?>" data-placement="bottom" href="https://t.me/Intellivoid" target="_blank">
                        <i class="fab fa-telegram-plane"></i>
                        <p class="d-lg-none d-xl-none">Telegram</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SOCIAL_INSTAGRAM_TOOLTIP); ?>" data-placement="bottom" href="https://instagram.com/Intellivoid" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="<?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SOCIAL_GITHUB_TOOLTIP); ?>" data-placement="bottom" href="https://github.com/Intellivoid" target="_blank">
                        <i class="fab fa-github"></i>
                        <p class="d-lg-none d-xl-none">Github</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p><?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SERVICES_DROPDOWN); ?></p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="services-dropdown">
                        <a class="dropdown-item" href="https://openblu.intellivoid.info/">OpenBlu</a>
                        <a class="dropdown-item" href="#">Netlenium <?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_COMING_SOON_PLACEHOLDER); ?></a>
                        <a class="dropdown-item" href="#">Accounts <?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_COMING_SOON_PLACEHOLDER); ?></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p><?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SUPPORT_DROPDOWN); ?></p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="services-dropdown">
                        <a class="dropdown-item" href="/contact"><?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SUPPORT_CONTACT_US); ?></a>
                        <a class="dropdown-item" href="/privacy"><?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SUPPORT_PRIVACY_POLICY); ?></a>
                        <a class="dropdown-item" href="/tos"><?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_SUPPORT_TERMS_OF_SERVICE); ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>