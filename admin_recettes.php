<?php
    require_once('templates/header.php');

?>

<div class="p-3 container">
<form method="POST" action="./recettes.php" enctype="multipart/form-data">
    <legend>Nouvelle recette</legend>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 col">
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Titre..." id="titre" name="titre" required>
            </div>
            <div class="row">
                <div class="col">
                    <label for="preparation" class="form-label"><img class="px-2" src="assets/images/icone-preparation.png" alt="icone-preparation.">Préparation</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="mm minutes..." id="preparation" name="preparation" required>
                </div>
                <div class="col">
                    <label for="repos" class="form-label"><img class="px-2" src="assets/images/icone-repos.png" alt="icone-repos">Repos</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="mm minutes.." id="repos" name="repos">
                </div>
                <div class="col">
                    <label for="cuisson" class="form-label"><img class="px-2" src="assets/images/icone-cuisson.png" alt="icone-cuisson">Cuisson</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="mm minutes.." id="cuisson" name="cuisson" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Description..." id="description" name="description" required></textarea>
            </div>
            <div>
                <label for="ingredient" class="form-label">Les ingredients</label>
                <textarea class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Ingrédients..." id="ingredient" name="ingredient" required></textarea>
            </div>
            <div>
                <label for="etape" class="form-label">Les étapes</label>
                <textarea class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Les étapes..." id="etape" name="etape" required></textarea>
            </div>
            <div>
                <label for="file">Choix d'image pour la recette</label>
                <input class="px-2" type="file" name="file">
            </div>
            <div class="p-3 form-check">
                <input class="form-check-input" type="checkbox" value="1" id="for_patient" name="for_patient">
                <label class="form-check-label" for="for_patient">
                    Pour les patients
                </label>
            </div>
        </div>
    </div>
    <div class="p-3 container">
        <legend>Les allergènes</legend>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center">
                <?php
                for ($i = 0; $i < 14; $i++) {
                    $allergenName = $allergene[$i];
                ?>
                <div class="px-3 col-auto form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="allergene_<?= $i + 1 ?>" name="allergene_<?= $i + 1 ?>" >
                    <label class="form-check-label" for="allergene_<?= $i + 1 ?>">
                        <?= $allergenName ?>
                    </label>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="p-3 container">
        <legend>Les régimes</legend>
        <div class="row">
            <div class="d-flex flex-wrap justify-content-evenly col-auto">
            <?php
            for ($i = 0; $i < 9; $i++) {
                $regimeName = $regime[$i];
            ?>
                <div class="p-2 form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="regime_<?= $i + 1 ?>" name="regime_<?= $i + 1 ?>">
                    <label class="form-check-label" for="regime_<?= $i + 1 ?>">
                    <?= $regimeName ?>
                    </label>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
            <input class="btn btn-outline-success" type="submit" name="valide_Recette" value="Enregistrer" >
    </div>
</form>
</div>
<?php
    require_once('templates/footer.php');
?>