<?php

use Luriusfox\MyPackage\Tools\Pager;

$content = Pager::getIncludeContents(VIEW . '/home/v_home.php');
$headerContent = '<link href="/css/index.css" rel="stylesheet">';
Pager::renderPage(VIEW . '/v_default.php', [
    'content' => $content,
    'headerContent' => $headerContent]);
