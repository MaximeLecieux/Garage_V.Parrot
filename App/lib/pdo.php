<?php 

try {
    $pdo = new PDO('mysql:dbname=garage;host=localhost', 'Administrateur', 'Password123!');

} catch (PDOException $PDOException){
    echo 'Impossible de contacter le serveur';
}