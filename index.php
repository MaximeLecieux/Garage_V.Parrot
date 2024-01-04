<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Garage V.Parrot</title>
</head>
<body>
    <div class="container-fluid p-0">
        <header>
            <nav class="navbar navbar-expand-md border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.svg" width="200" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item m-2"><a href="#">Accueil</a></li>
                                <li class="nav-item m-2"><a href="#services">Services</a></li>
                                <li class="nav-item m-2"><a href="#">Horaires</a></li>
                                <li class="nav-item m-2"><a href="#">Véhicules</a></li>
                                <li class="nav-item m-2"><a href="#">Connexion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
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
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="uploads/images/1.jpg" alt="Changement de pneu">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center">Entretient du véhicule</h3>
                                <p class="card-text">
                                Notre équipe vous proportionne un service de qualité pour l'entretient de votre voiture.    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="uploads/images/2.jpg" alt="Changement de pneu">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center">Service du nettoyage</h3>
                                <p class="card-text">
                                Notre équipe vous proportionne un service de qualité pour le nettoyage votre voiture.    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mx-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top img-service" src="uploads/images/3.jpg" alt="Changement de pneu">
                            </div>
                            <div class="card-body ">
                                <h3 class="card-title center">Contrôle technique</h3>
                                <p class="card-text">
                                Notre équipe vous proportionne un service de qualité pour le contrôle technique de votre voiture.    </p>
                            </div>
                        </div>
                    </div>
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
                        <div class="carousel-item active">
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
                        <div class="carousel-item">
                            <div class="d-flex border-bottom mb-2 pb-2">
                                <div class="p-2 me-auto">
                                    <span>Camille MATHIEU</span>
                                </div>
                                <div class="p-2">
                                    <img src="assets/images/star.svg" alt="">
                                    <img src="assets/images/star.svg" alt="">
                                    <img src="assets/images/star.svg" alt="">
                                </div>
                            </div>
                            <div>
                                <p>Ceci est un commentaire positif</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex border-bottom mb-2 pb-2">
                                <div class="p-2 me-auto">
                                    <span>Dominique BAILLY</span>
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
                    </div>
                </div>


                <a class="btn btn-lg my-5" href="#">Laisser nous un commentaire</a>
            </div>
        </section>


        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item m-2"><a href="#">Accueil</a></li>
                <li class="nav-item m-2"><a href="#">Services</a></li>
                <li class="nav-item m-2"><a href="#">Horaires</a></li>
                <li class="nav-item m-2"><a href="#">Véhicules</a></li>
                <li class="nav-item m-2"><a href="#">Connexion</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2024 Garage V.Parrot, Inc</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>