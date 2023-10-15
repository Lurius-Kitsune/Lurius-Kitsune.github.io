<?php

require_once __DIR__ . '/vendor/autoload.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($action == "homeController") {
    require_once CONTROLLER . '/home/c_homeMenu.php';
}

$headerContent = '<link href="/css/index.css" rel="stylesheet">';

require(VIEW . '/v_default.php');
