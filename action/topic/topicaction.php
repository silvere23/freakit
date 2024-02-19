<?php
require ('action/data/connexion.php');

if(isset($_SESSION['id'])) {
    if(isset($_POST['publish'])) {
        $title = htmlspecialchars($_POST['title']);
        $sujet = htmlspecialchars($_POST['sujet']);
        $id_cat = htmlspecialchars($_POST['id_cat']);

        if(!empty($title) && !empty($sujet) && !empty($id_cat)) 
        {
            $instopic = $connexion->prepare('INSERT INTO topic(title, sujet, banner, id_auteur, pseudo_auteur, date_publication, id_cat) VALUES(?,?,?,?,?, DATE_FORMAT(NOW(), "%d/%m/%Y %H:%i:%s"), ?)');
            $instopic->execute(array($title, $sujet, $_SESSION['banner'], $_SESSION['id'], $_SESSION['pseudo'], $id_cat));

            $erreur = "Votre topic a bien été publié!";
        } 
        else 
        {
            $erreur = "Veuillez remplir tous les champs";
        }
    }
}
?>
