<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
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
         <th>Différence de jours</th>
         <th>Nombre d'entrées totaux</th>
         <th>Moyenne d'entrées par jour</th>
         <th>Moyenne d'entrées par semaine</th>
         <th>Moyenne d'entrées par mois</th>
      </tr>
      <?php
      include("stats.php");
      while ($result = $test->fetch())
      {
         echo '<tr>
                  <td>' . $result->title . '</td>
                  <td>' . $result->genre . '</td>
                  <td>' . $result->runningTime . '</td>
                  <td>' . $result->country . '</td>
                  <td>' . $result->publicationtime . '</td>
                  <td>' . $result->nb_entrees . '</td>
                  <td>' . ROUND($nbjour = $result->moy_entree_jour) . '</td>
                  <td><form method="get" action="compteur.php">
                        <input type="hidden" name="ID" value="'.$result->id.'">
                        <select type="hidden" name="nb">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        </select>
                        <button type="submit">Entrée</button>
                  </form></td>
               </tr>';
      }
      $employeeStatusListAdd->closeCursor();
      ?>
      </table>
   </head>
   </body>
</html>