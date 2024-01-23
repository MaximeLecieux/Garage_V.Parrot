<?php
require_once('templates/header.php');
require_once('App/lib/deleteService.php');

$errors = [];
$messages = [];

if(isset($_POST['deleteService'])){
    $res = deleteService($pdo, $_POST['idService']);

    if($res){
        $messages[] = 'Le service a bien été supprimé';
    } else {
        $errors[] = 'Une erreur s\'est produite';
    }
}

?>
<div class="text-center">

    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success">
            <?=$message; ?>
        </div>
    <?php } ?>

    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger">
            <?=$error; ?>
        </div>
    <?php } ?>

    <h2 class="m-5">Supprimer un service</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST">
                <div class="mb-3">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" id="idService" name="idService">
                        <option selected disabled>Veuillez choisir un service</option>
                       <!-- Options is genereted by getServices.js -->
                    </select>
                </div>
                <button type="submit" name="deleteService" class="btn btn-lg my-5"> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_services.php">Revenir à la page d'administration des services</a>
        </div>
    </div>
</div>

<script src="App/script/selectService.js"></script>

<script src="App/script/getServices.js"></script>

<?php
require_once('templates/footer.php');
?>