<?php
    require_once('templates/header.php');

?>

<div class="p-3 container">
<form method="POST" action="./recettes.php" enctype="multipart/form-data">
    <fieldset>
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
    </fieldset>
    <div class="p-3 container">
        <fieldset>
            <legend>Les allergènes</legend>
            <div class="row">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_1" name="allergene_1" >
                        <label class="form-check-label" for="allergene_1">
                            Arachide
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_2" name="allergene_2" >
                        <label class="form-check-label" for="allergene_2">
                            Céleri
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_3" name="allergene_3" >
                        <label class="form-check-label" for="allergene_3">
                            Crustacés
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_4" name="allergene_4" >
                        <label class="form-check-label" for="allergene_4">
                            Gluten
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_5" name="allergene_5" >
                        <label class="form-check-label" for="allergene_5">
                            Fruits à coque
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_6" name="allergene_6" >
                        <label class="form-check-label" for="allergene_6">
                            Lait
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_7" name="allergene_7" >
                        <label class="form-check-label" for="allergene_7">
                            Lupin
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_8" name="allergene_8" >
                        <label class="form-check-label" for="allergene_8">
                            Oeuf
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_9" name="allergene_9" >
                        <label class="form-check-label" for="allergene_9">
                            Poisson
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_10" name="allergene_10" >
                        <label class="form-check-label" for="allergene_10">
                            Mollusques
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_11" name="allergene_11" >
                        <label class="form-check-label" for="allergene_11">
                            Moutarde
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_12" name="allergene_12" >
                        <label class="form-check-label" for="allergene_12">
                            Sésame
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_13" name="allergene_13" >
                        <label class="form-check-label" for="allergene_13">
                            Soja
                        </label>
                    </div>
                    <div class="px-3 col-auto form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="allergene_14" name="allergene_14" >
                        <label class="form-check-label" for="allergene_14">
                            Sulfates
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="p-3 container">
        <fieldset>
            <legend>Les régimes</legend>
            <div class="row">
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_1" name="regime_1">
                        <label class="form-check-label" for="regime_1">
                            Régime végétarien
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_2" name="regime_2">
                        <label class="form-check-label" for="regime_2">
                            Régime végétalien
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_3" name="regime_3">
                        <label class="form-check-label" for="regime_3">
                            Régime Végan
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_4" name="regime_4">
                        <label class="form-check-label" for="regime_4">
                            Régime Fléxitarien
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_5" name="regime_5">
                        <label class="form-check-label" for="regime_5">
                            Régime anticholestérol
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_6" name="regime_6">
                        <label class="form-check-label" for="regime_6">
                            Régime sans sel
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_7" name="regime_7">
                        <label class="form-check-label" for="regime_7">
                            Régime sans gluten
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_8" name="regime_8">
                        <label class="form-check-label" for="regime_8">
                            Régime sans lactose
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-evenly col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_9" name="regime_9">
                        <label class="form-check-label" for="regime_9">
                            Régime hypocalorique
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="d-flex justify-content-center">
            <input class="btn btn-outline-success" type="submit" name="valide_Recette" value="Enregistrer" >
    </div>
</form>
</div>
<?php
    require_once('templates/footer.php');
?>