<?php
require_once('templates/header.php');
require_once('App/lib/getServices.php');

$services = getServices($pdo);

?>
<div class="text-center">

    <h2 class="m-5">Administration des services</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <h3 class="mb-5">Services disponibles sur la page d'accueil</h3>
            <?php 
                if(count($services) > 0){
                    foreach($services as $service){
                    echo $service;
                    }
                } else {
                    echo '
                        <div class="alert alert-danger">
                            <p>Aucun service disponible</p>
                        </div>
                    ';
                }
            ?>
        </div>

        <div class="m-5">
            <a class="btn btn-primary" href="#">Ajouter un nouveau service</a>
            <a class="btn btn-warning" href="#">Modifier un service existant</a>
            <a class="btn btn-danger" href="#">Supprimer un service</a>
        </div>
    </div>
</div>


<?php
require_once('templates/footer.php');
?>