<?php
require_once('pdo.php');

function addOpinion(PDO $pdo, string $commentary, int $note, string $status, string $name){
    $query = $pdo->prepare("INSERT INTO Opinions (commentary, note, status, name)  VALUES (:commentary, :note, :status, :name);");
    $query->bindParam(':commentary', $commentary, PDO::PARAM_STR);
    $query->bindParam(':note', $note, PDO::PARAM_INT);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    return $query->execute();
}