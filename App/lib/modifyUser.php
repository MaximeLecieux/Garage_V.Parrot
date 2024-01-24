<?php
require_once('pdo.php');

function modifyUser(PDO $pdo, string $idUser, string $email, string $password, string $type){

    if($password != null){
        $sql = "UPDATE Users SET email = :email, password = :password, type = :type  WHERE idUser = :idUser;";
        $query = $pdo->prepare($sql);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query->bindParam(':idUser', $idUser, PDO::PARAM_INT);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':type', $type, PDO::PARAM_STR);
        return $query->execute();
    } else {
        $sql = "UPDATE Users SET email = :email, type = :type WHERE idUser = :idUser;";
        $query = $pdo->prepare($sql);
        $query->bindParam(':idUser', $idUser, PDO::PARAM_INT);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':type', $type, PDO::PARAM_STR);
        return $query->execute();
    }
}
    