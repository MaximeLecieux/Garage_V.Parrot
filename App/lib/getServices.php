<?php
require_once('pdo.php');

function getServices(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Services;");
    $query->execute();
    return $query->fetchAll();
}