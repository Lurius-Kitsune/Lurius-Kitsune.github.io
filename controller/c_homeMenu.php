<?php

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/../' . $class_name . '.php';
});

// Answer post request with html response (for ajax)
if (isset($_POST['content'])) {
    //switch case for ajax request
    switch ($_POST['content']) {
        case 'home-company':
            include_once __DIR__ . '/../view/home/companyExp.php';
            exit();
        case 'home-study':
            require_once __DIR__ . '/../view/home/study.html';
            exit();
        case 'home-skill':
            require_once __DIR__ . '/../view/home/skill.php';
            exit();
        default:
            //trow 404 error
            header("HTTP/1.0 404 Not Found");
            exit();
    }
    exit();
} else {
    //trow forbidden error
    header("HTTP/1.0 403 Forbidden");
    exit();
}
