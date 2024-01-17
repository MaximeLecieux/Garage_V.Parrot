<?php
require_once('pdo.php');

function validateOpinion(PDO $pdo, $idOpinion){
    $query = $pdo->prepare("UPDATE Opinions SET status = 'valid' WHERE idOpinion = :idOpinion");
    $query->bindParam(':idOpinion', $idOpinion, PDO::PARAM_INT);
    return $query->execute();
}