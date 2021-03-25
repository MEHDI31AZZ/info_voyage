<?php
session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {
    $login = $_SESSION['login'];
    $mdp = $_SESSION['mdp'];
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Accueil du site</title>
    </head>
    <body>
        <?php
        if (isset($login) && isset($mdp)) {
            echo "<p>Vous avez été reconnu(e) en tant que " . escape($login) . "</p>";
            echo "<h1>Accueil du site</h1>";
        }
        else { ?>
           <p>L'accès à cette page est réservé aux utilisateurs authentifiés</p>
           <p><a href="connexion.php">Se connecter</a></p>
        <?php } ?>
    </body>
</html>