<?php
include 'web/router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);