<?php 
    require_once('templates/header.php');
    require_once('lib/config.php');
?><div class="m-3">
    <h1>Mot de passe oubliée</h1>
    <form method="post">
        <div class="container">
            <label for="email">Email</label>
            <input type="email" placeholder="Entrez votre mail..."name="email"required>
            <button type="submit">Envoyer nouveau mot de passe</button>
        </div>
    </form>
</div>

<?php 
    if(isset($_POST['email'])){
        $mdp = uniqid();
        $hashmdp = password_hash($mdp, PASSWORD_DEFAULT);

        $message ="Bonjour, voici votre nouveau mot de passe : $mdp";
        $header = 'Content-Type: text/plain; charset="utf-8"'." ";

        if(mail($_POST['email'], 'mot de passe oublié', $message, $header)){
            $sql = "UPDATE patient SET password = ? WHERE email = ?";
            $requete = $bdd->prepare($sql);
            $requete->execute([$hashmdp, $_POST['email']]);
            echo"mail envoyé";
            }
            else{
                echo "Une erreur est survenue...";
            }

    }
?>
<?php 
    require_once('templates/footer.php');
?>