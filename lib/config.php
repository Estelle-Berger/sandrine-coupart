<?php
define('_RECIPES_IMG_PATH_','uploads/recipes/');
define('_ASSETS_IMG_PATH_','assets/images/');
session_start();
#---------------------connexion à la bdd---------
$servername = "localhost";
$username = "root";
$password = "";

try{
    $bdd = new PDO("mysql:host=$servername;dbname=sandrine_coupart",$username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
#---------------------validation login-----------------
if($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST['valid_login'])){
    
    $user = $_POST['user'];
    $mdp = $_POST['mdp'];
    if($user != ""){
        // connexion à la bdd en tant qu'admin---------
        $requete_adm = $bdd->prepare("SELECT*FROM users WHERE user = '$user' AND mdp = '$mdp'");
        $requete_pat = $bdd->prepare("SELECT id_patient, SUBSTR(nom, 1,1) as init_N, SUBSTR(prenom,1,1) 
        as init_P FROM patient WHERE user = '$user' AND mdp = '$mdp'");
        $requete_adm->execute();
        $requete_pat->execute();
        if ($requete_adm->rowCount()==1){
            session_destroy();
            session_start();
            $_SESSION["isLogged"]=true;
            $_SESSION["User_Profile"]="admin";
        
            header("Location: ./admin_patients.php");
            exit(); 
        }
        //connexion à la bdd en tant que patient---------
        elseif ($requete_pat->rowCount()==1){
            $results = $requete_pat->fetch(PDO::FETCH_ASSOC);
            session_destroy();
            session_start();
            $_SESSION["isLogged"]=true;
            $_SESSION["User_Profile"]="patient";
            $_SESSION["id_patient"]=$results["id_patient"];
            $_SESSION["User_Initials"]=$results["init_P"].$results["init_N"];

            header("Location: ./recettes_patient.php");
            exit(); 
        }
        else{
            $error_msg = "Email ou mot de passe incorrect !";
        }
    };
}
#------------------insertion patient----------------------
$allergene = ['Arachide', 'Céleri', 'Crustacés', 'Gluten','Fruits à coque','Lait','Lupin','Œuf','Poisson','Mollusques',
'Moutarde','Sésame','Soja','Sulfate'];
$regime = ['Regime végétarien', 'Régime végétalien','Régime végan', 'Régime flexitarien','Régime anticholestérol','Régime sans sel',
'Régime sans gluten','Régime sans lactose','Régime hypocalorique'];

if(isset($_POST['valide_Patient'])){
    unset($_SESSION["erreur"]);
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $birthdate =$_POST['birthdate'];
    $user =$_POST['user'];
    $mdp =$_POST['mdp'];
    $genre =(isset($_POST['genre']))?$_POST['genre']:"";
    $allergene_1 =(isset($_POST['allergene_1']))?"1":"0";
    $allergene_2 =(isset($_POST['allergene_2']))?"1":"0";
    $allergene_3 =(isset($_POST['allergene_3']))?"1":"0";
    $allergene_4 =(isset($_POST['allergene_4']))?"1":"0";
    $allergene_5 =(isset($_POST['allergene_5']))?"1":"0";
    $allergene_6 =(isset($_POST['allergene_6']))?"1":"0";
    $allergene_7 =(isset($_POST['allergene_7']))?"1":"0";
    $allergene_8 =(isset($_POST['allergene_8']))?"1":"0";
    $allergene_9 =(isset($_POST['allergene_9']))?"1":"0";
    $allergene_10 =(isset($_POST['allergene_10']))?"1":"0";
    $allergene_11 =(isset($_POST['allergene_11']))?"1":"0";
    $allergene_12 =(isset($_POST['allergene_12']))?"1":"0";
    $allergene_13 =(isset($_POST['allergene_13']))?"1":"0";
    $allergene_14 =(isset($_POST['allergene_14']))?"1":"0";
    $regime_1 =(isset($_POST['regime_1']))?"1":"0";
    $regime_2 =(isset($_POST['regime_2']))?"1":"0";
    $regime_3 =(isset($_POST['regime_3']))?"1":"0";
    $regime_4 =(isset($_POST['regime_4']))?"1":"0";
    $regime_5 =(isset($_POST['regime_5']))?"1":"0";
    $regime_6 =(isset($_POST['regime_6']))?"1":"0";
    $regime_7 =(isset($_POST['regime_7']))?"1":"0";
    $regime_8 =(isset($_POST['regime_8']))?"1":"0";
    $regime_9 =(isset($_POST['regime_9']))?"1":"0";
    
    try{
        $requete = $bdd->prepare("INSERT INTO patient VALUES(0, :nom, :prenom, :email, :birthdate, :user, :mdp, :genre, :allergene_1,
    :allergene_2, :allergene_3, :allergene_4, :allergene_5, :allergene_6, :allergene_7, :allergene_8, :allergene_9, :allergene_10,
    :allergene_11, :allergene_12, :allergene_13, :allergene_14, :regime_1, :regime_2, :regime_3, :regime_4, :regime_5, :regime_6, :regime_7, :regime_8, :regime_9)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "birthdate" => $birthdate,
            "user" => $user,
            "mdp" => $mdp,
            "genre" => $genre,
            "allergene_1" => $allergene_1,
            "allergene_2" => $allergene_2,
            "allergene_3" => $allergene_3,
            "allergene_4" => $allergene_4,
            "allergene_5" => $allergene_5,
            "allergene_6" => $allergene_6,
            "allergene_7" => $allergene_7,
            "allergene_8" => $allergene_8,
            "allergene_9" => $allergene_9,
            "allergene_10" => $allergene_10,
            "allergene_11" => $allergene_11,
            "allergene_12" => $allergene_12,
            "allergene_13" => $allergene_13,
            "allergene_14" => $allergene_14,
            "regime_1" => $regime_1,
            "regime_2" => $regime_2,
            "regime_3" => $regime_3,
            "regime_4" => $regime_4,
            "regime_5" => $regime_5,
            "regime_6" => $regime_6,
            "regime_7" => $regime_7,
            "regime_8" => $regime_8,
            "regime_9" => $regime_9,
            )
        );
    }
    catch(PDOException $e){
    if ($error_msg= "SQLSTATE[23000]") {
        $_SESSION["erreur"] = "L'identifiant existe déjà";
        header("Location: ./admin_patient.php");
    }
    }
}
#----------------insertion recette--------------------

