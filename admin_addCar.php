<?php
require_once('templates/header.php');
if(!$_SESSION || isset($_SESSION['user'])){

require_once('App/lib/addService.php');
require_once('App/lib/addCar.php');

$errors = [];
$messages = [];

if(isset($_POST['addCar'])){
    if(isset($_FILES['img_one']['tmp_name']) && $_FILES['img_one']['tmp_name'] != ''){
        $firstImage = uniqid().'-'.$_FILES['img_one']['name'];
        move_uploaded_file($_FILES['img_one']['tmp_name'], 'uploads/images/cars/'.$firstImage);
    }
    if(isset($_FILES['multiple_image']['tmp_name'])){
        for($i=0; $i<count($_FILES['multiple_image']['name']); $i++){
            $fileName = uniqid().'-'.$_FILES['multiple_image']['name'][$i];
            move_uploaded_file($_FILES['multiple_image']['tmp_name'][$i], 'uploads/images/cars/'.$fileName);
        }
    }
    
    $images = implode(', ', $_FILES['multiple_image']['name']);

    $res = addCar($pdo, $_POST['name'], $_POST['price'], $_POST['brand'], $_POST['model'], $_POST['year'], $_POST['mileage'], $_POST['color'], $_POST['nb_door'], $_POST['gearbox'], $_POST['fuel'], $firstImage, $images);
    
    if($res){
        $messages[] = 'Le véhicule a bien été ajouté';
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

    <h2 class="m-5">Ajouter un véhicule</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Indiquer un nom</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Indiquer un prix</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Indiquer la marque</label>
                    <input type="text" class="form-control" name="brand" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Indiquer le model</label>
                    <input type="text" class="form-control" name="model" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Indiquer l'année</label>
                    <input type="number" class="form-control" name="year" min="1900" max="2099" step="1" required>
                </div>
                <div class="mb-3">
                    <label for="mileage" class="form-label">Indiquer le kilométrage</label>
                    <input type="number" class="form-control" name="mileage" required>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Indiquer la couleur</label>
                    <input type="text" class="form-control" name="color" required>
                </div>
                <div class="mb-3">
                    <label for="nb_door" class="form-label">Indiquer le nombre de portes</label>
                    <select class="form-select" name="nb_door" required>
                        <option selected disabled value="">Veuillez choisir un nombre de porte</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gearbox" class="form-label">Indiquer la boite de vitesse</label>
                    <select class="form-select" name="gearbox" required>
                        <option selected disabled value="">Veuillez choisir la boite de vitesse</option>
                        <option value="Manuelle">Manuelle</option>
                        <option value="Automatique">Automatique</option>
                        <option value="Séquentielles">Séquentielles</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fuel" class="form-label">Indiquer le carburant</label>
                    <select class="form-select" name="fuel" required>
                        <option selected disabled value="">Veuillez choisir un carburant</option>
                        <option value="Essence">Essence</option>
                        <option value="Gazole">Gazole</option>
                        <option value="Electrique">Electrique</option>
                    </select>
                </div>
                <div  class="mb-3">
                    <label for="img_one" class="form-label">Sélectionner l'image de présentation</label>
                    <input type="file" class="form-control" name="img_one" required accept=".jpeg, .jpg, .png, .webp">
                </div>
                <div  class="mb-3">
                    <label for="multiple_image[]" class="form-label">Sélectionner des images du véhicule</span>
                    <input type="file" class="form-control" name="multiple_image[]" accept=".jpeg, .jpg, .png, .webp" multiple>
                </div>
                <button type="submit" name="addCar" class="btn btn-lg my-5"> Valider </button>
            </form>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="administration_cars.php">Revenir à la page d'administration des services</a>
        </div>
    </div>
</div>


<?php
require_once('templates/footer.php');

    } else {
        echo '<div class="alert alert-danger text-center">
                <p>Vous n\'avez pas l\'autorisation d\'accéder à cette page</p>
              </div>
        ';
    }

?>