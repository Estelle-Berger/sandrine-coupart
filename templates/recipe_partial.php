<?php 
if($recipe['image']===NULL){
    $imagePath = _ASSETS_IMG_PATH_.'images.jpg';
}else{
    $imagePath = './'.$recipe['image'];
}
?>
<div class="col p-3">
    <div class="card"style="width: 18rem;">
        <img src="<?=$imagePath;?>" class="card-img-top" width="200px" height="200px" alt="<?=$recipe['titre'];?>">
        <div class="card-body">
            <h5 class="card-title"><?=$recipe['titre'];?></h5>
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><img class="p-2" src="assets/images/icone-preparation.png" alt="icone-preparation"><?=$recipe['preparation'];?></li>
                <li class="list-group-item"><img class="p-2" src="assets/images/icone-cuisson.png" alt="icone-cuisson"><?=$recipe['cuisson'];?></li>
                <li class="list-group-item ">
                    <?php $count_allergene = 0 ;$concat_allergene = "";
                        for($i=1; $i< 15; $i++){
                            if ($recipe['allergene_'.$i] == "1"){
                                    $count_allergene++;
                                    $concat_allergene = $concat_allergene.', '.$allergene[$i-1];?>
                            <?php }
                        }?>
                        <img class="px-2" src="assets/images/icone-allergene.png" alt="icone-allergene"title="
                        <?=substr($concat_allergene,2,strlen($concat_allergene));?>"><?=$count_allergene;?>&nbsp;Allergène<?php if($count_allergene>1) echo "s";?>
                    <?php $count_regime = 0 ;$concat_regime = "";
                        for($i=1; $i< 9; $i++){
                            if ($recipe['regime_'.$i] == "1"){
                                    $count_regime++;
                                    $concat_regime = $concat_regime.', '.$regime[$i-1];?>
                            <?php }
                        }?>
                        <img class="px-2" src="assets/images/icone-regime2.png" alt="icone-regime" title="
                        <?= substr($concat_regime,2,strlen($concat_regime));?>"><?=$count_regime;?>&nbsp;Régime<?php if($count_regime>1) echo "s";?>
                </li>
            </ul>
        <div class="card-body">
            <a href="recette.php?id_recette=<?=$recipe['id_recette'];?>" class="btn orange" role="button">Voir la recette</a>
        </div>
    </div>
</div>
