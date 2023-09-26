<?php

// Answer post request with html response (for ajax)
if (isset($_POST['content'])) {
    //switch case for ajax request
    switch ($_POST['content']) {
        case 'home-company':
            require_once __DIR__ . '/../view/home/companyExp.html';
            exit();
        case 'home-study':
            require_once __DIR__ . '/../view/home/study.html';
            exit();
        case 'home-skill':
            require_once __DIR__ . '/../view/home/skill.html';
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
