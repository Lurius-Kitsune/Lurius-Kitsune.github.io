<?php

// Answer post request with html response (for ajax)
if (isset($_GET['content'])) {
    $contentAsk = filter_input(INPUT_GET, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
    //switch case for ajax request
    switch ($contentAsk) {
        case 'home-company':
            include_once CONTROLLER . '/home/c_companyExp.php';
            exit();
        case 'home-study':
            require_once CONTROLLER . '/home/c_studyWrapper.php';
            exit();
        case 'home-skill':
            require_once VIEW . '/home/v_skill.php';
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
