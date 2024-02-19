<?php
require("../data/connexion.php");

if(isset($_GET['id'])) {
    $iduser = $_GET['id'];

    $requser = $connexion->prepare('DELETE FROM user WHERE id = ?');
    $requser->execute(array($iduser));
    var_dump($requser);

    header("location: acceuil.php");
}
?>
