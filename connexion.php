<?php
require_once('templates/header.php');
require_once('App/lib/verifyUser.php');

    $errors = [];

    if (isset($_POST['loginUser'])) {

        $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);
        

        if ($user) {
            $_SESSION['user'] = ['email' => $user['email']];
            $_SESSION['role'] = ['role' => $user['type']];
            header('location: index.php');
        } else {
            $errors[] = 'Identifiant ou mot de passe incorrect';
        }

    }
?>

<div class="text-center">

    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger">
            <?=$error; ?>
        </div>
    <?php } ?>

    <h2 class="m-5">Connexion</h2>

    <div class="m-5">
        <form method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Identifiant</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" required>            
            </div>
            <button type="submit" name="loginUser" class="btn btn-lg my-5"> Se connecter </button>
        </form>
    </div>
</div>

<?php
require_once('templates/footer.php');
?>