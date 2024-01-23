<?php
    require_once('templates/header.php');
    require_once('lib/config.php');

#----------------récuperation patient-----------------
$requete = $bdd->prepare("SELECT * FROM patient ORDER BY id_patient DESC");
$requete->execute();
$patients =$requete->fetchAll();
?>

<div class="p-5 d-flex justify-content-start">
    <a href="admin_patient.php" class="btn btn-outline-success bouton" type="submit">Nouveau patient</a>
</div>
<div class="px-5">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Genre</th>
            <th scope="col">Allergènes</th>
            <th scope="col">Régimes</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($patients as $patient) {?>
        <tr>
            <td><?=$patient['nom'];?></td>
            <td><?=$patient['prenom'];?></td>
            <td><?=$patient['email']; ?></td>
            <td><?=$patient['genre']; ?></td>
            <td>
                <?php
                for($i=1; $i< 15; $i++){
                if ($patient['allergene_'.$i] == 1){
                echo $allergene[$i-1];?><br><?php } } ?>
            </td>
            <td>
                <?php
                for($i=1; $i< 9; $i++){
                if ($patient['regime_'.$i] == 1){
                echo $regime[$i-1];?><br><?php } } ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

<?php
    require_once('templates/footer.php');
?>