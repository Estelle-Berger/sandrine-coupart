<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
    
?>
<?php
function linesToArray($string){
    return explode(PHP_EOL, $string);
}

#----------------récuperation recette-----------------
$id = $_GET['id_recette'];
$requete = $bdd->prepare("SELECT * FROM recipes WHERE id_recette = :id");
$requete->bindParam(':id', $id, PDO::PARAM_INT);
$requete->execute();
$recipes =$requete->fetch();
$ingredients = linesToArray($recipes['ingredient']);
$etapes = linesToArray($recipes['etape']);

if($recipes['image']==null){
    $imagePath = _ASSETS_IMG_PATH_.'images.jpg';
}else{
    $imagePath = $recipes['image'];
}
?>

<div class="m-5">
    <div class="container col-xxl-8">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?=$imagePath;?>" class="d-block mx-lg-auto img-fluid" alt="<?=$recipes['titre'];?>" width="200" height="200" loading="lazy">
            </div>
            
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$recipes['titre'];?></h1>
                <p class="lead"><?=$recipes['description'];?></p>
            </div>
        </div>
        <div class="p-3 row align-items-center">
            <div class="col-4 d-flex align-self-center">
                <p class="list-group-item"><img class="p-2" src="assets/images/icone-preparation.png" alt="icone-preparation"><?=$recipes['preparation'];?></p> 
            </div>
            <div class="col-4 d-flex align-self-center">
                <p class="list-group-item"><img class="p-2" src="assets/images/icone-repos.png" alt="icone-repos"><?=$recipes['repos'];?></p>
            </div>
            <div class="col-4 d-flex align-self-center">
                <p class="list-group-item"><img class="p-2" src="assets/images/icone-cuisson.png" alt="icone-cuisson"><?=$recipes['cuisson'];?></p>
            </div>
        </div>
    </div>
    <div class="p-3 row align-items-top">
        <div class="col-10 col-sm-8 col-lg-6">
            <h2>Les allergènes</h2>
            <ul class="border rounded">
            <?php $count_allergene = 0 ;$concat_allergene = "";
                for($i=1; $i< 15; $i++){
                    if ($recipes['allergene_'.$i] == "1"){
                        $count_allergene++;
                        $concat_allergene = $concat_allergene.', '.$allergene[$i-1];?>
            <?php }}?>
            <li><?=substr($concat_allergene,2,strlen($concat_allergene));?></li>
            </ul>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
            <h2>Les régimes</h2>
            <ul class="border rounded">
            <?php $count_regime = 0 ;$concat_regime = "";
                for($i=1; $i< 9; $i++){
                    if ($recipes['regime_'.$i] == "1"){
                        $count_regime++;
                        $concat_regime = $concat_regime.', '.$regime[$i-1];?>
            <?php }}?>
            <li><?= substr($concat_regime,2,strlen($concat_regime));?></li>
            </ul>
        </div>
    </div>
    <?php ?>
    <div class=" p-3 row flex-lg-row-reverse align-items-center">
        <h2>Ingrédients</h2>
        <?php foreach ($ingredients as $ingredient) {?>
        <ul class="list-group">
                <li class="list-group-item"><?=$ingredient;?></li>
            <?php }?>
        </ul>
    </div>
    <div class="p-3 row flex-lg-row-reverse align-items-center">
        <h2>Les étapes</h2>
        <?php foreach ($etapes as $etape) {?>
        <ul class="list-group">
                <li class="list-group-item"><?=$etape;?></li>
            <?php }?>
        </ul>
    </div>
</div>

<?php 
    if(isset($_SESSION["User_Profile"]) AND $_SESSION["User_Profile"] === 'patient'){?>
    <form method="POST" action="">
        <div class="px-5 stars">
            <div class="d-flex">
                <label class="form-label" for="avis">Avis</label>
                <i class="px-2 star stargrey fas fa-star" data-index="0"></i>
                <i class="px-2 star stargrey fas fa-star" data-index="1"></i>
                <i class="px-2 star stargrey fas fa-star" data-index="2"></i>
                <i class="px-2 star stargrey fas fa-star" data-index="3"></i>
                <i class="px-2 star stargrey fas fa-star" data-index="4"></i>
            </div>
            <textarea  class="avis form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border 
            rounded-2" name="avis" id="avis" cols="20" rows="5"required></textarea>
        </div>
        <div class="d-flex justify-content-center">
            <input class="btn btn-outline-success" type="submit" name="valide_avis" value="Enregistrer" >
        </div>
    </form>
    <?php } ?>

<?php
    require_once('templates/footer.php');
?>