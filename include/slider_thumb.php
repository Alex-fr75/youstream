<?php include 'db.php'; ?>
<script>
  $(document).ready(function() {
  $('#myCarousel').carousel({
  interval: 10000
  })
    
    $('#myCarousel').on('slid.bs.carousel', function() {
      //alert("slid");
  });
    
    
});

</script>
<div class="container" id="slidemarg">
    <div class="col-md-12">

            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner" id="caroularge">


                    <div class="item active">
                        <div class="row">
                        <?php
// On récupère les 5 derniers billets
$req = $bdd->query('SELECT * FROM films ORDER BY dateajout ASC LIMIT 0, 6');

while ($donnees = $req->fetch())
{
?>
                            <div class="col-md-2">
                            <div class="hovereffectk">
        <img class="img-responsive" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/<?php echo $donnees['img_film']; ?>" alt="">
            <div class="overlayk">
                <h2><?php echo $donnees['titre']; ?></h2>

        <p><a><span class="glyphicon glyphicon-eye-open"></span> <?php echo $donnees['nb_clics']; ?> vues</a><br/>
          <a href="film.php?id=<?php echo $donnees['id']; ?>">REGARDER</a>
        </p>
            </div>
    </div>
                            </div>
                            <?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->


                    <div class="item">
                        <div class="row">
                         <?php
// On récupère les 5 derniers billets
$req = $bdd->query('SELECT * FROM films ORDER BY nb_clics DESC LIMIT 0, 6');

while ($donnees = $req->fetch())
{
?>
                           <div class="col-md-2">
                           <div class="hovereffectk">
        <img class="img-responsive" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/<?php echo $donnees['img_film']; ?>" alt="">
            <div class="overlayk">
                <h2>Effect 13</h2>
        <p><a><span class="glyphicon glyphicon-eye-open"></span> <?php echo $donnees['nb_clics']; ?> vues</a><br/>
          <a href="film.php?id=<?php echo $donnees['id']; ?>">REGARDER</a>
        </p>
            </div>
    </div>
                            </div>
                            <?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->

                    
                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
            <!--/myCarousel-->
        
    </div>
</div>
<hr>
<style>
  .carousel-control {
      padding-top: 7%;
    width: 5%;
    bottom: 0;
    font-size: 60px;
}
</style>