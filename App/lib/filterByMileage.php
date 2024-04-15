<?php
require_once('pdo.php');

if(isset($_POST)){
    filterByMileage($pdo, $_POST['minMileage'], $_POST['mileageSelect']);
}

function filterByMileage(PDO $pdo, $minMileage, $mileageSelect){
    $query = $pdo->prepare("SELECT idCar, name, model, mileage, year, price, first_img FROM Cars WHERE mileage BETWEEN :minMileage AND :mileageSelect;");
    $query->bindParam(':minMileage', $minMileage, PDO::PARAM_STR);
    $query->bindParam(':mileageSelect', $mileageSelect, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(filterByMileage($pdo, $_POST['minMileage'], $_POST['mileageSelect']));