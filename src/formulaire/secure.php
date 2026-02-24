<?php 
    session_start();

    if (!isset($_SESSION["user_email"])) { 
        header("Location: index.php"); 
        exit; 
    }
?>

<!DOCTYPE html> 
<html lang="fr"> 

    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Page sécurisée</title> 
    </head> 
    
    <body> 
        <h1>Bienvenue <?= htmlspecialchars($_SESSION["user_email"]) ?></h1> 

        <p>Vous êtes sur une page protégée accessible uniquement aux utilisateurs authentifiés.</p> 

        <a href="logout.php">Se déconnecter</a> 
    </body>    
</html>
