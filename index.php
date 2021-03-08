<?php

define('ASSETS', __DIR__.'/assets/');

include 'core/koneksi.php';
include 'core/function.php';

$url = isset($_GET['url']) ? $_GET['url'] : '';

$url = rtrim($url, '/');
$url = explode('/', $url);

if(isset($url[0])){
    switch($url[0]){
        case 'admin':
            include 'pages/admin/index.php';
            break;
        case 'operator':
            include 'pages/operator/index.php';
            break;
        case 'nasabah':
            include 'pages/nasabah/index.php';
            break;
        case 'auth':
            include 'pages/auth/index.php';
            break;
        default:
            include 'pages/home/index.php';
            break;
    }
}else{
    include 'pages/home/index.php';
}

?>
