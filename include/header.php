<?php include 'include/db.php'; ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?php echo $congig['titre_site']; ?></title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.<?php echo $congig['theme']; ?>.css">
  <link rel="stylesheet" href="css/normalize.css">
<script src="https://use.fontawesome.com/836b545382.js"></script>
  <!-- Script js bootstrap+jquery -->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.js"></script>
</head>

<body>
<a href="https://github.com/creasept/youstream"><img style="position: absolute; top: 0; right: 0; border: 0;    z-index: 99999;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '154928971600322',
      xfbml      : true,
      version    : 'v2.7'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/fr_FR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<!-- Début du menu -->
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      <a id="logostre" class="navbar-brand" href="<?php echo $congig['url_site']; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i> YouStream</a>
            </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="listtrext">
        <li><a href="film-list.php">Films <i class="fa fa-film" aria-hidden="true"></i></a></li>
        <li><a href="#">Séries <i class="fa fa-film" aria-hidden="true"></i></a></li>
        <li><a href="contact.php">contact <i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
      </ul>
    </div>
        </div>
</nav>
<!-- Fin du menu -->