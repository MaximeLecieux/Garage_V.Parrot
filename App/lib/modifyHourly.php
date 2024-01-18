<?php
require_once('pdo.php');

if(isset($_POST)){
    modifyHourly($pdo, $_POST['day'], $_POST['morning'], $_POST['afternoon']); 
}

function modifyHourly(PDO $pdo, string $day, string $morning, string $afternoon){
    $sql = "UPDATE Schedules SET morning = :morning, afternoon = :afternoon WHERE day = :day;";
    $query = $pdo->prepare($sql);
    $query->bindParam(':day', $day, PDO::PARAM_STR);
    $query->bindParam(':morning', $morning, PDO::PARAM_STR);
    $query->bindParam(':afternoon', $afternoon, PDO::PARAM_STR);
    return $query->execute();
}