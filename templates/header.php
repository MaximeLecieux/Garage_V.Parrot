<?php
require_once('App/lib/session.php');
require_once('App/lib/setNavbar.php');

$navbar = setNavbar($_SESSION['role']);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Garage V.Parrot</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-0">
        <header>
            <nav class="navbar navbar-expand-md border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
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
                            <?php if(isset($_SESSION['user'])){ 
                                    echo $navbar;
                                 } else { ?>
                                    <!-- Default navbar if no session is active  -->
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                            <li class="nav-item m-2"><a href="index.php">Accueil</a></li>
                                            <li class="nav-item m-2"><a href="index.php#services">Services</a></li>
                                            <li class="nav-item m-2"><a href="#schedules">Horaires</a></li>
                                            <li class="nav-item m-2"><a href="exposition_cars.php">Véhicules</a></li>
                                            <li class="nav-item m-2"><a href="connexion.php">Connexion</a></li>
                                        </ul>
                                    </div>
                            <?php } ?>
                    </div>
                </div>
            </nav>
        </header>