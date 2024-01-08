<?php
require_once('templates/header.php');

require_once('App/lib/getServices.php');
require_once('App/lib/getOpinions.php');

$services = getServices($pdo);
$opinions = getOpinions($pdo);

?>
        <section class="position-relative first-section">
            <div class="px-4 py-5 text-center position-absolute top-50 start-50 translate-middle text-white">
                <h1 class="display-5 fw-bold">Garage V.Parrot</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="text-center">
                <h2 class="m-5">Nos services</h2>
                <div class="mb-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, aliquid praesentium! Ut, nesciunt harum debitis aspernatur voluptate animi nam vero exercitationem, voluptatibus possimus distinctio quasi neque nemo iusto qui provident.
                    </p>
                </div>
                <div class="row justify-content-center m-0">
                    <?php foreach($services as $service) { //Services get from database?>
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="<?=$service['img']?>" alt="<?=$service['name']?>">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center"><?=$service['name']?></h3>
                                <p class="card-text">
                                    <?=$service['description']?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section>
            <div class="text-center">
                <h2 class="m-5">Nos voitures d'occasion</h2>
                <div class="mb-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, aliquid praesentium! Ut, nesciunt harum debitis aspernatur voluptate animi nam vero exercitationem, voluptatibus possimus distinctio quasi neque nemo iusto qui provident.
                    </p>
                </div>
                <div class="row justify-content-center m-0">
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="uploads/images/mercedes.jpg" alt="Changement de pneu">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center">Véhicule 1</h3>
                                <p class="card-text">Model</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Année de mise en circulation</li>
                                    <li class="list-group-item">Kilométrage</li>
                                    <li class="list-group-item">Prix</li>
                                </ul>
                                <a href="#" class="btn mt-2">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="uploads/images/ferrari.jpg" alt="Changement de pneu">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center">Véhicule 2</h3>
                                <p class="card-text">Model</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Année de mise en circulation</li>
                                    <li class="list-group-item">Kilométrage</li>
                                    <li class="list-group-item">Prix</li>
                                </ul>
                                <a href="#" class="btn mt-2">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="uploads/images/audi.jpg" alt="Changement de pneu">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center">Véhicule 3</h3>
                                <p class="card-text">Model</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Année de mise en circulation</li>
                                    <li class="list-group-item">Kilométrage</li>
                                    <li class="list-group-item">Prix</li>
                                </ul>
                                <a href="#" class="btn mt-2">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg my-5" href="#">Voir toutes nos offres</a>
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
                                <p>Ceci est un commentaire positif</p>
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
                <a class="btn btn-lg my-5" href="#">Laisser nous un commentaire</a>
            </div>
        </section>

<?php
require_once('templates/footer.php');
?>