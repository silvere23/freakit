<?php
session_start();
require('action/user/profilaction.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil2.css">
</head>
<body>
    <?php include("includes/navbaradmin.php"); ?>
    <br><br><br> <br><br><br>
    <form class="content">
        <br><br>
        <h2>Bonjour, <span><?php echo $pseudo; ?></span> </h2>
        <br> 
        <div class="avatar">
            <img src="css/icon.png" alt="Avatar">
        </div>
        <br>
        <hr style="opacity: calc(0.3);">
        <br>
        <div>
            <span> Pseudo : </span> <?php echo $pseudo; ?>
        </div>
        <hr style="opacity: calc(0.3);">
        <br>
        <div>
            <span> Email : </span> <?php echo $email; ?>
        </div>
        <hr style="opacity: calc(0.3);">
        <br>
        <div>
            <span>date de naissance : </span> <?php echo $birthday; ?>
        </div>
        <hr style="opacity: calc(0.3);">
        <br>
        <div>
            <span>Banner : </span> <?php echo $banner; ?>
        </div>
        <hr style="opacity: calc(0.3);">
        <br>
        <div>
            <span>Role : </span> <?php echo $roles; ?> 
        </div>
        <hr style="opacity: calc(0.3);">
        <br>
        <div>
            <span>statut : </span> <?php echo $statut; ?>
        </div>
    </form>

    <br>
    <div class="link">
        <div class="edit">
       
            <a href="editprofil.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Edit Profil </a> 
       
        </div>

        <div></div>
        
        <div class="delete">
   
            <a href="../freakit/action/user/deleteuseraction.php?<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Delete Account </a> 
      
        </div>
    </div>
   
    
</body>
</html>