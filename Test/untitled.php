<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
$moviesCompleteList->closeCursor();
?>

<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
	<title>Test</title>
   <link rel="stylesheet" type="text/css" href="style.css"></link>
   <body>
	   <p class="titre">Statistiques des films</p>
	   <table class="tableau">
      <tr>
         <th>Film</th>
         <th>Genre</th>
         <th>Durée (en min)</th>
         <th>Pays/Continent</th>
         <th>Date de publication</th>
         <th>Nombre d'entrées totaux</th>
         <th>Différence de jours</th>
         <th>Moyenne d'entrées par jour</th>
         <th>Moyenne d'entrées par semaine</th>
         <th>Moyenne d'entrées par mois</th>
      </tr>
      <?php
      include("stats.php");
      ?>
      </table>
   </head>
   </body>
</html>