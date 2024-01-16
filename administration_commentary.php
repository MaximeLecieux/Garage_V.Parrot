<?php
require_once('templates/header.php');
require_once('App/lib/getOpinions.php');

$errors = [];
$messages = [];

$opinions = getPendingOpinions($pdo);

if(isset($_POST['deleteCommentary'])){
    var_dump($_POST);
}

?>
<div class="text-center">


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
        <?php foreach($opinions as $opinion){ ?>
        <form method="POST">
            <table class="table">
                <tbody class="table-container table-dark">
                    <tr>
                        <td class="col-1">
                            <input type="text" class="form-control" name="name" id="name" value="<?=$opinion['idOpinion']?>" readonly>
                        </td>
                        <td class="col-1">
                            <input type="text" class="form-control" name="name" id="name" value="<?=$opinion['name']?>" readonly>
                        </td>
                        <td class="col-7">
                            <input type="text" class="form-control" name="commentary" value="<?=$opinion['commentary']?>" readonly>
                        </td>
                        <td class="col-1">
                            <input type="text" class="form-control" name="note" value="<?=$opinion['note']?>/5" readonly>
                        </td>
                        <td class="col-2">
                            <button type="submit" name="deleteCommentary" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-success">
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
    </div>
</div>

<?php
require_once('templates/footer.php');
?>