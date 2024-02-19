<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar1.css">
    <title></title>
</head>

<body>
    <div class="navbar">

        <div class="logo">
            <img src="css/logo.png" alt="FrakIT">
        </div>
        
        <div class="linkpage">
            <ul class="list">

                <li><a href="../freakit/viewstopic.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Acceuil</a></li>
                <li><a href="../freakit/topic.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Topics</a></li>
                <li><a href="../freakit/mestopics.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">MesTopics</a></li>
                <li><a href="profil.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Profil</a></li>
                <li> <a href="../freakit/logoutaction.php" style="text-decoration: none;">Déconnexion </a> </li>

            </ul>
            
        </div>
        
    </div>
</body>

</html>