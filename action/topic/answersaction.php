<?php
require('action/data/connexion.php');
$idtop = $_GET['id'];
$reqasw = $connexion->query("SELECT topic.*, category.cat FROM topic JOIN category ON topic.id_cat = category.id WHERE topic.id = '$idtop'");
?>
