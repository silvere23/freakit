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

                <li><a href="viewstopicadmin.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Acceuil</a></li>
                <li> <a href="account.php" style="text-decoration: none;">Acount </a> </li>
                <li> <a href="viewcategory.php" style="text-decoration: none;">Category </a> </li>
                <li><a href="topicadmin.php" style="text-decoration: none;">Topics</a></li>
                <li><a href="profiladmin.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration: none;">Profil</a></li>
                <li> <a href="logoutaction.php" style="text-decoration: none;">Déconnexion </a> </li>

            </ul>
            
        </div>
        
    </div>
</body>

</html>