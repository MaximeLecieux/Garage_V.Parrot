<?php
require_once('pdo.php');

function addCar($pdo, string $name, int $price, string $brand, string $model, int $year, int $mileage, string $color, int $nb_door, string $gearbox, string $fuel, string $firstImage, string $imagesPath){
    $query = $pdo->prepare("INSERT INTO Cars (name, price, brand, model, year, mileage, color, nb_door, gearbox, fuel, first_img, images_path)  VALUES (:name, :price, :brand, :model, :year, :mileage, :color, :nb_door, :gearbox, :fuel, :firstImage, :imagesPath);");
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_INT);
    $query->bindParam(':brand', $brand, PDO::PARAM_STR);
    $query->bindParam(':model', $model, PDO::PARAM_STR);
    $query->bindParam(':year', $year, PDO::PARAM_INT);
    $query->bindParam(':mileage', $mileage, PDO::PARAM_INT);
    $query->bindParam(':color', $color, PDO::PARAM_STR);
    $query->bindParam(':nb_door', $nb_door, PDO::PARAM_INT);
    $query->bindParam(':gearbox', $gearbox, PDO::PARAM_STR);
    $query->bindParam(':fuel', $fuel, PDO::PARAM_STR);
    $query->bindParam(':firstImage', $firstImage, PDO::PARAM_STR);
    $query->bindParam(':imagesPath', $imagesPath, PDO::PARAM_STR);
    return $query->execute();
}