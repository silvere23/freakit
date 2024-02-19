<?php
$host = "localhost";
$bdd = "freakitforum";
$user = "root";
$pwd = "";

try {
    $connexion = new PDO("mysql:host=$host;dbname=$bdd", $user, $pwd);
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?> 