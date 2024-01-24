<?php
require_once('templates/header.php');
require_once('App/lib/modifyService.php');

$errors = [];
$messages = [];

if(isset($_POST['modifyService'])){
    if($_POST['idService'] != null) {
        $fileName = null;
        if(isset($_FILES['img']['tmp_name']) && $_FILES['img']['tmp_name'] != ''){
            $checkImage = getimagesize($_FILES['img']['tmp_name']);
            if($checkImage !== false){
                $fileName = uniqid().'-'.$_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/images/services/'.$fileName);
            } else {
                $errors[] = 'Le fichier doit être une image';
            }
        } else {
            $res = modifyService($pdo, $_POST['idService'], $_POST['title'], $_POST['description'], $fileName);
        }
    
        if(!$errors){
            $res = modifyService($pdo, $_POST['idService'], $_POST['title'], $_POST['description'], $fileName);
    
            if($res){
                $messages[] = 'Le service a bien été modifié';
            } else {
                $errors[] = 'Une erreur s\'est produite';
            }
        } 
    } else {
        $errors[] = 'Veuillez sélectionner un service';
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

    <h2 class="m-5">Modifier un service</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" id="idService" name="idService">
                        <option selected disabled>Veuillez choisir un service</option>
                       <!-- Options is genereted by getServices.js -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" name="title" id="title" disabled>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" disabled></textarea>
                </div>
                <div  class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" name="img" id="img" disabled>
                </div>
                <button type="submit" name="modifyService" class="btn btn-lg my-5"> Valider </button>
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