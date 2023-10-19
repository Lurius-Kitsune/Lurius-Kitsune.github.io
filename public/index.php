<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;

require_once __DIR__ . '/../vendor/autoload.php';

$pdo = PdoPortfolio::getPdoPortfolio();

if (!empty($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
} else {
    $action = null;
}

switch ($action) {
    case 'homeController':
        require_once CONTROLLER . '/home/c_homeMenu.php';
        break;
    default:
        require_once CONTROLLER . '/c_home.php';
        break;
}
