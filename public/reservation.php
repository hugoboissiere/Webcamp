<?php
// Titre de la page
$headTitle = "Cinewax - Programmation";

// CSS de cette page
$addCSS =  array("");

// JS de cette page
$addJS =  array("");

// Queries de cette page
$addPHP = array("");
include("php/includes/head.php");

$sessionsCompleteList = $dbh->query("SELECT s.id, m.title, m.id as idMovie,m.genre, m.realisator, m.runningTime, s.date, t.name as theater
	FROM cw_medias_movies m, cw_cinema_sessions s, cw_cinema_theaters t
	WHERE t.id = s.idTheater AND s.idMovie = m.id AND s.archive = 'false' AND s.id = '" . $_GET['id'] . "'");        
$sessionsCompleteList->setFetchMode(PDO::FETCH_OBJ);

while($result = $sessionsCompleteList->fetch())
{

	$id = $result->idMovie;
}





$sessionsCompleteList->closeCursor();


$movieDetail = $dbh->query("SELECT * FROM cw_medias_movies WHERE id = '" . $id . "'");
$movieDetail->setFetchMode(PDO::FETCH_OBJ);


while ($result = $movieDetail->fetch()) {

	$sessionDetail = $dbh->query("SELECT * FROM cw_cinema_sessions WHERE id = '" . $_GET['id'] . "'");
	$sessionDetail->setFetchMode(PDO::FETCH_OBJ);


	while ($result2 = $sessionDetail->fetch())
	{
		$date = $result2->date;
		$subtitles = $result2->subtitles;
		$nb_places = $result2->nb_place;
		$idTheater = $result2->idTheater;
		$theaterDetail = $dbh->query("SELECT * FROM cw_cinema_theaters WHERE id = '" . $idTheater . "'");
		$theaterDetail->setFetchMode(PDO::FETCH_OBJ);
		while($result3 = $theaterDetail->fetch())
		{
			$cinemaName = $result3->name;
			$adress = $result3->address;
			$countryDetail = $dbh->query("SELECT * FROM region WHERE id_region = '" . $result3->country . "'");
			$countryDetail->setFetchMode(PDO::FETCH_OBJ);
			while($result35 = $countryDetail->fetch())
			{
				$countryName = $result35->nom_region;
			}
		
			$countryDetail->closeCursor();
		}
		$theaterDetail->closeCursor();
		
		$languageDetail = $dbh->query("SELECT * FROM cw_medias_languages WHERE id = '" . $result2->language . "'");
		$languageDetail->setFetchMode(PDO::FETCH_OBJ);
		while($result4 = $languageDetail->fetch())
		{
			$langue = $result4->name;
		}
		$languageDetail->closeCursor();
	}

	$sessionDetail->closeCursor();


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
			<div style="width:50%;">
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
						<span class="dataTitle">Pays</span>
						<span class="dataContent"><?php echo $result->country ?></span>
					</li>
					<li>
						<span class="dataTitle">Langue</span>
						<span class="dataContent"><?php echo $result->language; ?></span>
					</li>
						<span><?php echo $idTheater . $date . $subtitles . $nb_places . $cinemaName . $adress . $countryName . $langue; ?></span>
					<li>
						<span class="dataPlot">Description</span>
						<span class="dataContent"><?php echo $result->plot; ?></span>
					</li>
					<li>

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