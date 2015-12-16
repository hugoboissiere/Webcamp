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
         <th>Nom du cinéma</th>
         <th>Nombre total d'entrées</th>
         <th>Moyenne d'entree par jour</th>
         <th>Moyenne d'entree par semaine</th>
         <th>Moyenne d'entree par mois</th>
      </tr>
   </table>
   </head>
   </body>
</html>