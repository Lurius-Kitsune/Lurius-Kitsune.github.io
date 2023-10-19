<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

/**
 * @var PdoPortfolio $pdo
**/

if ($action === 'companyReport') {
    $content = Pager::getIncludeContents(CONTROLLER . '/c_companyReport.php', $pdo);
} else {
    $content = Pager::getIncludeContents(VIEW . '/home/v_home.php');
}
$headerContent = '<link href="/css/index.css" rel="stylesheet">';
Pager::renderPage(VIEW . '/v_default.php', [
    'content' => $content,
    'headerContent' => $headerContent
]);
