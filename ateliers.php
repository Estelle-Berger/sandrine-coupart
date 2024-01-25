<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
#----------------récuperation atelier-----------------
$requete = $bdd->prepare("SELECT * FROM ateliers");
$requete->execute();
$ateliers =$requete->fetchAll();
?>
<div class="container m-3">
    <div class="row d-flex justify-content-center">
        <?php foreach ($ateliers as $atelier) {
                if($atelier['image']===null){
                    $imagePath = _ASSETS_IMG_PATH_.'atelier.jpg';
                }else{
                    $imagePath = './'.$atelier['image'];
                } ?>
        <div class="card m-3" style="max-width: 75%;">
            <div class="row py-2">
                <div class="col-md-4">
                    <img src="<?=$imagePath;?>" class="rounded card-img-center" width="100%" height="100%" alt="<?=$atelier['titre'];?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div>
                            <img class="p-3" src="assets/images/icone-tps.png" alt="icone-tps"><?=$atelier['tps'];?>
                            <img class="p-3" src="assets/images/icone-maison.png" alt="icone-maison"><?=$atelier['lieu'];?>
                            <img class="p-3" src="assets/images/icone-euro.png" alt="icone-euro"><?=$atelier['tarif'];?>
                        </div>
                            <h5 class="px-3 card-title"><?=$atelier['titre'];?></h5>
                            <p class="px-3 card-text"><?=$atelier['description'];?></p>
                        <div>
                            <a href="mailto:sandrine.coupart@nutritionniste-dieteticienne.fr" class="btn orange" role="button">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
    require_once('templates/footer.php');
?>