<?php
require_once('App/lib/getSchedules.php');

$schedules = getSchedules($pdo);
?>

<footer class="py-3 my-4">
            <div class="row text-center">
                <div class="col-lg-6">
                    <h2 class="m-5">Horaires d'ouvertures</h2>
                    <div>
                        <ul>
                            <?php foreach($schedules as $horaire){ //?>
                                <li class="mb-2"><?=$horaire['day']?> : <?=$horaire['morning']?> , <?=$horaire['afternoon']?></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="m-5">Coordonnées</h2>
                    <div>
                        <p>
                            Garage V.PARROT <br>
                            123 Rue de l'imaginaire, 31555 Toulouse
                        </p>
                        <p>
                            06-XX-XX-XX-XX <br>
                            contact@garagevparrot.fr
                        </p>
                    </div>
                </div>
            </div>
            <ul class="nav justify-content-center border-bottom py-3 my-3">
                <li class="nav-item m-2"><a href="#">Accueil</a></li>
                <li class="nav-item m-2"><a href="#">Véhicules</a></li>
                <li class="nav-item m-2"><a href="#">Connexion</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2024 Garage V.Parrot, Inc</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>