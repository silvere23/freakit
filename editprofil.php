<?php 
require ('action/data/connexion.php');
require('action/user/editprofilaction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/singup1.css">
    <title></title>
</head>
<body>
    <?php include 'includes/navbaracceuil.php'; ?>
    <br> <br> <br><br> <br>
    <div class="error" >
        <?php
            if(isset($erreur))
            {
                echo $erreur;
            }
        ?>
    </div>
    <h2>Modifier votre profil</h2>
    <br>
    <div class="container">
       
        <form class="countener" method="post">

            <div>
                <label for="Pseudo">Pseudo</label>
                <input type="text"  name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
            </div>
            <div>
                <label for="Email">Email</label>
                <input type="text"  name="email" value="<?php if(isset($email)) { echo $email; } ?>">
            </div>
            <div>
                <label for="Birthday">Birthday</label>
                <input type="date"  name="birthday" value="<?php if(isset($birthday)) { echo $birthday; } ?>">
            </div>
            <div>
                <label for="Banner">Banner</label>
                <input type="text"  name="banner" value="<?php if(isset($banner)) { echo $banner; } ?>">
            </div>
            <button type="submit" name="confirm">S'inscrire</button>

        
        </form>
        <br>
        
       
    </div>
    
</body>
</html>