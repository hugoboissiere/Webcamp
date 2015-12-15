<?php
include("../admin/php/includes/database.php");

$test = $dbh->query("SELECT * from cw_medias_movies"); 
$test->setFetchMode(PDO::FETCH_OBJ);

$section = $dbh->query("SELECT `id` FROM cw_medias_movies");
$section->setFetchMode(PDO::FETCH_OBJ);

while ($result = $section->fetch())
{
	$jour1 = $dbh->query("SELECT AVG(DATEDIFF(NOW(), publicationtime)) AS moy_entree_jour, nb_entrees FROM cw_medias_movies WHERE id =" . $result->id);
	$jour1->setFetchMode(PDO::FETCH_OBJ);
	while ($result2 = $jour1->fetch())
		{
			$nbjour = $result2->moy_entree_jour;
			$entrees = $result2->nb_entrees;
			$entrees_jour = $entrees / $nbjour;
			$entrees_semaine = $entrees_jour * 7;
			$entrees_mois = $entrees_jour * 30;
			$changeDeNom = ROUND($nbjour);
			// echo "Difference de jour : " . ROUND($nbjour) . "<br>";
			// echo "Nombre d'entrees : " . ROUND($entrees) . "<br>";
			// echo "Moyenne d'entrees par jour : " . ROUND($entrees_jour) . "<br>";
			// echo "Moyenne d'entrees par semaine : " . ROUND($entrees_semaine) . "<br>";
			// echo "Moyenne d'entrees par mois : " . ROUND($entrees_mois) . "<br>";
			// echo "<br>";
			// echo $changeDeNom . "<br>";
			while ($result = $test->fetch())
      {
         echo '<tr>
                  <td>' . $result->title . '</td>
                  <td>' . $result->genre . '</td>
                  <td>' . $result->runningTime . '</td>
                  <td>' . $result->country . '</td>
                  <td>' . $result->publicationtime . '</td>
                  <td>' . $result->nb_entrees . '</td>
                  <td>' . $result2->moy_entree_jour . '</td>
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
		}
	$jour1->closeCursor();
}
$section->closeCursor();
?>