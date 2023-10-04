<?php

include_once __DIR__ . '/../const.php';
spl_autoload_register(function ($class_name) {
    // split the class name into parts separated by directory separators and take only the end part
    // $class_name = explode('\\', $class_name);
    // $class_name = end($class_name);
    echo(ROOT . '/' . $class_name . '.php');
    include_once ROOT . '/' . $class_name . '.php';
});
