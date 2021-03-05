<nav>
    <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("index", [], true); ?>" class="logo" rel="home">
        <?PHP
            $NavigationMode = "light";
            if(defined("NAV_MODE"))
                $NavigationMode = NAV_MODE;

            if($NavigationMode == "light")
            {
                \DynamicalWeb\HTML::print("<!-- How cool is this? No JavaScript and the logo is dark here 0w0 -->", false);
                \DynamicalWeb\HTML::print("<iv_app-logo class=\"dark\"/>", false);
            }
            else
            {
                \DynamicalWeb\HTML::print("<!-- How cool is this? No JavaScript and the logo is light here 0w0 -->", false);
                \DynamicalWeb\HTML::print("<iv_app-logo class=\"light\"/>", false);
            }
        ?>
    </a>
    <div class="nav-toggle"></div>
    <ul class="inline">
        <li>
            <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("index", [], true); ?>" class="active">Home</a>
        </li>
        <li>
            <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("about", [], true); ?>">About</a>
        </li>
        <li>
            <a href="<?PHP \DynamicalWeb\DynamicalWeb::getRoute("team", [], true); ?>">Team</a>
        </li>
        <li>
            <a href="https://github.com/intellivoid">GitHub</a>
        </li>
    </ul>
    <ul class="inline right">
        <li>
            <a href="https://accounts.intellivoid.net/" target="_blank">Accounts</a>
        </li>
        <li>
            <a href="https://coffeehouse.intellivoid.net/" target="_blank">CoffeeHouse</a>
        </li>
        <li>
            <a href="https://openblu.intellivoid.net/" target="_blank">OpenBlu</a>
        </li>
        <li>
            <a href="https://t.me/LydiaChatBot" target="_blank">LydiaChatBot</a>
        </li>
        <li>
            <a href="https://t.me/SpamProtectionBot" target="_blank">SpamProtectionBot</a>
        </li>
    </ul>
</nav>