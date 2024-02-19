<?php
session_start();
require('action/data/connexion.php');

    if (isset($_POST['confirm'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $birthday = htmlspecialchars($_POST['birthday']);
        $banner = htmlspecialchars($_POST['banner']);

        $id = $_SESSION['id'];

        $updateQuery = $connexion->prepare("UPDATE user SET pseudo = ?, email = ?, birthday = ?, banner = ? WHERE id = ?");
        $updateQuery->execute([$pseudo, $email, $birthday, $banner, $roles, $statut, $id]);

        header("Location: profil.php");
    }
    else 
    {
    header("Location: profil.php");
    exit;
}
?>
