<?php
require_once('pdo.php');

function getValidsOpinions(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Opinions WHERE status = 'valid';");
    $query->execute();
    return $query->fetchAll();
}

function getPendingOpinions(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Opinions WHERE status = 'pending';");
    $query->execute();
    return $query->fetchAll();
}