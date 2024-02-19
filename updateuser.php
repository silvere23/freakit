<?php
require("action/data/connexion.php");
$rol = "admin";
if (isset($_POST['update'])) {
    if (isset($_POST['coche']) && !empty($_POST['coche'])) {
        foreach ($_POST['coche'] as $iduser) {
            $requpdate = $connexion->prepare("UPDATE topic SET roles = $rol WHERE id = $iduser");
            $requpdate->execute([$iduser]);
        }
        header("Location: account.php");
    } else {
        echo "veuillez sélectionner un utilisateur.";
    }
}
?>
