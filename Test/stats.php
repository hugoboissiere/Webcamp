<?php
include("../admin/php/includes/database.php");

$test = $dbh->query("SELECT * from cw_medias_movies"); 
$test->setFetchMode(PDO::FETCH_OBJ);

while ($result = $test->fetch())
{
	$jour1 = $dbh->query("SELECT AVG(DATEDIFF(NOW(), publicationtime)) AS moy_entree_jour, nb_entrees FROM cw_medias_movies WHERE id =" . $result->id);
	$jour1->setFetchMode(PDO::FETCH_OBJ);

	$result2 = $jour1->fetch();

/*		{
			while($result = $test->fetch())*/
{
		echo '<tr>
                  <td>' . $result->title . '</td>
                  <td>' . $result->genre . '</td>
                  <td>' . $result->runningTime . '</td>
                  <td>' . $result->country . '</td>
                  <td>' . $result->publicationtime . '</td>
                  <td>' . $result->nb_entrees . '</td>';
//}
			$nbjour = $result2->moy_entree_jour;
			$entrees = $result2->nb_entrees;
			$entrees_jour = $entrees / $nbjour;
			$entrees_semaine = $entrees_jour * 7;
			$entrees_mois = $entrees_jour * 30;
			echo "<td>". ROUND($nbjour, 1) . "</td>";
			echo "<td>" . ROUND($entrees_jour, 1) . "</td>";
			echo "<td>" . ROUND($entrees_semaine, 1) . "</td>";
			echo "<td>" . ROUND($entrees_mois, 1) . "</td>";
			echo '</tr>';
			// echo $changeDeNom . "<br>";
			// while ($result = $test->fetch())
   //    {
         
   //                <td><form method="get" action="compteur.php">
   //                      <input type="hidden" name="ID" value="'.$result->id.'">
   //                      <select type="hidden" name="nb">
   //                      <option>1</option>
   //                      <option>2</option>
   //                      <option>3</option>
   //                      <option>4</option>
   //                      <option>5</option>
   //                      <option>6</option>
   //                      <option>7</option>
   //                      <option>8</option>
   //                      <option>9</option>
   //                      <option>10</option>
   //                      </select>
   //                      <button type="submit">Entrée</button>
   //                </form></td>
   //             </tr>
   //    }
		}

	$jour1->closeCursor();
}
$test->closeCursor();
$section->closeCursor();
?>