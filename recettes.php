<?php
    require_once('templates/header.php');
?>
<?php
$recipes = [
    ["titre"=>"Quiche","description"=>"Tarte aux lardons","preparation"=>"20 min","repos"=>"aucun","cuisson"=>"35 min","ingrédients"=>""],
    ["titre"=>"Quiche","description"=>"Tarte aux poireaux","preparation"=>"25 min","repos"=>"aucun","cuisson"=>"35 min","ingrédients"=>""],
    ["titre"=>"Quiche","description"=>"Tarte aux courgettes","preparation"=>"25 min","repos"=>"aucun","cuisson"=>"40 min","ingrédients"=>""]
]
?>
<?php foreach ($recipes as $key => $recipe){?>
    <div class="col">
        <div class="card h-100">
            <img src="./assets/images/" class="card-img-top" alt="alimentation">
            <div class="card-body">
                <h5 class="card-title"><?=$recipe['titre'];?></h5>
                <p class="card-text"><?=$recipe['description'];?></p>
            </div>
        </div>
    </div>
<?php } ?>



<?php
    require_once('templates/footer.php');
?>