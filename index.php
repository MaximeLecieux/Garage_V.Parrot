<?php
require_once('templates/header.php');

require_once('App/lib/getOpinions.php');
require_once('App/lib/getCarsLimit.php');

$opinions = getValidsOpinions($pdo);
$cars = getCarsLimit($pdo);

?>
        <section class="position-relative first-section">
            <div class="px-4 py-5 text-center position-absolute top-50 start-50 translate-middle text-white">
                <h1 class="display-5 fw-bold">Garage V.Parrot</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Bonjour et bienvenu sur le site du garage de Vincent Parrot. Polyvalents, nos garagistes mécaniciens sont qualifiés et compétents pour intervenir sur n’importe quel type et marque de véhicule. N'hésitez pas à nous contacter ! </p>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="text-center">
                <h2 class="m-5">Nos services</h2>
                <div class="mb-5">
                    <p>
                    Fort de nos 15 années d'expérience dans la réparation automobile, nous vous proposons une large gamme de services pour garantir les performances et la sécurité de vos véhicules.
                    </p>
                </div>
                <div class="row justify-content-center m-0 services">
                        <!-- Each services is display by getServices.js -->
                </div>
            </div>
        </section>
        <section>
            <div class="text-center">
                <h2 class="m-5">Nos voitures d'occasion</h2>
                <div class="mb-5">
                    <p>
                        Nous mettons également en vente des voitures d'occasion de bonnes qualités, n'hésitez pas à farfouiller notre catalogue !
                    </p>
                </div>
                <div class="row justify-content-center m-0">
                    <?php
                        if($cars > 0){
                            foreach($cars as $element){ ?>
                                <div class="col-lg-3 col-md-4 mx-2 my-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <img class="card-img-top img-service" src="uploads/images/cars/<?=$element['first_img']?>" alt="<?=$element['name']?>">
                                        </div>
                                        <div class="card-body ">
                                            <h3 class="card-title center"><?=$element['name']?></h3>
                                            <p class="card-text"><?=$element['model']?></p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><?=$element['year']?></li>
                                                <li class="list-group-item"><?=$element['mileage']?> km</li>
                                                <li class="list-group-item"><?=$element['price']?> €</li>
                                            </ul>
                                            <a href="car.php?idCar=<?=$element['idCar']?>" class="btn mt-2">Détails</a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }   
                        } else { ?>
    
                                <div class="alert alert-danger text-center">
                                    <p>Aucun véhicule n'est en vente pour le moment</p>
                                </div>
                    <?php           
                        }
                    ?>
                </div>
                <a class="btn btn-lg my-5" href="exposition_cars.php">Voir toutes nos offres</a>
            </div>
        </section>
        <section>
            <div class="text-center">
                <h2 class="m-5">Ils nous ont fait confiance</h2>

                <div id="carouselCommentary" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <div class="d-flex border-bottom mb-2 pb-2">
                                <div class="p-2 me-auto">
                                    <span>Maxime LECIEUX</span>
                                </div>
                                <div class="p-2">
                                    <img src="assets/images/star.svg" alt="">
                                    <img src="assets/images/star.svg" alt="">
                                    <img src="assets/images/star.svg" alt="">
                                    <img src="assets/images/star.svg" alt="">
                                    <img src="assets/images/star.svg" alt="">
                                </div>
                            </div>
                            <div>
                                <p>Excellent service, accueil parfait.</p>
                            </div>
                        </div>
                        <?php foreach($opinions as $opinion) { //Opinions get from database?>
                            <div class="carousel-item" data-bs-interval="4500">
                                <div class="d-flex border-bottom mb-2 pb-2">
                                    <div class="p-2 me-auto">
                                        <span><?=$opinion['name']?></span>
                                    </div>
                                    <div class="p-2">
                                        <?php for($i=0; $i< $opinion['note']; $i++ ){?>
                                        <img src="assets/images/star.svg" alt="note">
                                        <?php }?>
                                    </div>
                                </div>
                                <div>
                                    <p><?=$opinion['commentary']?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <a class="btn btn-lg my-5" href="commentary.php">Laisser nous un commentaire</a>
            </div>
        </section>

        <script src="App/script/getServices.js"></script>

<?php
require_once('templates/footer.php');
?>