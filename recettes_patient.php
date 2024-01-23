<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
    
?>

<?php
#----------------récuperation recette-----------------
$id_patient = $_SESSION['id_patient'];
$requete = $bdd->prepare("SELECT * FROM `recipes` as R, `patient` as P
WHERE 
(P.allergene_1 = 0 OR (P.allergene_1 = 1 and R.allergene_1 = 0)) AND
(P.allergene_2 = 0 OR (P.allergene_2 = 1 and R.allergene_2 = 0)) AND
(P.allergene_3 = 0 OR (P.allergene_3 = 1 and R.allergene_3 = 0)) AND
(P.allergene_4 = 0 OR (P.allergene_4 = 1 and R.allergene_4 = 0)) AND
(P.allergene_5 = 0 OR (P.allergene_5 = 1 and R.allergene_5 = 0)) AND
(P.allergene_6 = 0 OR (P.allergene_6 = 1 and R.allergene_6 = 0)) AND
(P.allergene_7 = 0 OR (P.allergene_7 = 1 and R.allergene_7 = 0)) AND
(P.allergene_8 = 0 OR (P.allergene_8 = 1 and R.allergene_8 = 0)) AND
(P.allergene_9 = 0 OR (P.allergene_9 = 1 and R.allergene_9 = 0)) AND
(P.allergene_10 = 0 OR (P.allergene_10 = 1 and R.allergene_10 = 0)) AND
(P.allergene_11 = 0 OR (P.allergene_11 = 1 and R.allergene_11 = 0)) AND
(P.allergene_12 = 0 OR (P.allergene_12 = 1 and R.allergene_12 = 0)) AND
(P.allergene_13 = 0 OR (P.allergene_13 = 1 and R.allergene_13 = 0)) AND 
(P.allergene_14 = 0 OR (P.allergene_14 = 1 and R.allergene_14 = 0)) AND P.id_patient = '$id_patient'");
$requete->execute();
$recipes =$requete->fetchAll();
?>

<div class="p-5">
    <h1>Mes recettes</h1>
        <div class="row">
            <?php foreach ($recipes as $key => $recipe){
            include('templates/recipe_partial.php');
            } ?>
        </div>
</div>


<?php
    require_once('templates/footer.php');
?>