<?php
require_once('pdo.php');

function getMaxPriceCars(PDO $pdo){
    $query = $pdo->prepare("SELECT MAX(price) FROM Cars;");
    $query->execute();
    return $query->fetch();
}