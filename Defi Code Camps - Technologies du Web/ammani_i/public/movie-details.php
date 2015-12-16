<?php
$headTitle = "Cinewax - Fiche detaillée";
// Titre de la page

// CSS de cette page
$addCSS =  array("css/colorbox.css");

// JS de cette page
$addJS =  array("js/jquery.scrollNav.js","js/jquery.colorbox.js");

include("php/includes/head.php");
$id = $_GET['id'];

$movieDetail = $dbh->query("SELECT * FROM cw_medias_movies WHERE id = '" . $id . "'");
$movieDetail->setFetchMode(PDO::FETCH_OBJ);


while ($result = $movieDetail->fetch()) {





 $filenamePoster = 'resources/imgs/content/movies/'.$result->id.'Poster.jpg';

 if (file_exists($filenamePoster)) {
  $img = $filenamePoster;
} else {
 $rand =  rand(1,2);
 $img = 'resources/imgs/content/movies/defaultPoster'.$rand.'.jpg';
}  


$filenameCover = 'resources/imgs/content/movies/'.$result->id.'Cover.jpg';

if (file_exists($filenameCover)) {
  $cover = $filenameCover;
} else {
 $rand =  rand(1,2);
 $cover = 'resources/imgs/content/movies/defaultCover'.$rand.'.jpg';
}  

$_SESSION['erreur'] = "";
?>

<script>
$(document).ready(function(){
  $(".trailer").colorbox({iframe:true, innerWidth:500, innerHeight:409});

});
</script>
<div id="cover">
  <span></span>
  <img src="<?php echo $cover; ?>" alt="">

  <h2>
    <?php echo $result->title; ?>
    <span><?php echo $result->titleOriginal; ?></span>

  </h2>
  <?php if ($result->type != ""){ ?>
  <a class="trailer" href="<?php echo $result->type; ?>">Bande-Annonce</a>
  <?php } ?>
</div>
<div id="informations" style="margin-top:300px;">
  <div id="picture">
    <img src="<?php echo $img; ?>" alt="">
  </div>
  <div id="text">
    <div id="title">
      <ul>
        <li>
          <span class="dataTitle">Date de sortie</span>
          <span class="dataContent"><?php echo $result->releaseDate; ?></span>
        </li>
        <li>
          <span class="dataTitle">Durée</span>
          <span class="dataContent"><?php echo $result->runningTime; ?> Minutes</span>
        </li>
        <li>
          <span class="dataTitle">Genre</span>
          <span class="dataContent"><?php echo $result->genre;?></span>
        </li>
        <li>
          <span class="dataTitle">Réalisateur</span>
          <span class="dataContent"><?php echo $result->realisator; ?></span>
        </li>
        <li>
          <span class="dataTitle">Acteurs</span>
          <span class="dataContent"><?php echo $result->actors; ?></span>
        </li>
        <li>
          <span class="dataTitle">Production</span>
          <span class="dataContent"><?php echo $result->production; ?></span>
        </li>
        <li>
          <span class="dataTitle">Pays</span>
          <span class="dataContent"><?php echo $result->country ?></span>
        </li>
        <li>
          <span class="dataTitle">Langue</span>
          <span class="dataContent"><?php echo $result->language; ?></span>
        </li>
        <li>
          <span class="dataPlot">Description</span>
          <span class="dataContent"><?php echo $result->plot; ?></span><br/>
          <div style="height:200px; display:block;"></div>
        </ul>
      </div>
    </div>
    <?php
  echo '
  <div class="commentaires"><br/>
  <br/>
    <h2>Zone de commentaire</h2>
    <form method="POST" action="comments.php">
      <br/>
      <label for="commentaire">Poster un commentaire :</label><br/>
      <br/>
      <textarea name="commentaire" cols="50" rows="10"></textarea><br/>
      <br/>
      <input type="hidden" name="username" value="'.$_SESSION['username'].'" />
      <input type="hidden" name="region" value="'.$_SESSION['country'].'" />
      <input type="hidden" name="idmovie" value="'.$id.'" />
      <br/>
      <input type="submit" name="coco" value="Envoyer" />
      </div>';
      ?>

    <?php
    
  }

  $movieDetail->closeCursor();

  ?> 

<?php

$rep = $dbh->query('SELECT * FROM Commentaires WHERE id_film = '.$id.' AND region = "'.$_SESSION['country'].'" ');
$rep->setFetchMode(PDO::FETCH_OBJ);
while ($result = $rep->fetch())
{
?>
<div class="comzone">
  <p><?php  echo $result->username; ?>, le <?php echo $result->date; ?> : </p><br/>
  <p><?php echo $result->commentaire; ?></p>
</div>

<?php  
}

?>

  <?php
  include("php/includes/scripts.php");
  ?>

</body>
</html>
