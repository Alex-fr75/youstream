<?php include 'include/header.php'; ?>
<?php include 'include/slider_thumb.php'; ?>
<link rel="stylesheet" href="css/rate.min.css">
<script src="js/jquery.rate.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Bande Annonce de <?php echo $donnees['titre']; ?></h4>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="320px" src="https://www.youtube.com/embed/<?php echo $keyyt; ?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
		<div class="row">

				<div class="col-md-9">
				<div class="row">
				<div class="col-md-3">
				<select class="selectpicker" multiple title="Choisire une catégorie...">
  <option>Action</option>
  <option>Policier</option>
  <option>Comédie</option>
  <option>Horreur</option>
  <option>Sciences Fiction</option>
  <option>Drame</option>
  <option>Thriller</option>
</select>
</div>
</div>
<?php
			// On récupère les 5 derniers films
$req = $bdd->query('SELECT * FROM films ORDER BY dateajout ASC LIMIT 0, 6');

while ($donnees = $req->fetch())
{
?>
					 <div class="row">
      <div class="col-md-8">
        <h2><strong><a href="film.php?id=<?php echo $donnees['id']; ?>"><?php echo $donnees['titre']; ?></a></strong></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="film.php?id=<?php echo $donnees['id']; ?>" class="thumbnail">
            <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/<?php echo $donnees['img_film']; ?>" alt="">
        </a>
      </div>
      <div class="col-md-6" id="desctxt">      
        <p>
          <?php echo substr($donnees['description'], 0, 500); ?>...
        </p>
        <p></p>
      </div>
      <div class="col-md-3">      
<h4 class="notetitre">Note TMDB</h4>
              <div class="demo" data-value="7.4"></div><br />
              <button id="btn_framelist" class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">Bande Annonce</button>
       
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <p></p>
        <p>
          <a>Année </a><span class="label label-default"><i class="fa fa-calendar-o" aria-hidden="true"></i> 2010</span>
                  <a>   Genres </a><span class="label label-default"><i class="fa fa-info" aria-hidden="true"></i> Action</span> <span class="label label-default"><i class="fa fa-info" aria-hidden="true"></i> Action</span>
                  <a>   Durée </a><span class="label label-default"><i class="fa fa-clock-o" aria-hidden="true"></i> 1H30</span>
        </p>
      </div>
    </div><hr class="separator">
    <?php
} // Fin de la boucle des film
$req->closeCursor();
?>
<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
				</div>



                <div class="col-md-3" id="sidebar">
					<?php include 'include/sidebar.php'; ?>

				</div>


<!-- fin container et row -->
		</div>
</div>
<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
  method: 'share',
  mobile_iframe: true,
  href: 'http://youstream.com',
}, function(response){});}
</script>
<script>
 $('.demo').rateCircle({
    size: 80,
    lineWidth: 10,
    fontSize: 30,
    referenceValue: 10
});
</script>
<?php include 'include/footer.php'; ?>