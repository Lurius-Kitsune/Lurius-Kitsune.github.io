<?php

use Luriusfox\MyPackage\Tools\Pager;

$headerContent = '<link href="/css/realisations.css" rel="stylesheet">';

Pager::renderView(VIEW . '/v_default.php', [
    'content' => Pager::extractFile(VIEW . '/realisation/v_realisation.php', null),
    'headerContent' => $headerContent
]);
