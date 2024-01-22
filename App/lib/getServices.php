<?php
require_once('pdo.php');

function getServices(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Services;");
    $query->execute();
    $result = $query->fetchAll();

    if($result > 0){
        $output = [];
        foreach($result as $row){
            $output[] = '
            <div class="col-lg-3 col-md-4 mx-2 my-2">
                <div class="card">
                    <div class="card-header">
                        <img class="card-img-top img-service" src="'.$row['img'].'" alt="'.$row['name'].'">
                    </div>
                    <div class="card-body ">
                        <h3 class="card-title center">'.$row['name'].'</h3>
                        <p class="card-text">'.$row['description'].'</p>
                    </div>
                </div>
            </div>
        ';
        }
        return $output;
    }
}