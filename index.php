<?php
require_once "vendor/autoload.php";
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=hetic_kant","root","root");
    $pdo->query("SET NAMES 'UTF8';");
}catch(PDOException $e){
    die($e->getMessage());
}
$page = new \Controller\PageController($pdo);
$page->displayAction();
