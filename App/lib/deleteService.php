<?php
require_once('pdo.php');

function deleteService(PDO $pdo, $idService){
    $query = $pdo->prepare("DELETE FROM Services WHERE idService = :idService");
    $query->bindParam(':idService', $idService, PDO::PARAM_INT);
    $query->execute();
    return true;
}