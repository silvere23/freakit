<?php
require("action/data/connexion.php");

if (isset($_POST['submit'])) {
    if (isset($_POST['coche']) && !empty($_POST['coche'])) {
        foreach ($_POST['coche'] as $idTopic) {
            $reqdeltop = $connexion->prepare("DELETE FROM topic WHERE id = ?");
            $reqdeltop->execute([$idTopic]);
        }
        header("Location: topicadmin.php");
    } else {
        echo "Veuillez sélectionner au moins un topic à supprimer.";
    }
}
?>
