<?php

require_once('session.php');

if(isset($_SESSION['role'])){
    setNavbar($_SESSION['role']);
}


function setNavbar($role){
    if($role['role'] === 'administrateur'){
        $output = '
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item m-2 d-flex align-items-center"><a href="index.php">Accueil</a></li>
                    <li class="nav-item m-2 d-flex align-items-center">
                        <a href="administration_schedules.php">Horaires</a>
                    </li>
                    <li class="nav-item m-2 d-flex align-items-center">
                        <a href="administration_commentary.php">Commentaires</a>
                    </li>
                    <li class="nav-item m-2 d-flex align-items-center">
                        <a href="exposition_cars.php">Exposition véhicules</a>
                    </li>
                    <li class="nav-item m-2">
                        <div class="dropdown-center ml-1">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Véhicules
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="administration_cars.php">Administration</a></li>
                                <li><a class="dropdown-item" href="admin_addCar.php">Ajouter un véhicule</a></li>
                                <li><a class="dropdown-item" href="admin_modifyCar.php">Modifier un véhicule</a></li>
                                <li><a class="dropdown-item" href="admin_deleteCar.php">Supprimer un véhicule</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                        <div class="dropdown-center ml-1">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="administration_services.php">Administration</a></li>
                                <li><a class="dropdown-item" href="admin_addService.php">Ajouter un service</a></li>
                                <li><a class="dropdown-item" href="admin_modifyService.php">Modifier un service</a></li>
                                <li><a class="dropdown-item" href="admin_deleteService.php">Supprimer un service</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                        <div class="dropdown-center ml-1">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Comptes
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="administration_users.php">Administration</a></li>
                                <li><a class="dropdown-item" href="admin_addUser.php">Ajouter un utilisateur</a></li>
                                <li><a class="dropdown-item" href="admin_modifyUser.php">Modifier un utilisateur</a></li>
                                <li><a class="dropdown-item" href="admin_deleteUser.php">Supprimer un utilisateur</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>Administrateur</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
                                <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                    </li>
                </ul>
            </div>
        ';
        return $output;
    } else if ($role['role'] === 'employé'){
        $output = '
        <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item m-2 d-flex align-items-center"><a href="index.php">Accueil</a></li>
                    <li class="nav-item m-2 d-flex align-items-center">
                        <a href="exposition_cars.php">Exposition véhicules</a>
                    </li>
                    <li class="nav-item m-2">
                        <div class="dropdown-center ml-1">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Véhicules
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="administration_cars.php">Administration</a></li>
                                <li><a class="dropdown-item" href="admin_addCar.php">Ajouter un véhicule</a></li>
                                <li><a class="dropdown-item" href="admin_modifyCar.php">Modifier un véhicule</a></li>
                                <li><a class="dropdown-item" href="admin_deleteCar.php">Supprimer un véhicule</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>Employé</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
                                <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item m-2">
                    </li>
                </ul>
            </div>
        ';
        return $output;
    }
}