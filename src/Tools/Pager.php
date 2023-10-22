<?php

declare(strict_types=1);

namespace Luriusfox\MyPackage\Tools;

use Luriusfox\MyPackage\Model\PdoPortfolio;

/**
 * @var PdoPortfolio $pdo
**/

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
            echo ob_get_clean();
        }
    }

    public static function getIncludeContents(string $filename, ?PdoPortfolio $pdo = null): string
    {
        if (is_file($filename)) {
            ob_start();
            include $filename;
            return ob_get_clean();
        }
        return false;
    }
}
