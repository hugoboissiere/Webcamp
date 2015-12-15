<?php
$headTitle = "Cinewax - Fiche detaill�e";
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
          <span class="dataTitle">Dur�e</span>
          <span class="dataContent"><?php echo $result->runningTime; ?> Minutes</span>
        </li>
        <li>
          <span class="dataTitle">Genre</span>
          <span class="dataContent"><?php echo $result->genre;?></span>
        </li>
        <li>
          <span class="dataTitle">R�alisateur</span>
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
          <span class="dataContent"><?php echo $result->plot; ?></span>
        </ul>
      </div>
    </div>
    <?php
    
  }

  $movieDetail->closeCursor();

  ?> 
  <?php
  include("php/includes/scripts.php");
  ?>

</body>
</html>
