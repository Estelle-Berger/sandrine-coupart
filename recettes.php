<?php
    require_once('templates/header.php');
    require_once('lib/config.php');

#----------------récuperation recette-----------------
$requete = $bdd->prepare("SELECT * FROM recipes");
$requete->execute();
$recipes =$requete->fetchAll();
?>

<div class="m-5">
    <h1>Les recettes</h1>
        <div class="row">
            <?php foreach ($recipes as $key => $recipe){
            include('templates/recipe_partial.php');
            } ?>
        </div>
</div>

<?php
    require_once('templates/footer.php');
?>