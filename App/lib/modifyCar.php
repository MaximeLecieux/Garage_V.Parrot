<?php
require_once('pdo.php');

function modifyCar(PDO $pdo, int $idCar, string $name, int $price, string $brand, string $model, int $year, int $mileage, string $color, int $nb_door, string $gearbox, string $fuel, string|null $firstImage, string|null $imagesPath){

    if($firstImage != null && $imagesPath != null){
        $query = $pdo->prepare("UPDATE Cars SET name = :name, price = :price, brand = :brand, model = :model, year = :year, mileage = :mileage, color = :color, nb_door = :nb_door, gearbox = :gearbox, fuel = :fuel, first_img = :firstImage, images_path = :imagesPath  WHERE idCar = :idCar;");
        $query->bindParam(':idCar', $idCar, PDO::PARAM_INT);
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
    } else if ($firstImage != null) {
        $query = $pdo->prepare("UPDATE Cars SET name = :name, price = :price, brand = :brand, model = :model, year = :year, mileage = :mileage, color = :color, nb_door = :nb_door, gearbox = :gearbox, fuel = :fuel, first_img = :firstImage WHERE idCar = :idCar;;");
        $query->bindParam(':idCar', $idCar, PDO::PARAM_INT);
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
        return $query->execute();
    } else if ($imagesPath != null){
        $query = $pdo->prepare("UPDATE Cars SET name = :name, price = :price, brand = :brand, model = :model, year = :year, mileage = :mileage, color = :color, nb_door = :nb_door, gearbox = :gearbox, fuel = :fuel, images_path = :imagesPath  WHERE idCar = :idCar;;");
        $query->bindParam(':idCar', $idCar, PDO::PARAM_INT);
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
        $query->bindParam(':imagesPath', $imagesPath, PDO::PARAM_STR);
        return $query->execute();
    }
}
    