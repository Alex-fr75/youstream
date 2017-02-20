<?php include 'include/header.php'; ?>
<?php include 'include/slider_thumb.php'; ?>

<link rel="stylesheet" href="css/rate.min.css">
<script src="js/jquery.rate.min.js"></script>
<script src="https://use.fontawesome.com/836b545382.js"></script>
 <script src="js/jquery.plainoverlay.js"></script>
<?php
// Récupération du billet
$req = $bdd->prepare('SELECT * FROM films WHERE id = ?');
$req->execute(array($_GET['id']));
$donnees = $req->fetch();
?>

<?php
$idkey = $donnees['idtmdb'];
// on effectue la requete GET
$file = file_get_contents("https://api.themoviedb.org/3/movie/$idkey/videos?api_key=63420a9c6c706732fdfd646021522039&language=fr-FR");

// on decode les donnés dans un tableau
$tableau = json_decode($file, true);

// on affiche les resultats
$keyyt = ($tableau["results"]["0"]["key"]);
?>
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
          <h1><?php echo $donnees['titre']; ?></h1>
          <ul class="nav nav-tabs nav-justified">
              <li class="active"><a data-toggle="tab" href="#Lien1">Lien 1</a></li>
              <li><a data-toggle="tab" href="#lien2">Lien 2</a></li>
              <li><a data-toggle="tab" href="#lien3">Lien 3</a></li>
              <li><a data-toggle="tab" href="#lien4">Lien 4</a></li>
              <li><a data-toggle="tab" href="#lien5">Lien 5</a></li>
          </ul>
          <div class="tab-content">
          <div id="lien1" class="tab-pane fade in active">
                
                <iframe id="frameover" width="100%" height="550" src="https://www.youtube.com/embed/_vNMDieZ2J4" frameborder="0" allowfullscreen></iframe>


          </div>
          <div id="lien2" class="tab-pane fade">
                <iframe src='http://vidup.me/embed-dhqlzt88894q.html' allowfullscreen height='500' width='100%' /></iframe>
          </div>
          <div id="lien3" class="tab-pane fade">
                <iframe src='http://vidup.me/embed-dhqlzt88894q.html' allowfullscreen height='500' width='100%' /></iframe>
          </div>
          <div id="lien4" class="tab-pane fade">
                <iframe src='http://vidup.me/embed-dhqlzt88894q.html' allowfullscreen height='500' width='100%' /></iframe>
          </div>
          <div id="lien5" class="tab-pane fade">
                <iframe src='http://vidup.me/embed-dhqlzt88894q.html' allowfullscreen height='500' width='100%' /></iframe>
          </div>
          </div>

          <div class="col-md-12" id="statsbottom">
              <h3><span id="iconbox" class="glyphicon glyphicon-eye-open"></span><span id="statsbottomtxt"><?php echo $donnees['nb_clics']; ?> VUES</span></h3>
          </div>
          <br />
          <div class="col-md-12" id="socialebox">
              <h4>Partager le film <?php echo $donnees['titre']; ?> sur les réseaux sociaux</h4>
              <ul class="mbm_social">
                  <li><a class="social-facebook" id="shareBtn">
                      <i class="fa fa-facebook"><small>facebook</small></i>
                      <div class="tooltip"><span>Partager sur facebook</span></div>
                      </a>
                  </li>
                  <li><a class="social-twitter" href="http://twitter.com/share?url=http://codepen.io/patrickkahl&amp;text=Share popup on &amp;hashtags=codepen">
                      <i class="fa fa-twitter"><small>Twitter</small></i>
                      <div class="tooltip"><span>Partager sur Twitter</span></div>
                      </a>
                  </li>
                  <li><a class="social-google-plus" href="#">
                      <i class="fa fa-google-plus"><small>google +</small></i>
                      <div class="tooltip"><span>Partager sur Google</span></div>
                      </a>
                  </li>
                  <li><a class="social-linkedin" href="#">
                      <i class="fa  fa-linkedin"><small>linkedin</small></i>
                      <div class="tooltip"><span>Partager sur linkedin</span></div>
                      </a>
                  </li>
              </ul>
          </div>
<script>
$('#lien1').plainOverlay('show', {
  progress: function() { return $('<div id="adsframe"><a onClick="closepub()"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a><div id="adspub"><?php echo $congig['code_pub']; ?></div></div>'); }
});
function closepub() {
    $('#lien1').plainOverlay('hide');  
}
</script>


    <div class="col-md-12" id="infodesc">

          <div class="col-md-3">
              <div class="hovereffectk" id="imgfilms">
        <img class="img-responsive" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/<?php echo $donnees['img_film']; ?>" alt="">
            <div class="overlayk">
                <h2><?php echo $donnees['titre']; ?></h2>
            </div>
            </div>
          </div>

          <div class="col-md-7" id="blockstats">
              <div class="card-block">
                  <h4 class="card-title"><?php echo $donnees['titre']; ?></h4>
                  <p class="card-text"><?php echo $donnees['description']; ?></p>
                  <p id="cardstats">
                  <a>Année </a><span class="label label-default"><i class="fa fa-calendar-o" aria-hidden="true"></i> 2010</span>
                  <a>   Genres </a><span class="label label-default"><i class="fa fa-info" aria-hidden="true"></i> Action</span> <span class="label label-default"><i class="fa fa-info" aria-hidden="true"></i> Action</span>
                  <a>   Durée </a><span class="label label-default"><i class="fa fa-clock-o" aria-hidden="true"></i> 1H30</span>
                  </p>
              </div>
          </div>

          <div class="col-md-2">
              <h4 class="notetitre">Note TMDB</h4>
              <div class="demo" data-value="7.4"></div><br />
              <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">Bande Annonce</button>
          </div>

    </div>



    <div class="col-md-12" id="com">
    <div id="disqus_thread"></div>
<script>
    var disqus_config = function () {
        this.page.url = $_SERVER['REQUEST_URI'];  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = $donnees['id']; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//devellopementperso.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    </div>
  </div><!--fin col md9 -->



<div class="col-lg-3" id="sidebar">
<?php include 'include/sidebar.php'; ?>
</div>


<!--fin container et row -->
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

<!--compteur vue -->
<?php 
  $view = $donnees['nb_clics'];
  $idk = $donnees['id'];
  $newview = $view+1;
                  
  $req = $bdd->prepare('UPDATE films SET nb_clics = :newviewf WHERE id = :idf');
  $req->execute(array(
  'newviewf' => $newview,
  'idf' => $idk,
  ));
?>
<!-- fin du compteur vue -->

<?php
$req->closeCursor();
?>
<?php include 'include/footer.php'; ?>