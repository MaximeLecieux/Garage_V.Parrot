<?php
require_once('templates/header.php');
require_once('App/lib/addUser.php');

$errors = [];
$messages = [];

if(isset($_POST['addUser'])){

    $res = addUser($pdo, $_POST['email'], $_POST['password'], $_POST['role']);

    if($res){
        $messages[] = 'L\'utilisateur a bien été ajouté';
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

    <h2 class="m-5">Ajouter un utilisateur</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Indiquer une adresse mail</label>
                    <input type="email" class="form-control" name="email" placeholder="utilisateur@garagevparrot.fr" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Indiquer un mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div id="messagePassword" class="mt-1">
                        <!-- Password is verify by verifyPassord.js and return a error if is not valid -->
                    </div>
                </div>
                <div  class="mb-3">
                    <label for="role" class="form-label">Sélectionner un rôle</label>
                    <select class="form-select" name="role" required>
                        <option selected disabled>Sélectionner un rôle</option>
                        <option value="administrateur">Administrateur</option>
                        <option value="employé">Employé</option>
                    </select>
                </div>
                <button type="submit" name="addUser" id="btnAddUser" class="btn btn-lg my-5" disabled> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_users.php">Revenir à la page d'administration des utilisateurs</a>
        </div>
    </div>
</div>

<script src="App/script/verifyPasswordUser.js"></script>

<?php
require_once('templates/footer.php');
?>