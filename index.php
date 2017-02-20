<?php include 'include/header.php'; ?>
<?php include 'include/slider_thumb.php'; ?>


<div class="container">
		<div class="row">

				<div class="col-md-9">
<?php
			// On récupère les 5 derniers films
$req = $bdd->query('SELECT * FROM films ORDER BY dateajout ASC LIMIT 0, 12');

while ($donnees = $req->fetch())
{
?>
 						<div class="col-md-3" id="img-acc">
                				<div class="hovereffect">
        								<img class="img-responsive" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/<?php echo $donnees['img_film']; ?>" alt="">
        							<div class="overlay">
            							<h2><?php echo $donnees['titre']; ?></h2>
            							<p><?php echo substr($donnees['description'], 0, 90); ?>...</p>
            							<a class="info" href="film.php?id=<?php echo $donnees['id']; ?>"><span class="glyphicon glyphicon-play"></span></a>
									</div>
    							</div>
						</div>
<?php
} // Fin de la boucle des film
$req->closeCursor();
?>
				</div>



<div class="col-md-3" id="sidebar">
<?php include 'include/sidebar.php'; ?>

</div>


<!-- fin container et row -->
		</div>
</div>

<?php include 'include/footer.php'; ?>