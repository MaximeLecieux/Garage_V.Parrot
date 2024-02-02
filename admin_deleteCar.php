<?php
require_once('templates/header.php');
if(!$_SESSION || isset($_SESSION['user'])){

require_once('App/lib/deleteCar.php');

$errors = [];
$messages = [];

if(isset($_POST['deleteCar'])){
    if($_POST['idCar'] != null){
        $res = deleteCar($pdo, $_POST['idCar']);

        if($res){
            $messages[] = 'Le véhicule a bien été supprimé';
        } else {
            $errors[] = 'Une erreur s\'est produite';
        }
    } else {
        $errors[] = 'Veuillez sélectionner un véhicule';
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

    <h2 class="m-5">Supprimer un véhicule</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST">
                <div class="mb-3">
                    <label for="idCar" class="form-label">Utilisateur</label>
                    <select class="form-select" id="idCar" name="idCar">
                        <option selected disabled>Veuillez choisir un véhicule</option>
                       <!-- Options is genereted by getCars.js -->
                    </select>
                </div>
                <button type="submit" name="deleteCar" class="btn btn-lg my-5"> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_cars.php">Revenir à la page d'administration des utilisateurs</a>
        </div>
    </div>
</div>

<script src="App/script/getCars.js"></script>

<?php
require_once('templates/footer.php');
    } else {
        echo '<div class="alert alert-danger text-center">
                <p>Vous n\'avez pas l\'autorisation d\'accéder à cette page</p>
              </div>
        ';
    }
?>