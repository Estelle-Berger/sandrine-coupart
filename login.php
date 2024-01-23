<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
    
?>

<div class="p-3 container">
<form method="POST" action="">
    <legend>Connexion</legend>
    <div class="d-flex justify-content-evenly">
        <div>
            <div class="mb-3">
                <label for="user" class="form-label">Identifiant</label>
                <input type="text" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Identifiant..." id="user" name="user" required>
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2" placeholder="Mot de passe..." id="mdp" name="mdp" required>
                <a href="mdp_oublie.php" class="text-align-end">Mot de passe oublié</a>
            </div>
            <div class="mb-3">
                <input class="btn btn-outline-success" type="submit" value="Valider" name="valid_login">
            </div>
        </div>
    </div>
</form>
</div>

<?php
    require_once('templates/footer.php');
?>