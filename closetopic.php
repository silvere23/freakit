<?php
require('action/data/connexion.php');

if (isset($_GET['id'])) {
    $idtopic = $_GET['id'];
    $clse = "UPDATE topic SET close = 2 WHERE id = '$idtopic'";
    if ($connexion->query($clse)) {

        header ("location: mestopics.php");

    }else {
    echo "veuillez sélectionner un utilisateur.";
    }
}
?>
