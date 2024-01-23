<?php

require_once('pdo.php');

if(isset($_POST)){
    getServiceById($pdo, $_POST['idService']);
}
function getServiceById(PDO $pdo, $idService){ 
    $query = $pdo->prepare("SELECT * FROM Services WHERE idService = :idService;");
    $query->bindParam(':idService', $idService, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll();
}

echo json_encode(getServiceById($pdo, $_POST['idService']));