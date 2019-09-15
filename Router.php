<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/views/index.php';
        break;
    case '' :
        require __DIR__ . '/public/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/public/views/about.php';
        break;
    case '/contact' :
        require __DIR__ . '/public/views/contact.php';
        break;
    default:
        require __DIR__ . '/public/views/404.php';
        break;
}