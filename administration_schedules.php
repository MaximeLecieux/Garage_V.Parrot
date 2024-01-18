<?php
require_once('templates/header.php');

?>
<div class="text-center">

    <div id="message">

    </div>

    <h2 class="m-5">Administration des horaires d'ouverture</h2>

    <div class="administration-panel m-4">
        <div class="rounded bg-dark-subtle p-4 mb-4 text-center">
            <form method="POST" id="hourlyForm">   
                <div class="mb-3">
                    <label for="day" class="form-label">Jour</label>
                    <select name="day" id="day" class="form-select">
                        <option selected>Veuillez choisir un jour</option>
                        <!-- Option is genered by getShedule.js -->
                    </select>
                </div>
                <div class="mb-4">
                    <label for="morning" class="form-label">Horaires matin</label>
                    <input type="text" id="morning" name="morning" class="form-control" disabled>
                    <span id="messageMorning"></span>
                </div>
                <div class="mb-4">
                    <label for="afternoon" class="form-label">Horaires après-midi</label>
                    <input type="text" id="afternoon" name="afternoon" class="form-control" disabled>
                    <span id="messageAfternoon"></span>
                </div>
                <button type="submit" id="addArticle" name="addArticle" class="btn">Enregister</button>
            </form>

        </div>
    </div>
</div>

<script src="App/script/modifyHourly.js"></script>


<?php
require_once('templates/footer.php');
?>