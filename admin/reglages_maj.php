<?php
$urlsite = htmlentities($_POST['urlsite']);
$titresite = htmlentities($_POST['titresite']);
$descsite = htmlentities($_POST['descsite']);
$codepub =  $_POST['codepub'];
$theme = htmlentities($_POST['theme']);

 
// Connexion à la base de données
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=streaming','root', '', $pdo_options);
 }
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}    
    // Insertion du message à l'aide d'une requête préparée
    $stmt = $bdd->prepare('UPDATE config SET url_site = :urlsite, titre_site = :titresite, desc_site = :descsite, code_pub = :codepub, theme = :theme');
$stmt->bindValue(':urlsite', $urlsite, PDO::PARAM_STR);
$stmt->bindValue(':titresite', $titresite, PDO::PARAM_STR);
$stmt->bindValue(':descsite', $descsite, PDO::PARAM_STR);
$stmt->bindValue(':codepub', $codepub, PDO::PARAM_STR);
$stmt->bindValue(':theme', $theme, PDO::PARAM_STR);
$stmt->execute();

header('Location: reglages.php');