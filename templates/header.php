<?php
    require_once('lib/config.php');

    $mainMenu = [
        'index.php'=> 'Accueil',
        'alimentation.php'=> 'Alimentation et bien-être',
        'recettes.php'=> 'Les recettes',
        'ateliers.php'=> 'Les ateliers',
        'mes-services.php'=> 'Mes services',
        'contact.php'=> 'Contact',
    ];
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandrine Coupart diététicienne-nutritionniste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Farsan&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

    <header>  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex">
            <div class="p-2 flex-grow-1"> 
                <a href="./index.php">
                    <img src="assets/images/logo.png" alt="logo Sandrine-Coupart"width="70">
                </a>
                    <button class="navbar-toggler burger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation" style="top: 35px;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-underline">
                    <?php foreach ($mainMenu as $key => $value) {?>
                    <li class="nav-item">
                        <a href="<?= $key?>" class="nav-link<?php if ($currentPage === $key){echo' active ';} ?> orange" aria-current="page"><?=$value;?></a><?php } ?>
                    </li>
                    <?php if(isset($_SESSION['isLogged']) AND $_SESSION["isLogged"]==true){
                            if (isset($_SESSION['User_Profile']) AND $_SESSION['User_Profile'] == "admin"){?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Administration</a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin_patients.php">Mes patients</a></li>
                                <li><a class="dropdown-item" href="admin_ateliers.php">Mes ateliers</a></li>
                                <li><a class="dropdown-item" href="admin_recettes.php">Mes recettes</a></li>
                                </ul>
                            </li>
                        <?php }
                            else {?>
                            <li class="nav-item">
                            <a href="./recettes_patient.php" class="nav-link<?php if ($currentPage === $key){echo ' active ';} ?> orange" aria-current="page">Mes recettes</a>
                        <?php }}?>
                </ul>
            </div>
            <div class="login p-2 d-flex-shrink-0 dropdown">
                <a href="login.php" class="d-block link-body-emphasis text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if(isset($_SESSION['User_Profile']) AND $_SESSION['User_Profile'] == "admin"){?>
                                <p class="cercle_admin">SC</p>
                                <?php } else if(isset($_SESSION['User_Profile']) AND $_SESSION['User_Profile'] == "patient"){?>
                                <p class="cercle_patient"><?=$_SESSION["User_Initials"];?></p>
                            <?php }
                                else{?>
                                <img src="assets/images/login.png" alt="login" width="50" height="50" class="rounded-circle">
                    <?php } ?>
                </a>
                <ul class="dropdown-menu text-small">
                    <?php if(isset($_SESSION['isLogged']) AND $_SESSION['isLogged']==true){ ?>
                        <li><a class="dropdown-item" href="./logout.php">Déconnexion</a></li>
                    <?php } else {?>
                        <li><a class="dropdown-item" href="./login.php">Connexion</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    </header>
