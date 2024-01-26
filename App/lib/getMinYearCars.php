<?php
require_once('pdo.php');

function getMinYearCars(PDO $pdo){
    $query = $pdo->prepare("SELECT MIN(year) FROM Cars;");
    $query->execute();
    return $query->fetch();
}