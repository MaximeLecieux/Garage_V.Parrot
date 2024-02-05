<?php
require_once('templates/header.php');
require_once('App/lib/getCarElementsById.php');



$idCar = $_GET['idCar'];
$car = getCarElementById($pdo, $idCar);
$imgPath = explode(", ", $car["images_path"]);
if($car) {

?>
<div class="text-center">
    <h2 class="m-5">Présentation du véhicule <?=$car['name']?></h2>

    <div class="my-2">
        <div id="carouselCar" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="uploads/images/cars/<?=$car['first_img']?>" class="d-block w-100" alt="...">
                </div>
                <?php if($imgPath[0] != null){
                    for($i = 0; $i < count($imgPath); $i++){ ?>
                    <div class="carousel-item">
                        <img src="uploads/images/cars/<?=$imgPath[$i]?>" class="d-block w-100" alt="...">
                    </div>
                <?php }
                    } else {?>
                    <div class="carousel-item">
                        <span>Aucune autre photo n'est disponible pour le moment</span>
                    </div>
                    <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCar" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCar" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="card m-5">
        <div class="card-header">
            Caractéristiques
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Marque : <?=$car['brand']?></li>
            <li class="list-group-item">Model : <?=$car['model']?></li>
            <li class="list-group-item">Année : <?=$car['year']?></li>
            <li class="list-group-item">kilométrage : <?=$car['mileage']?> km</li>
            <li class="list-group-item">Couleur : <?=$car['color']?></li>
            <li class="list-group-item">Nombre de porte : <?=$car['nb_door']?></li>
            <li class="list-group-item">Boite de vitesse : <?=$car['gearbox']?></li>
            <li class="list-group-item">Carburant : <?=$car['fuel']?></li>
            <li class="list-group-item">Prix : <?=$car['price']?> €</li>
        </ul>
    </div>
    <div class="my-2 mx-5">
        <span>Vous souhaitez acheter cette voiture ? Avoir des plus de renseignement ? Contacter-nous par téléphone ou avec le formulaire de contact ci-dessous</span>
        <div class="m-5">
            <!-- The form does not communicate at the moment -->
            <form method="POST">
            <div class="mb-3">
                <label for="subject" class="form-label">Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" value="<?=$car['name']?>" disabled>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="surname" id="surname" placeholder="DUPONT">
                <label for="surname">Nom</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Jean">
                <label for="name">Prénom</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="email" id="email" placeholder="dupont.jean@email.fr">
                <label for="email">Adresse mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="subject" id="tel" placeholder="0123456789">
                <label for="tel">Téléphone</label>
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Posez-nous vos questions ici" id="message"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <button type="submit" class="btn">Soumettre ma demande</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once('templates/footer.php');

} else {
    echo '<div class="alert alert-danger text-center">
                <p>Aucune voiture ne correspond à votre recherche</p>
              </div>
        ';
}
?>