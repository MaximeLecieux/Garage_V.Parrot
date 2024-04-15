<?php
require_once('pdo.php');

if(isset($_POST)){
    filterByPrice($pdo, $_POST['minPrice'], $_POST['priceSelect']);
}

function filterByPrice(PDO $pdo, $minPrice, $priceSelect){
    $query = $pdo->prepare("SELECT idCar, name, model, mileage, year, price, first_img FROM Cars WHERE price BETWEEN :minPrice AND :priceSelect;");
    $query->bindParam(':minPrice', $minPrice, PDO::PARAM_STR);
    $query->bindParam(':priceSelect', $priceSelect, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(filterByPrice($pdo, $_POST['minPrice'], $_POST['priceSelect']));