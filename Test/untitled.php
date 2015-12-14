<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
$test = $dbh->query("SELECT * from cw_medias_movies"); 
$test->setFetchMode(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
   <head>
	<title>Test</title>
	<link rel="stylesheet" href="chartist.min.css">
   <link rel="stylesheet" type="text/css" href="test.css"></link>
   <body>
	   <p id="test1" data-numberone="20, 60, 120" data-numbertwo="200, 180, 20" class="titre">Nombre d'entrees</p>
	   <div class="ct-chart"></div>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	   <script src="chartist.min.js"></script>
      <form action="compteur.php">
      </form>
	   <table class="tableau">
      <tr>
         <th>Film</th>
         <th>Genre</th>
         <th>Duree (en min)</th>
         <th>Pays/Continent</th>
         <th>Date de publication</th>
         <th>Nombre d'entrees totaux</th>
      </tr>
      <?php
      while ($result = $test->fetch())
      {
         echo '<tr>
                  <td>' . $result->title . '</td>
                  <td>' . $result->genre . '</td>
                  <td>' . $result->runningTime . '</td>
                  <td>' . $result->country . '</td>
                  <td>' . $result->publicationtime . '</td>
                  <td>' . $result->nb_entrees . '</td>
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
                        <button type="submit">Entree</button>
                  </form></td>
               </tr>';
      }
      $employeeStatusListAdd->closeCursor();
      ?>
      </table>
      <table>
      <p>Par genre</p>
      <tr>
         <th>Film</th>
         <th>Genre</th>
         <th>Duree (en min)</th>
         <th>Pays/Continent</th>
         <th>Nombre d'entrees total</th>
      </tr>
      </table>
   </head>
   </body>
</html>