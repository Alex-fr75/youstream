<?php
$requete = $bdd->query('SELECT COUNT(id) AS Nbfilm FROM films');
$nbr_film = $requete->fetch();
?>
<form role="search">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-success" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span>
    </div>
</form>
<br />
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge"><?php echo $nbr_film['Nbfilm']; ?></span>
    Film
  </li>
  <li class="list-group-item">
    <span class="badge">0</span>
    Séries
  </li>
  <li class="list-group-item">
    <span class="badge">0</span>
    Anime
  </li>
</ul>
<div class="fb-page" data-href="https://www.facebook.com/Film-Streaming-T%C3%A9l%C3%A9chargement-Gratuit-240734119384212/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Film-Streaming-T%C3%A9l%C3%A9chargement-Gratuit-240734119384212/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Film-Streaming-T%C3%A9l%C3%A9chargement-Gratuit-240734119384212/?fref=ts">Film Streaming Téléchargement Gratuit</a></blockquote></div>
<br />
