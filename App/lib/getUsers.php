<?php
require_once('pdo.php');

function getUsers(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Users;");
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(getUsers($pdo));