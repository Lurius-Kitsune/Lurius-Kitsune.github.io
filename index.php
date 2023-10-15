<?php

require_once __DIR__ . '/vendor/autoload.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($action == "homeController") {
    require_once CONTROLLER . '/home/c_homeMenu.php';
} else {
    require_once VIEW . '/home/v_pageHome.php';
    require(VIEW . '/v_default.php');
}
