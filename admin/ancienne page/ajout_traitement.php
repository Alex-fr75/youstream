<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=streaming;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$date1 = $_POST['date'];
$idtmdb = $_POST['idtmdb'];

// On ajoute une entrée dans la table jeux_video
$req = $bdd->prepare('INSERT INTO films(dateajout, idtmdb) VALUES(:date3, :idtmdb1)');
$req->execute(array(
	'date3' => $date1,
	'idtmdb1' => $idtmdb,
	));

echo 'Le jeu a bien été ajouté !';
?>