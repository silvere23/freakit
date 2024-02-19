<?php

require('action/data/connexion.php');

if(isset($_POST['answers'], $_POST['answers'])){
    if (!empty($_POST['answers'])){

    }
    else
    {
        $erreur = "Veuillez ecrire une reponse";
    }
}


if(isset($_GET['id']) AND !empty($_GET['id'])){

   
    $iduser = $_GET['id'];

    $reqtopic = $connexion->query('SELECT topic.*, category.cat, user.banner FROM topic JOIN category ON topic.id_cat = category.id JOIN user ON user.id = topic.id_auteur ORDER BY topic.id DESC');
}

?>