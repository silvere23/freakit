<?php 
require ('action/data/connexion.php');
require('action/user/loginaction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login1.css">
    <title>Connexion</title>
</head>
<body>
    <?php include 'includes/navbaracceuil.php'; ?>
    <br> <br> <br><br> <br>

    <h2>Login</h2>
    <br>
    <div class="container">
        
        <form class="countener" method="POST">
            <div>
                <label for="pseudo">Pseudo :</label>
                <input type="text" placeholder="pseudo" name="pseudo">
            </div>
            <div>
                <label for="passwords">Password : </label>
                <input type="password" placeholder="mot de passe" name="passwords">
            </div>
            <button type="submit" name="confirm">Connexion</button>
            <div class="links">
                <a class="lien" href="singup.php">Pas de compte? s'incrire ici</a>
            </div>

        </form>
        <br>
        <div class="error" >
             <?php
                if(isset($erreur))
                {
                    echo $erreur;
                }
            ?>
        </div>
        
    </div>
    
</body>
</html>