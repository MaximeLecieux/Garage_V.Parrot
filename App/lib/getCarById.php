<?php

require_once('pdo.php');

if(isset($_POST)){
    getCarById($pdo, $_POST['idCar']);
}
function getCarById(PDO $pdo, $idCar){ 
    $query = $pdo->prepare("SELECT * FROM Cars WHERE idCar = :idCar;");
    $query->bindParam(':idCar', $idCar, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

echo json_encode(getCarById($pdo, $_POST['idCar']));