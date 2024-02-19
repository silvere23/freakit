<?php
session_start();
require("action/data/connexion.php");
require("deleteuserbyadminaction.php");
require("updateuser.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <title>Document</title>
</head>

<body>
    <?php include("includes/navbaradmin.php"); ?>
    <br><br><br> <br><br><br>
    <form method="POST">
        <?php
        $requs = $connexion->prepare('SELECT * FROM user');
        $requs->execute();

        echo "<table>";

        echo '<tr class="title">';
        echo "<td>id</td>";
        echo "<td>pseudo</td>";
        echo "<td>email</td>";
        echo "<td>birthday</td>";
        echo "<td>banner</td>";
        echo "<td>statut</td>";
        echo "<td>roles</td>";
        echo "<td></td>";
        echo "</tr>";

        while ($data = $requs->fetch(PDO::FETCH_ASSOC)) {

            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['pseudo'] . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td>" . $data['birthday'] . "</td>";
            echo "<td>" . $data['banner'] . "</td>";
            echo "<td>" . $data['roles'] . "</td>";
            echo "<td>" . $data['statut'] . "</td>";
            echo "<td><input class='' type='checkbox' name='coche[]' value='{$data['id']}' </td>";
            echo "</tr>";
        }
        echo "</table>";

        ?>
    <input class='supr' type='submit' name='submit' value='Supprimer' />
    <input class='upd' type='submit' name='update' value='Statut' />
    </form>
</body>

</html>
