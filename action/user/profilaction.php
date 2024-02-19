<?php

require('action/data/connexion.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

   
    $iduser = $_GET['id'];

    $requser = $connexion->prepare('SELECT pseudo, email, birthday, roles, statut, banner  FROM user WHERE id = ?');
    $requser->execute(array($iduser));

    if($requser->rowCount() > 0){
        

        $usersInfos = $requser->fetch();

        $pseudo = $usersInfos['pseudo'];
        $email = $usersInfos['email'];
        $birthday = $usersInfos['birthday'];
        $roles = $usersInfos['roles'];
        $statut = $usersInfos['statut'];
        $banner = $usersInfos['banner'];

    }
    else
    {
        $erreur = "Aucun utilisateur trouvé";
    }

}else{
    $erreur = "Aucun utilisateur trouvé";
}