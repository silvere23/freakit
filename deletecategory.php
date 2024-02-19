<?php
require("action/data/connexion.php");

if (isset($_POST['submit'])) {
    if (isset($_POST['coche']) && !empty($_POST['coche'])) {
        foreach ($_POST['coche'] as $id) {
            $reqdeltop = $connexion->prepare("DELETE FROM category WHERE id = ?");
            $reqdeltop->execute([$id]);
        }
        header("Location: viewcategory.php");
    } else {
        echo "Veuillez sélectionner au moins un topic à supprimer.";
    }
}
?>
