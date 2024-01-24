<?php

require_once('pdo.php');

if(isset($_POST)){
    getUserById($pdo, $_POST['idUser']);
}
function getUserById(PDO $pdo, $idUser){ 
    $query = $pdo->prepare("SELECT email, type FROM Users WHERE idUser = :idUser;");
    $query->bindParam(':idUser', $idUser, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

echo json_encode(getUserById($pdo, $_POST['idUser']));