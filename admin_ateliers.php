<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
?>

<div class="p-3 container">
    <form method="POST" action="./ateliers.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Nouvel atelier</legend>
            <div class="d-flex justify-content-evenly">
                <div class="p-2 col">
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Titre..." id="titre" name="titre" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tps" class="form-label"><i class="px-2 fas fa-stopwatch"></i>Durée</label>
                            <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Durée..." id="tps" name="tps" required>
                        </div>
                        <div class="col">
                            <label for="lieu" class="form-label"><i class="px-2 fas fa-home"></i>Lieu</label>
                            <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Lieu..." id="lieu" name="lieu" required>
                        </div>
                        <div class="col">
                            <label for="tarif" class="form-label"><i class="px-2 fas fa-euro-sign"></i>Tarif</label>
                            <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Tarif..." id="tarif" name="tarif" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Description..." id="description" name="description" required></textarea>
                    </div>
                    <div>
                        <label for="file">Choix d'image pour l'atelier</label>
                        <input class="px-2" type="file" name="file">
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="p-2 d-flex justify-content-center">
                <input class="btn btn-outline-success" type="submit" name="valide_atelier" value="Enregistrer" >
        </div>
    </form>
</div>

<?php
    require_once('templates/footer.php');
?>