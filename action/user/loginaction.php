<?php
session_start();

require('action/data/connexion.php');

if(isset($_POST["confirm"]))
{
    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = htmlspecialchars($_POST['passwords']);
  
    if(!empty($_POST['pseudo']) AND !empty($_POST['passwords']))
    {
        $requser = $connexion ->prepare("SELECT * FROM user WHERE pseudo = ?");
        $requser->execute(array($pseudo));
        $userexist = $requser->rowCount();
        if($userexist > 0)
        {
            $userinfo = $requser->fetch();
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['birthday'] = $userinfo['birthday'];
            $_SESSION['banner'] = $userinfo['banner'];
            $_SESSION['statut'] = $userinfo['statut'];
            $_SESSION['role'] = $userinfo['roles'];
            
            if($_SESSION['role']== "admin")
            {
                header("location: indexadmin.php?id=".$_SESSION['id']);
            }
            else
            {
                header("location: viewstopic.php?id=".$_SESSION['id']);
            }

        }
        else
        {
            $erreur = "identifiant ou mot de passe incorrect!";
        }
    }
    else
    {
        $erreur = "Veuillez remplir tous les champs";
    }
}
?>