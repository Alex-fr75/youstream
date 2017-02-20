<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
  header ('Location: index.php');
  exit();
}

// Connexion à la base de données
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=streaming;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM config, films, membres');
$donnees= $reponse->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Administration</title>


    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/836b545382.js"></script>
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>
  <body>

  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="dashboard.php" class="logo">You<span class="lite">Stream</span></a>
            <!--logo end-->

      
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           
                            <span class="username"><?php echo $donnees['pseudo'] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profile.php"><i class="icon_profile"></i> Mon Profile</a>
                            </li>
                            <li class="eborder-top">
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Déconnexion</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
         <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="dashboard.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="active">
                      <a class="" href="reglages.php">
                          <i class="fa fa-cog" aria-hidden="true"></i>
                          <span>Réglages</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-television" aria-hidden="true"></i>
                          <span>Films</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Ajouter</a></li>                          
                          <li><a class="" href="listfilm.php">Modifier</a></li>
                      </ul>
                  </li>       
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Réglages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Acceuil</a></li>
						<li><i class="icon_document_alt"></i>Réglages</li>
						
					</ol>
				</div>
			</div>
           
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Elements
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="POST" action="reglages_maj.php">
                              <div class="form-group">
                                      <label class="col-sm-2 control-label">Theme</label>
                                      <div class="col-sm-2">
                                          <select name="theme" class="form-control m-bot15">
                                                <option><?php echo $donnees['theme'] ?></option>
                                                <option>Cerulean</option>
                                                <option>Cosmo</option>
                                                <option>Cyborg</option>
                                                <option>Darkly</option>
                                                <option>Flatly</option>
                                                <option>Journal</option>
                                                <option>Lumen</option>
                                                <option>Paper</option>
                                                <option>Simplex</option>
                                                <option>Slate</option>
                                                <option>Superhero</option>
                                                <option>Techie</option>
                                                <option>United</option>
                                                <option>Yeti</option>
                                          </select>

                                          <span class="help-block">Changer le theme.</span>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">URL</label>
                                      <div class="col-sm-10">
                                          <input name="urlsite" type="text" class="form-control" value="<?php echo $donnees['url_site'] ?>">
                                          <span class="help-block">L'adresse de votre site ex http://votresite.com http://votresite.com/dossier/.</span>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Titre</label>
                                      <div class="col-sm-10">
                                          <input name="titresite" type="text" class="form-control" value="<?php echo $donnees['titre_site'] ?>">
                                          <span class="help-block">Le titre du site.</span>
                                      </div>
                                  </div>
								                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Déscription</label>
                                      <div class="col-sm-10">
                                          <textarea name="descsite" id="descsite"class="form-control" rows="6"><?php echo $donnees['desc_site'] ?></textarea>
                                          <span class="help-block">La déscription du site.</span>
                                      </div>
                                  </div>
								  								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Publicité</label>
                                      <div class="col-sm-10">
                                          <textarea name="codepub" id="codepub"class="form-control" rows="6"><?php echo $donnees['code_pub'] ?></textarea>
                                          <span class="help-block">Code HTML de votre publicité au format 250X250.</span>
                                      </div>
                                  </div>
                                  <button class="btn btn-default">Enregistrer</button>
                              </form>

                          </div>
                      </section>
                      
                    
                  </div>
              </div>
          </section>
      </section>
      
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


  </body>
</html>
