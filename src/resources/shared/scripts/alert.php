<?php

    use DynamicalWeb\HTML;

    /**
     * Renders an Alert
     *
     * @param string $text
     * @param string $type
     * @param string $icon
     */
    function render_alert(string $text, string $type, string $icon)
    {
        HTML::print("<div class=\"alert alert-$type alert-with-icon\">", false);
        HTML::print("<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">", false);
        HTML::print("<i class=\"fa fa-minus\"></i>", false);
        HTML::print("</button>", false);
        HTML::print("<span data-notify=\"icon\" class=\"fa fa-$icon\"></span></span>", false);
        HTML::print("<span class=\"text-left\">", false);
        HTML::print($text);
        HTML::print("</span>", false);
        HTML::print("</div>", false);
    }