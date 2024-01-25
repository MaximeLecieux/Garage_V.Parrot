<?php
require_once('templates/header.php');
if(!$_SESSION || isset($_SESSION['user'])){
    if($_SESSION['role']['role'] != 'administrateur'){
        echo '<div class="alert alert-danger text-center">
                <p>Vous n\'avez pas l\'autorisation d\'accéder à cette page</p>
              </div>
        ';
    } else {

require_once('App/lib/deleteUser.php');

$errors = [];
$messages = [];

if(isset($_POST['deleteUser'])){
    if($_POST['idUser'] != null){
        $res = deleteUser($pdo, $_POST['idUser']);

        if($res){
            $messages[] = 'L\'utilisateur a bien été supprimé';
        } else {
            $errors[] = 'Une erreur s\'est produite';
        }
    } else {
        $errors[] = 'Veuillez sélectionner un utilisateur';
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

    <h2 class="m-5">Supprimer un utilisateur</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST">
                <div class="mb-3">
                    <label for="idUser" class="form-label">Utilisateur</label>
                    <select class="form-select" id="idUser" name="idUser">
                        <option selected disabled>Veuillez choisir un utilisateur</option>
                       <!-- Options is genereted by getUsers.js -->
                    </select>
                </div>
                <button type="submit" name="deleteUser" class="btn btn-lg my-5"> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_users.php">Revenir à la page d'administration des utilisateurs</a>
        </div>
    </div>
</div>

<script src="App/script/getUsers.js"></script>

<?php
require_once('templates/footer.php');
    }
}
?>