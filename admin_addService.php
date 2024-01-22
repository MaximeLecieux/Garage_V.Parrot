<?php
require_once('templates/header.php');
require_once('App/lib/addService.php');

$errors = [];
$messages = [];

if(isset($_POST['addService'])){
    $fileName = null;
    if(isset($_FILES['img']['tmp_name']) && $_FILES['img']['tmp_name'] != ''){
        $checkImage = getimagesize($_FILES['img']['tmp_name']);
        if($checkImage !== false){
            $fileName = uniqid().'-'.$_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/images/services/'.$fileName);
        } else {
            $errors[] = 'Le fichier doit être une image';
        }
    }

    if(!$errors){
        $res = addService($pdo, $_POST['title'], $_POST['description'], $fileName);

        if($res){
            $messages[] = 'Le service a bien été ajouté';
        } else {
            $errors[] = 'Une erreur s\'est produite';
        }
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

    <h2 class="m-5">Ajouter un service</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Indiquer un titre</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Indiquer une description</label>
                    <textarea class="form-control" name="description" rows="3" required></textarea>
                </div>
                <div  class="mb-3">
                    <label for="img" class="form-label">Sélectionner l'image</label>
                    <input type="file" class="form-control" name="img" required>
                </div>
                <button type="submit" name="addService" class="btn btn-lg my-5"> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_services.php">Revenir à la page d'administration des services</a>
        </div>
    </div>
</div>


<?php
require_once('templates/footer.php');
?>