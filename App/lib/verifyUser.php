<?php
require_once('pdo.php');


function verifyUserLoginPassword(PDO $pdo, string $email, string $password) {
    $query = $pdo->prepare("SELECT * FROM Users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}