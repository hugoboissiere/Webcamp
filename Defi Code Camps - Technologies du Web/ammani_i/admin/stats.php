<?php
include("php/includes/database.php");
$headTitle = "Admin - Stats";
$addCSS =  array("");
$addJS =  array("");
include("php/includes/head.php");
$addPHP = array("");
include("php/includes/navigator.php");
?>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/tableau.css"></link>
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
    $test = $dbh->query("SELECT * from cw_medias_movies"); 
	$test->setFetchMode(PDO::FETCH_OBJ);
	while ($result = $test->fetch())
	{
		$jour1 = $dbh->query("SELECT AVG(DATEDIFF(NOW(), publicationtime)) AS moy_entree_jour, nb_entrees FROM cw_medias_movies WHERE id =" . $result->id);
		$jour1->setFetchMode(PDO::FETCH_OBJ);
		$result2 = $jour1->fetch();
		{
			echo '<tr>
                	<td>' . $result->title . '</td>
                	<td>' . $result->genre . '</td>
                	<td>' . $result->runningTime . '</td>
                	<td>' . $result->country . '</td>
                	<td>' . $result->publicationtime . '</td>
                	<td>' . $result->nb_entrees . '</td>';
					$nbjour = $result2->moy_entree_jour;
					$entrees = $result2->nb_entrees;
					$entrees_jour = $entrees / $nbjour;
					$entrees_semaine = $entrees_jour * 7;
					$entrees_mois = $entrees_jour * 30;
					echo "<td>" . ROUND($nbjour) . "</td>";
					echo "<td>" . ROUND($entrees_jour) . "</td>";
					echo "<td>" . ROUND($entrees_semaine) . "</td>";
					echo "<td>" . ROUND($entrees_mois) . "</td>";
				'</tr>';
		}
		$jour1->closeCursor();
	}
	$test->closeCursor();
	$section->closeCursor();
    ?>
    </table>
    <p class="titre">Statistiques des films par cinéma</p>
    <table class="tableau">
		<tr>
			<th>Nom du cinéma</th>
			<th>Nombre total d'entrées</th>
			<th>Moyenne d'entree par jour</th>
			<th>Moyenne d'entree par semaine</th>
			<th>Moyenne d'entree par mois</th>
		</tr>
	</table>
	</main>
    <script src="js/layoutNavigator.js"></script>
</body>
</html>