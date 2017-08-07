<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
require __DIR__ . '/vendor/autoload.php';*/

try {
    $db = new PDO('mysql:host=mysql;dbname=app;charset=utf8mb4', 'user', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch (PDOException $exception){
    var_dump($exception->getMessage());
}
$get = $db->query('SELECT DATABASE();')->fetchAll();
var_dump($get);