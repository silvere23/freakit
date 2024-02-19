<?php
session_start();
require("action/data/connexion.php");
require("deletecategory.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewcategory.css">
</head>

<body>
    <?php include("includes/navbaradmin.php"); ?>
    <br><br><br> <br><br><br>
    <form method="POST" >
        <?php
        $reqtop = $connexion->prepare('SELECT * FROM category');
        $reqtop->execute();

        echo "<table>";

        echo '<tr class="title">';
        echo "<td>ID</td>";
        echo "<td>Category</td>";
        echo "<td></td>";
        echo "</tr>";

        while ($data = $reqtop->fetch(PDO::FETCH_ASSOC)) {

            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['cat'] . "</td>";
            echo "<td><input class='' type='checkbox' name='coche[]' value='{$data['id']}' </td>";
            echo "</tr>";
        }
        echo "</table>";

        ?>
        <div class="bouton" >
            <input class='supr' type='submit' name='submit' value='Supprimer' />
            <input class='modif' type='submit' name='submit' value='Modifier' />
            <a href="insertcategory.php" class='add' > Ajouter</a>
        </div>
     
    </form>
</body>

</html>
