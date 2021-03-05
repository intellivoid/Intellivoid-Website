<?PHP
    use DynamicalWeb\HTML;

    function generateSocialLink(string $class, string $link)
    {
        return " <li style=\"display: inline-block; height: 16px; width: 16px;\"><a style=\"color: #0a0c0d\" href=\"$link\"><i class=\"$class\"></i></a></li>";
    }

    function generatePeople(array $data)
    {
        $CurrentCount = 0;
        HTML::print("<div class=\"row center margin-bottom max-width-l min-two-columns\">", false);
        foreach($data as $person)
        {
            ?>
            <div class="col-one-fourth">
                <img alt="<?PHP HTML::print($person["name"]); ?>" class="avatar" src="https://accounts.intellivoid.net/user/contents/public/avatar?user_id=<?PHP HTML::print($person["intellivoid_account_public_id"]); ?>&resource=normal">
                <h4 class="pt-1" style="padding-top: 0.5rem;margin-bottom: 0.2rem;"><?PHP HTML::print($person["name"]); ?></h4>
                <p><?PHP HTML::print($person["title"]); ?></p>

                <?PHP
                $SocialLinks = [];

                if(isset($person["github"]))
                {
                    $SocialLinks[] = generateSocialLink("fab fa-github", $person["github"]);
                }
                if(isset($person["telegram"]))
                {
                    $SocialLinks[] = generateSocialLink("fab fa-telegram", $person["telegram"]);
                }
                if(isset($person["twitter"]))
                {
                    $SocialLinks[] = generateSocialLink("fab fa-twitter", $person["twitter"]);
                }
                if(isset($person["website"]))
                {
                    $SocialLinks[] = generateSocialLink("fas fa-globe", $person["website"]);
                }
                if(isset($person["discord"]))
                {
                    $SocialLinks[] = generateSocialLink("fab fa-discord", $person["discord"]);
                }
                if(isset($person["linkedin"]))
                {
                    $SocialLinks[] = generateSocialLink("fab fa-linkedin", $person["linkedin"]);
                }
                if(isset($person["email"]))
                {
                    $SocialLinks[] = generateSocialLink("fab fa-envelope", $person["email"]);
                }
                if(count($SocialLinks) > 0)
                {
                    ?>
                    <ul>
                        <?PHP
                        foreach($SocialLinks as $link) HTML::print($link, false);
                        ?>
                    </ul>
                    <?PHP
                }
                ?>

                <i class="paragraph muted"><?PHP HTML::print($person["description"]); ?></i>
            </div>
            <?PHP

            $CurrentCount += 1;
            if($CurrentCount == 4)
            {
                HTML::print("</div>", false);
                HTML::print("<div class=\"row center margin-bottom max-width-l min-two-columns\">", false);
                $CurrentCount = 0;
            }
        }
        HTML::print("</div>", false);
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Intellivoid Technologies - Team</title>
        <?PHP HTML::importSection("header"); ?>
    </head>
    <body class="page page-home preload">
        <?PHP HTML::importSection("navigation_light"); ?>
        <main>

            <?PHP $TeamContent = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "team_members.json"), True); ?>
            <section class="bg-gradient-light padding padding-top">
                <div class="max-width-l">
                    <div class="center max-width-m" style="margin-bottom: 5rem;">
                        <h2>Intellivoid Staff</h2>
                        <p class="paragraph">The people that keeps Intellivoid running</p>
                    </div>
                    <?PHP generatePeople($TeamContent["staff"]); ?>
                </div>
                <div class="max-width-l">
                    <div class="center max-width-m" style="margin-bottom: 5rem;">
                        <h2>Special Thanks</h2>
                        <p class="paragraph">Though they're not apart of our team, they still deserve a special thanks.</p>
                    </div>
                    <?PHP generatePeople($TeamContent["special_thanks"]); ?>
                </div>

            </section>

        </main>

        <?PHP HTML::importSection("footer"); ?>
        <?PHP HTML::importSection("js_scripts"); ?>

    </body>
</html>

