<?php
require_once('pdo.php');

function getSchedules(PDO $pdo){
    $query = $pdo->prepare("SELECT * from Schedules ORDER BY id ASC;");
    $query->execute();
    return $query->fetchAll();
}