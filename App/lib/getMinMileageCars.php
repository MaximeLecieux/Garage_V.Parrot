<?php
require_once('pdo.php');

function getMinMileageCars(PDO $pdo){
    $query = $pdo->prepare("SELECT MIN(mileage) FROM Cars;");
    $query->execute();
    return $query->fetch();
}