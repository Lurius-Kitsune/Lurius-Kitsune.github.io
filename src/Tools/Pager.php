<?php

namespace Luriusfox\MyPackage\Tools;

class Pager
{
    // return the html page
    public static function renderPage(string $page, array $vars)
    {
        if (!file_exists($page)) {
            throw new \Exception("La page n'existe pas" . $page);
        } else {
            // start output buffering
            ob_start();
            // extract variables
            extract($vars);
            // include the page
            include $page;
            // return the page
            return ob_get_clean();
        }
    }
}
