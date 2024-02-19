<?php
require('action/data/connexion.php');

if (isset($_POST['answers'], $_POST['answers'])) {
    if (!empty($_POST['answers'])) {
    } else {
        $erreur = "Veuillez écrire une réponse";
    }
}
if (isset($_SESSION['id'])) {

    $iduser = $_SESSION['id'];

    $reqtopic = $connexion->prepare('SELECT topic.id, topic.title, category.cat, topic.sujet, topic.id_auteur, topic.pseudo_auteur, 
    topic.date_publication, user.banner FROM topic JOIN category ON topic.id_cat = category.id JOIN user ON user.id = topic.id_auteur 
    WHERE topic.id_auteur = ? ORDER BY topic.id DESC');
    $reqtopic->execute([$iduser]);
} 
else
{
  $erreur = "veuillez inserer un topic";
}
