<?php
session_start();
require("action/data/connexion.php");
require("deletetopic.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
</head>

<body>
    <?php include("includes/navbaradmin.php"); ?>
    <br><br><br> <br><br><br>
    <form method="POST" >
        <?php
        $reqtop = $connexion->prepare('SELECT * FROM topic');
        $reqtop->execute();

        echo "<table>";

        echo '<tr class="title">';
        echo "<td>ID</td>";
        echo "<td>USER</td>";
        echo "<td>TITLE</td>";
        echo "<td>SUJET</td>";
        echo "<td>DATE</td>";
        echo "<td></td>";
        echo "</tr>";

        while ($data = $reqtop->fetch(PDO::FETCH_ASSOC)) {

            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['pseudo_auteur'] . "</td>";
            echo "<td>" . $data['title'] . "</td>";
            echo "<td>" . $data['sujet'] . "</td>";
            echo "<td>" . $data['date_publication'] . "</td>";
            echo "<td><input class='' type='checkbox' name='coche[]' value='{$data['id']}' </td>";
            echo "</tr>";
        }
        echo "</table>";

        ?>
    <input class='supr' type='submit' name='submit' value='Supprimer' />
    </form>
</body>

</html>
