<?php
require_once('templates/header.php');
?>

<div class="text-center">
    <h2 class="m-5">Laisser nous un commentaire !</h2>
    <div class="m-5">
        <div class="mb-3">
            <label for="surname" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="surname" placeholder="Dupont" required>
        </div>
        <div class="mb-3">
            <label for="commentary" class="form-label">Dites-nous tout</label>
            <textarea class="form-control" id="commentary" rows="3" maxlength="255" placeholder="Maximum 255 caractères" required></textarea>
        </div>
        <div  class="mb-3">
            <label for="note" class="form-label">Note</label>
            <select class="form-select" aria-label="Default select example" id="note" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
</div>
<?php
require_once('templates/footer.php');
?>