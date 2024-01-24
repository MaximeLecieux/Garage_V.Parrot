<?php
require_once('templates/header.php');
require_once('App/lib/modifyUser.php');

$errors = [];
$messages = [];

if(isset($_POST['modifyUser'])){
    if($_POST['idUser'] != null){
        $res = modifyUser($pdo, $_POST['idUser'], $_POST['email'], $_POST['modifyPassword'], $_POST['role']);
    } else {
        $errors[] = 'Veuillez sélectionner un utilisateur';
    }

    if($res){
        $messages[] = 'L\'utilisateur a bien été modifié';
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

    <div id="message">

    </div>

    <h2 class="m-5">Modifier un service</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST">
                <div class="mb-3">
                    <label for="idUser" class="form-label">Sélectionner un utilisateur</label>
                    <select class="form-select" id="idUser" name="idUser">
                        <option selected disabled>Veuillez sélectionner un utilisateur</option>
                            <!-- Options is genereted by getUsers.js -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" name="email" id="email" disabled>
                </div>
                <div class="mb-3">
                    <label for="modifyPassword" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="modifyPassword" id="modifyPassword" disabled>
                    <div id="messagePassword" class="mt-1">
                        <!-- Password is verify by verifyPassord.js and return a error if is not valid -->
                    </div>
                </div>
                <div  class="mb-3">
                    <label for="role" class="form-label">Sélectionner un rôle</label>
                    <select class="form-select" name="role" id="role" required disabled>
                        <option value="employé">Employé</option>
                        <option value="administrateur">Administrateur</option>                   
                    </select>
                </div>
                <button type="submit" name="modifyUser" id="btnModifyUser" class="btn btn-lg my-5"> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_users.php">Revenir à la page d'administration des comptes</a>
        </div>
    </div>
</div>

<script src="App/script/getUsers.js"></script>
<script src="App/script/selectUser.js"></script>
<script src="App/script/verifyModifyPassword.js"></script>

<?php
require_once('templates/footer.php');
?>