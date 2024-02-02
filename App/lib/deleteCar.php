<?php
require_once('pdo.php');

function deleteCar(PDO $pdo, $idCar){
    $query = $pdo->prepare("DELETE FROM Cars WHERE idCar = :idCar");
    $query->bindParam(':idCar', $idCar, PDO::PARAM_INT);
    $query->execute();
    return true;
}