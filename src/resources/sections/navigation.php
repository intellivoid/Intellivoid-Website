<nav>
    <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("index", [], true); ?>" class="logo" rel="home">
        <?PHP \DynamicalWeb\HTML::importSection("logo_svg"); ?>
        <span>Opalin</span>
    </a>
    <div class="nav-toggle"></div>
    <ul class="inline">
        <li><a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("index", [], true); ?>" class="active">Home</a></li>
        <li><a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("pricing", [], true); ?>">Pricing</a></li>
        <li><a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("about", [], true); ?>">About</a></li>
    </ul>
    <ul class="inline right">
        <li><a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("login", [], true); ?>">Log In</a></li>
        <li><a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("signup", [], true); ?>" class="button button-secondary button-m full-width-tablet" role="button">Sign Up</a></li>
    </ul>
</nav>