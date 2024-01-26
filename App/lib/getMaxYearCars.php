<?php
require_once('pdo.php');

function getMaxYearCars(PDO $pdo){
    $query = $pdo->prepare("SELECT MAX(year) FROM Cars;");
    $query->execute();
    return $query->fetch();
}