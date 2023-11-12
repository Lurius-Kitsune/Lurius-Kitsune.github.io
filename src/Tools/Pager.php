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
    public static function renderView(string $page, ?array $vars = null)
    {
        if (!file_exists($page)) {
            throw new \Exception("La page n'existe pas" . $page);
        } elseif (is_null($vars)) {
            // start output buffering
            ob_start();
            // include the page
            include $page;
            // return the page
            echo ob_get_clean();
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

    public static function extractFile(string $filename, ?PdoPortfolio $pdo = null, ?array $vars = null): string
    {
        if (is_file($filename)) {
            ob_start();
            self::renderView($filename, (is_null($vars) ? ['pdo' => $pdo] : array_merge($vars, ['pdo' => $pdo])));
            return ob_get_clean();
        }
        return false;
    }
}
