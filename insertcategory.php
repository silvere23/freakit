<?php
session_start();
require('action/data/connexion.php');
if (isset($_POST['confirm'])) {
    $category = $_POST['category'];
    $inscat = $connexion->prepare('INSERT INTO category (cat) VALUES (?)');
    $inscat->execute(array($category));

    $erreur = "votre category a été bien ajouté";
} else {
    $erreur = "echec ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/insertcategory.css">
    <title></title>
</head>

<body>
    <?php include("includes/navbaradmin.php"); ?>
    <br><br><br> <br><br><br>
    <div class="content">

        <form method="POST">
            <label for="category"></label>
            <input type="text" name="category" placeholder="insert a category">
            <div>
                <button type="submit" name="confirm">confirm</button>
            </div>

        </form>
        <div class="error">
            <?php
            if (isset($erreur)) {
                echo $erreur;
            }
            ?>
        </div>
    </div>

</body>

</html>