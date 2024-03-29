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

    <h2 class="m-5">Administration des services</h2>

    <div class="administration-panel m-4">
        <h3 class="mb-5">Services disponibles sur la page d'accueil</h3>
        <div class="row justify-content-center m-0 services">
            
            <!-- Each services is display by getServices.js -->
        </div>

        <div class="m-5">
            <a class="btn btn-primary" href="admin_addService.php">Ajouter un nouveau service</a>
            <a class="btn btn-warning" href="admin_modifyService.php">Modifier un service existant</a>
            <a class="btn btn-danger" href="admin_deleteService.php">Supprimer un service</a>
        </div>
    </div>
</div>

<script src="App/script/getServices.js"></script>

<?php
require_once('templates/footer.php');
    }
}
?>