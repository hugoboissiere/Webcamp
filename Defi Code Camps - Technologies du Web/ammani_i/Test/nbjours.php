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
			echo $nbjour . "<br>";
			echo $entrees . "<br>";
		}
	$jour1->closeCursor();
}
$section->closeCursor();
?>