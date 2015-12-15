<?php
include("../admin/php/includes/database.php");

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
			echo "Difference de jour : " . $nbjour . "<br>";
			echo "Nombre d'entrees : " . $entrees . "<br>";
			echo "Moyenne d'entrees par jour : " . ROUND($entrees_jour) . "<br>";
			echo "Moyenne d'entrees par semaine : " . $entrees_semaine . "<br>";
			echo "Moyenne d'entrees par mois : " . $entrees_mois . "<br>";
			echo "<br>";
		}
	$jour1->closeCursor();
}
$section->closeCursor();
?>