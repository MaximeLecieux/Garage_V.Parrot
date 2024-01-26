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
        <div class="mb-5">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, aliquid praesentium! Ut, nesciunt harum debitis aspernatur voluptate animi nam vero exercitationem, voluptatibus possimus distinctio quasi neque nemo iusto qui provident.
            </p>
        </div>
        <!-- Filter navbar -->
        <div class="m-0">
            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Filtres</button>

            <div class="offcanvas-lg offcanvas-top h-auto" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Filtres</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasTop" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="row m-0 justify-content-center">
                        <div class="col-lg-3 col-md-4 mx-2 my-2 wrapper p-3">
                            <div class="header-filter">
                                <h4>Prix</h4>
                            </div>
                            <div class="filter-input">
                                <div class="field">
                                    <span>Min</span>
                                    <input type="number" class="input-min" value="<?=$minPrice[0]?>">
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                    <span>Max</span>
                                    <input type="number" class="input-max" value="<?=$maxPrice[0]?>">
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn">Réinitialiser</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mx-2 my-2 wrapper p-3">
                            <div class="header-filter">
                                <h4>Année</h4>
                            </div>
                            <div class="filter-input">
                                <div class="field">
                                    <span>Min</span>
                                    <input type="number" class="input-min" value="<?=$minYear[0]?>">
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                    <span>Max</span>
                                    <input type="number" class="input-max" value="<?=$maxYear[0]?>">
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn">Réinitialiser</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mx-2 my-2 wrapper p-3">
                            <div class="header-filter">
                                <h4>Kilomètres</h4>
                            </div>
                            <div class="filter-input">
                                <div class="field">
                                    <span>Min</span>
                                    <input type="number" class="input-min" value="<?=$minMileage[0]?>">
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                    <span>Max</span>
                                    <input type="number" class="input-max" value="<?=$maxMileage[0]?>">
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
    </div>
</section>

<?php
require_once('templates/footer.php');
?>