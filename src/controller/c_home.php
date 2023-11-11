<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

/**
 * @var PdoPortfolio $pdo
**/

$headerContent = '<link href="/css/index.css" rel="stylesheet">';
Pager::renderView(VIEW . '/v_default.php', [
    'content' => $action === 'companyReport' ? Pager::extractFile(CONTROLLER . '/c_companyReport.php', $pdo) : Pager::extractFile(VIEW . '/home/v_home.php'),
    'headerContent' => $headerContent
]);
