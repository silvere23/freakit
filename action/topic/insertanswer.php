<?php
require('action/data/connexion.php');

$id = $_GET['id'];

if (isset($_SESSION['id'])) {
    $checkClose = $connexion->query("SELECT close FROM topic WHERE id = '$id'");
    $topicStatus = $checkClose->fetchColumn();
    if ($topicStatus != 2) {
        if (isset($_POST['send'])) {
            $reponse = htmlspecialchars($_POST['reponse']);
            if (!empty($reponse)) {
                $insansw = $connexion->prepare('INSERT INTO answers(id_topic, id_auteur, reponse, banner, pseudo_auteur, date_publication) VALUES(?,?,?,?,?,DATE_FORMAT(NOW(), "%d/%m/%Y %H:%i:%s"))');
                $insansw->execute(array($id, $_SESSION['id'], $reponse, $_SESSION['banner'], $_SESSION['pseudo']));
                $erreur = "Votre réponse a bien été publiée !";
            } 
            else 
            {
                $erreur = "Veuillez remplir tous les champs.";
            }
        }
    } 
    else 
    {
        $erreur = "Le sujet est fermé, impossible de publier une réponse.";
    }
} 
else 
{
    $erreur = "Vous devez être connecté pour publier une réponse.";
}
