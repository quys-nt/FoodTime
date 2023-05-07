<?php
define('THEME', 'themes/');
define('PHP', '.php');
$url = $_SERVER['REQUEST_URI'];
$scheme = $_SERVER['SERVER_PORT'] == 80 ? 'http://' : 'https://';
$path_url = explode('/', $url);
define('BASE_URL', $scheme . $_SERVER['HTTP_HOST'] . '/' . $path_url[1]) . '/';

$page = !empty($_GET['lp']) ? $_GET['lp'] : 'home';
$header = THEME . 'partials/header' . PHP;
$footer = THEME . 'partials/footer' . PHP;
$notfound = THEME . '404' . PHP;

include_once $header;
if (file_exists($path = THEME . $page . PHP)) {
    include_once $path;
} else {
    include_once $notfound;
}
include_once $footer;