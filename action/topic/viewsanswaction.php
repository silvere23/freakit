<?php
require('action/data/connexion.php');

$idtopic = $_GET['id'];

$reqview = $connexion->query("SELECT * FROM answers WHERE id_topic = '$idtopic' ORDER BY answers.id DESC");

?>
