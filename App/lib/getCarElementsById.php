<?php

require_once('pdo.php');

function getCarElementById(PDO $pdo, $idCar){ 
    $query = $pdo->prepare("SELECT * FROM Cars WHERE idCar = :idCar;");
    $query->bindParam(':idCar', $idCar, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
