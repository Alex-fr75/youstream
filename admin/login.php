<?php
// Connexion à la base de données
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=streaming;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);
$pseudo = $_POST['pseudo'];
// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    header('Location: index.php');
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
     header('Location: dashboard.php');

}
