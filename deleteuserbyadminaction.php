<?php
require("action/data/connexion.php");

if (isset($_POST['submit'])) {
    if (isset($_POST['coche']) && !empty($_POST['coche'])) {
        foreach ($_POST['coche'] as $id) {
            $reqdel = $connexion->prepare("DELETE FROM user WHERE id = ?");
            $reqdel->execute([$id]);
        }
        header("Location: account.php");
    } else {
        echo "veuillez sélectionner un utilisateur.";
    }
}
?>
