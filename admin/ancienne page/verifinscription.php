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
?>
<?php 
// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email) VALUES(:pseudo, :pass, :email)');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email
    ));
?>