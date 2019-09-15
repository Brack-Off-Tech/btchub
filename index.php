<?php
include 'web/router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new router($request);

$router->get('/', 'public/views/index');
$router->get('about', 'public/views/about');