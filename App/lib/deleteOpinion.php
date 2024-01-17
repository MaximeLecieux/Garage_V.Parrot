<?php
require_once('pdo.php');

function deleteOpinion(PDO $pdo, $idOpinion){
    $query = $pdo->prepare("DELETE FROM Opinions WHERE idOpinion = :idOpinion");
    $query->bindParam(':idOpinion', $idOpinion, PDO::PARAM_INT);
    return $query->execute();
}