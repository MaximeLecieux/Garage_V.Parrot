<?php
require_once('pdo.php');

function modifyService(PDO $pdo, string $idService, string $name, string $description, string|null $img){

    if($img != null){
        $sql = "UPDATE Services SET name = :name, description = :description, img = :img  WHERE idService = :idService;";
        $query = $pdo->prepare($sql);
        $query->bindParam(':idService', $idService, PDO::PARAM_INT);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':img', $img, PDO::PARAM_STR);
        return $query->execute();
    } else {
        $sql = "UPDATE Services SET name = :name, description = :description WHERE idService = :idService;";
        $query = $pdo->prepare($sql);
        $query->bindParam(':idService', $idService, PDO::PARAM_INT);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        return $query->execute();
    }
}
    