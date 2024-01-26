<?php
require_once('pdo.php');

function getMinPriceCars(PDO $pdo){
    $query = $pdo->prepare("SELECT MIN(price) FROM Cars;");
    $query->execute();
    return $query->fetch();
}