if(isset($_POST['valide_Recette'])){
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $preparation = $_POST['preparation'];
    $repos = $_POST['repos'];
    $cuisson = $_POST['cuisson'];
    $ingredient = $_POST['ingredient'];
    $etape = $_POST['etape'];
    $for_patient = (isset($_POST['for_patient']))?"1":"0";
    $allergene_1 =(isset($_POST['allergene_1']))?"1":"0";
    $allergene_2 =(isset($_POST['allergene_2']))?"1":"0";
    $allergene_3 =(isset($_POST['allergene_3']))?"1":"0";
    $allergene_4 =(isset($_POST['allergene_4']))?"1":"0";
    $allergene_5 =(isset($_POST['allergene_5']))?"1":"0";
    $allergene_6 =(isset($_POST['allergene_6']))?"1":"0";
    $allergene_7 =(isset($_POST['allergene_7']))?"1":"0";
    $allergene_8 =(isset($_POST['allergene_8']))?"1":"0";
    $allergene_9 =(isset($_POST['allergene_9']))?"1":"0";
    $allergene_10 =(isset($_POST['allergene_10']))?"1":"0";
    $allergene_11 =(isset($_POST['allergene_11']))?"1":"0";
    $allergene_12 =(isset($_POST['allergene_12']))?"1":"0";
    $allergene_13 =(isset($_POST['allergene_13']))?"1":"0";
    $allergene_14 =(isset($_POST['allergene_14']))?"1":"0";
    $regime_1 =(isset($_POST['regime_1']))?"1":"0";
    $regime_2 =(isset($_POST['regime_2']))?"1":"0";
    $regime_3 =(isset($_POST['regime_3']))?"1":"0";
    $regime_4 =(isset($_POST['regime_4']))?"1":"0";
    $regime_5 =(isset($_POST['regime_5']))?"1":"0";
    $regime_6 =(isset($_POST['regime_6']))?"1":"0";
    $regime_7 =(isset($_POST['regime_7']))?"1":"0";
    $regime_8 =(isset($_POST['regime_8']))?"1":"0";
    $regime_9 =(isset($_POST['regime_9']))?"1":"0";

    if(isset($_FILES['file'])){
        $tmpName = $_FILES['file']['tmp_name'];
        $image = './uploads/recipes/'.$titre;
        move_uploaded_file($tmpName, $image);
    }

    $requete = $bdd->prepare("INSERT INTO recipes VALUES(0, :titre, :preparation, :repos, :cuisson, :description, :ingredient, :etape, :image, :for_patient, :allergene_1,
    :allergene_2, :allergene_3, :allergene_4, :allergene_5, :allergene_6, :allergene_7, :allergene_8, :allergene_9, :allergene_10,
    :allergene_11, :allergene_12, :allergene_13, :allergene_14, :regime_1, :regime_2, :regime_3, :regime_4, :regime_5, :regime_6, :regime_7, :regime_8, :regime_9)");
    $requete->execute(
        array(
            "titre" => $titre,
            "description" => $description,
            "preparation" => $preparation,
            "repos" => $repos,
            "cuisson" => $cuisson,
            "ingredient" => $ingredient,
            "etape" => $etape,
            "image" => $image,
            "for_patient" => $for_patient,
            "allergene_1" => $allergene_1,
            "allergene_2" => $allergene_2,
            "allergene_3" => $allergene_3,
            "allergene_4" => $allergene_4,
            "allergene_5" => $allergene_5,
            "allergene_6" => $allergene_6,
            "allergene_7" => $allergene_7,
            "allergene_8" => $allergene_8,
            "allergene_9" => $allergene_9,
            "allergene_10" => $allergene_10,
            "allergene_11" => $allergene_11,
            "allergene_12" => $allergene_12,
            "allergene_13" => $allergene_13,
            "allergene_14" => $allergene_14,
            "regime_1" => $regime_1,
            "regime_2" => $regime_2,
            "regime_3" => $regime_3,
            "regime_4" => $regime_4,
            "regime_5" => $regime_5,
            "regime_6" => $regime_6,
            "regime_7" => $regime_7,
            "regime_8" => $regime_8,
            "regime_9" => $regime_9,
            )
        );
}
#----------------insertion atelier--------------------
if(isset($_POST['valide_atelier'])){
    $titre = $_POST['titre'];
    $tps = $_POST['tps'];
    $lieu = $_POST['lieu'];
    $tarif = $_POST['tarif'];
    $description = $_POST['description'];

    if(isset($_FILES['file'])){
        $tmpName = $_FILES['file']['tmp_name'];
        $image = './uploads/ateliers/'.$titre;
        move_uploaded_file($tmpName, $image);
    }
    
    $requete = $bdd->prepare("INSERT INTO ateliers VALUES(0, :titre, :tps, :lieu, :tarif, :description, :image)");
    $requete->execute(
        array(
            "titre" => $titre,
            "tps" => $tps,
            "lieu" => $lieu,
            "tarif" => $tarif,
            "description" => $description,
            "image" => $image
            )
        );
} 
#--------------------insertion d'avis--------------
if(isset($_POST['valide_avis'])){
    $id_recette =$_GET['id_recette'];
    $avis =$_POST['avis'];
    $note = $_COOKIE["valeur_etoile"];

    $requete = $bdd->prepare("INSERT INTO avis VALUES(0, :id_recette, :avis, :note)");
    $requete->execute(
        array(
            "id_recette" => $id_recette,
            "avis" => $avis,
            "note" => $note
            )
        );
    }