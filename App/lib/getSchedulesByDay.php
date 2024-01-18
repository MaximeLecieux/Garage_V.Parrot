<?php

require_once('pdo.php');

if(isset($_POST)){
    getSchedulesByDay($pdo, $_POST['day']);
}
function getSchedulesByDay(PDO $pdo, $day){ 
    $query = $pdo->prepare("SELECT morning, afternoon FROM Schedules WHERE day = :day;");
    $query->bindParam(':day', $day, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(getSchedulesByDay($pdo, $_POST['day']));