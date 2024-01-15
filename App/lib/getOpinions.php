<?php
require_once('pdo.php');

function getOpinions(PDO $pdo){
    $query = $pdo->prepare("SELECT commentary, note, name FROM Opinions WHERE status = 'valid';");
    $query->execute();
    return $query->fetchAll();
}