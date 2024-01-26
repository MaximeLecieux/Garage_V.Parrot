<?php
require_once('pdo.php');

function getMaxMileageCars(PDO $pdo){
    $query = $pdo->prepare("SELECT MAX(mileage) FROM Cars;");
    $query->execute();
    return $query->fetch();
}