<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
?>

<div class="p-3 container">
<form method="POST" action="./admin_patients.php">
<?php if(isset($_SESSION['erreur'])){?>
        <div class="alert alert-danger" role="alert"><?=$_SESSION['erreur'];?></div>
        <?php } ?>
    <fieldset>
        <legend>Nouveau patient</legend>
        <div class="d-flex justify-content-evenly">
            <div class="p-2 col-6">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Nom..." id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Prénom..." id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="E-mail..." id="email" name="email" required>
                </div>
            </div>
            <div class="p-2 col-6">
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Date de naissance</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="JJ/MM/AAAA" id="birthdate" name="birthdate" required>
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">Identifiant</label>
                    <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Nom_Prenom..." id="user" name="user" required>
                    
                </div>
                <div class="mb-3">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Mot de passe..." id="mdp" name="mdp" required>
                </div>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" id="genre" value="F">
                        <label class="form-check-label" for="genre">
                            Femme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" id="genre" value="H">
                        <label class="form-check-label" for="genre">
                            Homme
                        </label>
                    </div>
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
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_1" name="regime_1">
                        <label class="form-check-label" for="regime_1">
                            Régime végétarien
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_2" name="regime_2">
                        <label class="form-check-label" for="regime_2">
                            Régime végétalien
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_3" name="regime_3">
                        <label class="form-check-label" for="regime_3">
                            Régime végan
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_4" name="regime_4">
                        <label class="form-check-label" for="regime_4">
                            Régime flexitarien
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_5" name="regime_5">
                        <label class="form-check-label" for="regime_5">
                            Régime anticholestérol
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_6" name="regime_6">
                        <label class="form-check-label" for="regime_6">
                            Régime sans sel
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_7" name="regime_7">
                        <label class="form-check-label" for="regime_7">
                            Régime sans gluten
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
                    <div class="p-2 form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="regime_8" name="regime_8">
                        <label class="form-check-label" for="regime_8">
                            Régime sans lactose
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-around col-auto">
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
            <input class="btn btn-outline-success" type="submit" name="valide_Patient" value="Enregistrer">

    </div>
</form>
<div class="p-3 d-flex justify-content-center">
    <a href="admin_patients.php" class="btn btn-outline-success" type="submit">Fichier patients</a>
</div>

</div>
<?php
    require_once('templates/footer.php');
?>