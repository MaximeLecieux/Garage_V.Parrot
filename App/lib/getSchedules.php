<?php
require_once('pdo.php');

function getSchedules(PDO $pdo){
    $query = $pdo->prepare("SELECT * from Schedules;");
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(getSchedules($pdo));