<?php
require_once('templates/header.php');
if(!$_SESSION || isset($_SESSION['user'])){
    if($_SESSION['role']['role'] != 'administrateur'){
        echo '<div class="alert alert-danger text-center">
                <p>Vous n\'avez pas l\'autorisation d\'accéder à cette page</p>
              </div>
        ';
    } else {

?>
<div class="text-center">

    <div id="message">

    </div>

    <h2 class="m-5">Administration des voitures d'exposition</h2>

    <div class="administration-panel m-4">
        <div class="m-5">
            <a class="btn btn-primary" href="admin_addCar.php">Ajouter un nouveau véhicule</a>
            <a class="btn btn-warning" href="admin_modifyCar.php">Modifier un véhicule existant</a>
            <a class="btn btn-danger" href="admin_deleteCar.php">Supprimer un véhicule</a>
        </div>
        <div class="mt-2">
            <h3>Véhicules actuellement en exposition</h3>
            <div class="list-cars row justify-content-center m-0"></div>
        </div>
    </div>
</div>

<script src="App/script/getCars.js"></script>


<?php
require_once('templates/footer.php');
    }
}
?>