<?php
require_once('pdo.php');

if(isset($_POST)){
    filterByYear($pdo, $_POST['minYear'], $_POST['yearSelect']);
}

function filterByYear(PDO $pdo, $minYear, $yearSelect){
    $query = $pdo->prepare("SELECT idCar, name, model, mileage, year, price, first_img FROM Cars WHERE year BETWEEN :minYear AND :yearSelect;");
    $query->bindParam(':minYear', $minYear, PDO::PARAM_STR);
    $query->bindParam(':yearSelect', $yearSelect, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(filterByYear($pdo, $_POST['minYear'], $_POST['yearSelect']));