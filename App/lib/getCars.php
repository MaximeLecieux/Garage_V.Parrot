<?php
require_once('pdo.php');

function getCarsLimit(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Cars ORDER BY idCar DESC LIMIT 3;");
    $query->execute();
    return $query->fetchAll();
}