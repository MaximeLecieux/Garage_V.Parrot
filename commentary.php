<?php
require_once('templates/header.php');
require_once('App/lib/addOpinion.php');

$errors = [];
$messages = [];

if(isset($_POST['addOpinion'])){
    $opinion = addOpinion($pdo, $_POST['commentary'], $_POST['note'], 'pending', $_POST['name']);
    
    if($opinion){
        $messages[] = 'Merci pour votre commentaire !';
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

    <h2 class="m-5">Laisser nous un commentaire !</h2>
    <div class="m-5">
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Votre nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Dupont" required>
            </div>
            <div class="mb-3">
                <label for="commentary" class="form-label">Dites-nous tout</label>
                <textarea class="form-control" name="commentary" id="commentary" rows="3" maxlength="255" placeholder="Maximum 255 caractères" required></textarea>
            </div>
            <div  class="mb-3">
                <label for="note" class="form-label">Note</label>
                <select class="form-select" name="note" id="note" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" name="addOpinion" class="btn btn-lg my-5"> Valider </button>
        </form>
    </div>
</div>
<?php
require_once('templates/footer.php');
?>