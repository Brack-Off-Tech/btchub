<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/views/index.php';
        break;
    case '' :
        require __DIR__ . '/public/views/index.php';
        break;
    case '/dashboard' :
        require __DIR__ . '/public/views/components/dashboard.php';
        break;
    case '/contact' :
        require __DIR__ . '/public/views/components/contact.php';
        break;
    default:
        require __DIR__ . '/public/views/components/404.php';
        break;
}