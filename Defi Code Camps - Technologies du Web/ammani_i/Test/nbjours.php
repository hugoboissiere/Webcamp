<?php
include("../admin/php/includes/database.php");

$section = $dbh->query("SELECT `id` FROM cw_medias_movies");
$section->setFetchMode(PDO::FETCH_OBJ);

while ($result = $section->fetch())
{
	$jour1 = $dbh->query("SELECT AVG(DATEDIFF(NOW(), publicationtime)),nb_entrees AS entrees FROM cw_medias_movies WHERE id =" . $result->id);
	$jour1->setFetchMode(PDO::FETCH_OBJ);
	while ($result2 = $jour1->fetch())
		{
			echo "Test";
		}
	$jour1->closeCursor();
}

$section->closeCursor();
?>