<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
?>

<div class="p-3 container">
<form method="POST" action="./admin_patients.php">
<?php if(isset($_SESSION['erreur'])){?>
        <div class="alert alert-danger" role="alert"><?=$_SESSION['erreur'];?></div>
        <?php } ?>
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
            <div class="d-flex flex-wrap justify-content-center">
            <?php
                for ($i = 0; $i < 9; $i++) {
                    $regimeName = $regime[$i];
                ?>
                <div class="px-3 form-check">
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