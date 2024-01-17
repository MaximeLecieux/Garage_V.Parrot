<?php
require_once('templates/header.php');
require_once('App/lib/getOpinions.php');
require_once('App/lib/deleteOpinion.php');
require_once('App/lib/validateOpinion.php');
require_once('App/lib/addOpinion.php');

$errors = [];
$messages = [];

$pendingOpinions = getPendingOpinions($pdo);
$validsOpinions = getValidsOpinions($pdo);

if(isset($_POST['deleteCommentary'])){
    $deleteOpinion = deleteOpinion($pdo, $_POST['idOpinion']);

    if($deleteOpinion){
        $messages[] = 'Le commentaire a bien été supprimé';
    } else {
        $errors[] = 'Une erreur s\'est produite';
    }
}

if(isset($_POST['validateCommentary'])){
    $validateOpinion = validateOpinion($pdo, $_POST['idOpinion']);

    if($validateOpinion){
        $messages[] = 'Le commentaire a bien été validé';
    } else {
        $errors[] = 'Une erreur s\'est produite';
    }
}

if(isset($_POST['addOpinion'])){
    $addOpinion = addOpinion($pdo, $_POST['commentary'], $_POST['note'], 'pending', $_POST['name']);

    if($addOpinion){
        $messages[] = 'Le commentaire a bien été ajouté';
    } else {
        $errors[] = 'Une erreur s\'est produite';
    }
}

?>
<div class="text-center">

    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success">
            <?=$message; ?>
        </div>
    <?php } ?>

    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger">
            <?=$error; ?>
        </div>
    <?php } ?>


    <h2 class="m-5">Administration des commentaires</h2>

    <div class="administration-panel m-4">
        <h3 class="mb-5">Commentaires en attentes de validation</h3>
        <table class="table table-dark">
            <thead>
                <tr>
                <th class="col-1">ID</th>
                <th class="col-1">Nom</th>
                <th lass="col-7">Commentaire</th>
                <th class="col-1">Note</th>
                <th class="col-2">Actions</th>
                </tr>
            </thead>
        </table>
        <?php foreach($pendingOpinions as $pendingOpinion){ ?>
        <form method="POST">
            <table class="table">
                <tbody class="table-container">
                    <tr>
                        <td class="col-1">
                            <input type="text" class="form-control" name="idOpinion" value="<?=$pendingOpinion['idOpinion']?>" readonly>
                        </td>
                        <td class="col-1">
                            <input type="text" class="form-control" value="<?=$pendingOpinion['name']?>" readonly>
                        </td>
                        <td class="col-7">
                            <input type="text" class="form-control" value="<?=$pendingOpinion['commentary']?>" readonly>
                        </td>
                        <td class="col-1">
                            <input type="text" class="form-control" value="<?=$pendingOpinion['note']?>/5" readonly>
                        </td>
                        <td class="col-2">
                            <button type="submit" name="deleteCommentary" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                                </svg>
                            </button>
                            <button type="submit" name="validateCommentary" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php } ?>

        <h3 class="m-5">Commentaires visibles sur la page d'accueil</h3>
        <?php foreach($validsOpinions as $validsOpinion){ ?>
        <form method="POST">
            <table class="table">
                <tbody class="table-container">
                    <tr>
                        <td class="col-1">
                            <input type="text" class="form-control" name="idOpinion" value="<?=$validsOpinion['idOpinion']?>" readonly>
                        </td>
                        <td class="col-1">
                            <input type="text" class="form-control" value="<?=$validsOpinion['name']?>" readonly>
                        </td>
                        <td class="col-7">
                            <input type="text" class="form-control" value="<?=$validsOpinion['commentary']?>" readonly>
                        </td>
                        <td class="col-1">
                            <input type="text" class="form-control" value="<?=$validsOpinion['note']?>/5" readonly>
                        </td>
                        <td class="col-2">
                            <button type="submit" name="deleteCommentary" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php } ?>

        <h3 class="m-5">Ajouter un commentaire</h3>
        <div class="m-5">
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Indiquer un nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Dupont" required>
            </div>
            <div class="mb-3">
                <label for="commentary" class="form-label">Indiquer le commentaire</label>
                <textarea class="form-control" name="commentary" id="commentary" rows="3" maxlength="255" placeholder="Maximum 255 caractères" required></textarea>
            </div>
            <div  class="mb-3">
                <label for="note" class="form-label">Indiquer la note</label>
                <select class="form-select" name="note" id="note" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" name="addOpinion" class="btn btn-lg my-5"> Valider </button>
        </form>
    </div>
    </div>
</div>

<?php
require_once('templates/footer.php');
?>