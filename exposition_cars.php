<?php
require_once('templates/header.php');

require_once('App/lib/getMaxPriceCars.php');
require_once('App/lib/getMinPriceCars.php');
require_once('App/lib/getMinYearCars.php');
require_once('App/lib/getMaxYearCars.php');
require_once('App/lib/getMinMileageCars.php');
require_once('App/lib/getMaxMileageCars.php');

$minPrice = getMinPriceCars($pdo);
$maxPrice = getMaxPriceCars($pdo);

$minYear = getMinYearCars($pdo);
$maxYear = getMaxYearCars($pdo);

$minMileage = getMinMileageCars($pdo);
$maxMileage = getMaxMileageCars($pdo);

?>

<section>
    <div class="text-center">
        <h2 class="m-5">Nos véhicules d'occasion</h2>
        <!-- Filter navbar -->
        <div class="m-0">
            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Filtres</button>

            <div class="offcanvas-lg offcanvas-top h-auto" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Filtres</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasTop" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body justify-content-center text-center">
                    <div class="row m-0">
                        <div class="col-lg-3 col-md-4 mx-2 my-2 wrapper p-3">
                            <div class="header-filter">
                                <h4>Prix</h4>
                                <span id="priceSelect"></span>
                            </div>
                            <div>
                                <input type="range" class="form-range" min="<?=$minPrice[0]?>" max="<?=$maxPrice[0]?>" id="price">
                                <div class="d-flex justify-content-between">
                                    <span id="minPriceCar"><?=$minPrice[0]?></span>
                                    <span id="maxPriceCar"><?=$maxPrice[0]?></span>
                                </div>
                            
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn" id="buttonPrice">Réinitialiser</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mx-2 my-2 wrapper p-3">
                            <div class="header-filter">
                                <h4>Année</h4>
                                <span id="yearSelect"></span>
                            </div>
                            <div>
                                <input type="range" class="form-range" min="<?=$minYear[0]?>" max="<?=$maxYear[0]?>" id="year">
                                <div class="d-flex justify-content-between">
                                    <span id="minYearCar"><?=$minYear[0]?></span>
                                    <span id="maxYearCar"><?=$maxYear[0]?></span>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn">Réinitialiser</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mx-2 my-2 wrapper p-3">
                            <div class="header-filter">
                                <h4>Kilomètres</h4>
                                <span id="mileageSelect"></span>
                            </div>
                            <div>
                                <input type="range" class="form-range" min="<?=$minMileage[0]?>" max="<?=$maxMileage[0]?>" id="mileage">
                                <div class="d-flex justify-content-between">
                                    <span id="minMileageCar"><?=$minMileage[0]?></span>
                                    <span id="maxMileageCar"><?=$maxMileage[0]?></span>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn">Réinitialiser</button>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <button type="button" class="btn d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasTop"  aria-label="Close">Valider</button>

                    </div>
                </div>
            </div>
        </div>   
        <!-- END filter navbar -->

        <div class="list-cars row justify-content-center m-0">

        </div>
    </div>

</section>

<script src="App/script/getCars.js"></script>
<script src="App/script/filterCars.js"></script>

<?php
require_once('templates/footer.php');
?>
