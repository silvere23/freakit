<?php

require('action/data/connexion.php');

if(isset($_POST["confirm"]))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);       
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = sha1($_POST['passwords']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $banner = htmlspecialchars($_POST['banner']);

    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['passwords']) AND !empty($_POST['birthday']) AND !empty($_POST['banner']))
    {
        

        $pseudosize = strlen($pseudo);
        if($pseudosize <= 44)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $reqemail = $connexion->prepare("SELECT * FROM user WHERE email = ?");
                $reqemail->execute(array($email));
                $emailexist = $reqemail->rowCount();
                $reqemail = $connexion->prepare("SELECT * FROM user WHERE pseudo = ?");
                $reqemail->execute(array($pseudo));
                $pseudoexist = $reqemail->rowCount();

                if($emailexist == 0)
                {
                    if($pseudoexist == 0)
                    {
                        $insertuser = $connexion->prepare("INSERT INTO user(pseudo, email, passwords, birthday, banner) VALUES(?, ?, ?, ?, ?)");
                        $insertuser->execute(array($pseudo, $email, $password, $birthday, $banner));
                        $erreur = "votre compte a été bien créé!";
                        header("location: index.php");
                        
                    }
                    else
                    {
                        $erreur = "Ce pseudo est déjà utilisé";
                    }
                    
                }
                else
                {
                    $erreur = "cette adresse mail entrée existe déjà";
                }
              
            }
            else
            {
                $erreur = "l'adresse mail n'est pas valide";
            }
            
        }
        else
        {
            $erreur = "Votre pseudo doit pas depasser 44 caractères";
        }
    }
    else
    {
        $erreur = "Veuillez remplir tous les champs";
    }
 
   
    
}
?>