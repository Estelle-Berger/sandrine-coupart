<?php
    require_once('templates/header.php');
    require_once('lib/config.php');
#----------------récuperation atelier-----------------
$requete = $bdd->prepare("SELECT * FROM ateliers");
$requete->execute();
$ateliers =$requete->fetchAll();
?>
<div class="container m-5">
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
<div class="m-5">
    <div class="row">
        <?php foreach ($ateliers as $atelier) {
        if($atelier['image']===null){
            $imagePath = _ASSETS_IMG_PATH_.'atelier.jpg';
        }else{
            $imagePath = './'.$atelier['image'];
        } ?>
        <div class="col p-3">
            <div class="card"style="width: 18rem;">
                <img src="<?=$imagePath;?>" class="card-img-top" width="200px" height="200px" alt="<?=$atelier['titre'];?>">
                <div class="card-body">
                    <h5 class="card-title" title="<?=$atelier['description'];?>"><?=$atelier['titre'];?></h5>
                </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><img class="p-2" src="assets/images/icone-tps.png" alt="icone-tps"><?=$atelier['tps'];?></li>
                        <li class="list-group-item"><img class="p-2" src="assets/images/icone-maison.png" alt="icone-maison"><?=$atelier['lieu'];?></li>
                        <li class="list-group-item"><img class="p-2" src="assets/images/icone-euro.png" alt="icone-euro"><?=$atelier['tarif'];?></li>
                    </ul>
                <div class="card-body">
                    <a href="mailto:sandrine.coupart@nutritionniste-dieteticienne.fr" class="btn orange" role="button">S'inscrire</a>
                </div>
            </div> 
        </div>
        <?php } ?>
    </div>
</div>

<?php
    require_once('templates/footer.php');
?>