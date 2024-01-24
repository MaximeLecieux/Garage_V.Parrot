<?php
require_once('pdo.php');

function deleteUser(PDO $pdo, $idUser){
    $query = $pdo->prepare("DELETE FROM Users WHERE idUser = :idUser");
    $query->bindParam(':idUser', $idUser, PDO::PARAM_INT);
    $query->execute();
    return true;
}