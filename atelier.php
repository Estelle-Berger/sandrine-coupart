<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
    
?>
<?php

#----------------récuperation atelier-----------------
$id = $_GET['id_atelier'];
$requete = $bdd->prepare("SELECT * FROM ateliers WHERE id_atelier = :id");
$requete->bindParam(':id', $id, PDO::PARAM_INT);
$requete->execute();
$ateliers =$requete->fetch();


if($ateliers['image']==null){
    $imagePath = _ASSETS_IMG_PATH_.'ateliers.jpg';
}else{
    $imagePath = $ateliers['image'];
}
?>

<div class="m-5">
    <div class="container col-xxl-8">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?=$imagePath;?>" class="d-block mx-lg-auto img-fluid" alt="<?=$ateliers['titre'];?>" width="200" height="200" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$ateliers['titre'];?></h1>
                <p class="lead"><?=$ateliers['description'];?></p>
            </div>
        </div>
        <div class="p-3 row align-items-center">
            <div class="col-4 d-flex align-self-center">
                <p class="list-group-item"><img class="p-2" src="assets/images/icone-tps.png" alt="icone-tps"><?=$ateliers['tps'];?></p> 
            </div>
            <div class="col-4 d-flex align-self-center">
                <p class="list-group-item"><img class="p-2" src="assets/images/icone-lieu.png" alt="icone-lieu"><?=$ateliers['lieu'];?></p>
            </div>
            <div class="col-4 d-flex align-self-center">
                <p class="list-group-item"><img class="p-2" src="assets/images/icone-tarif.png" alt="icone-tarif"><?=$ateliers['tarif'];?></p>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <a href="mailto:sandrine.coupart@nutritionniste-dieteticienne.fr" class="btn orange" role="button">S'inscrire</a>
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
            <textarea  class="form-control d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border 
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