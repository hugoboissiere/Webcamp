<?php
include("../admin/php/includes/database.php");

$section = $dbh->query("SELECT `id` FROM cw_medias_movies");
$section->setFetchMode(PDO::FETCH_OBJ);

while ($result = $section->fetch())
{
	$jour1 = $dbh->query("SELECT AVG(DATEDIFF(NOW(), publicationtime)) AS nb_entrees FROM cw_medias_movies WHERE id =" . $result->id);
	$jour1->setFetchMode(PDO::FETCH_OBJ);
	echo "<li>"
	while ($result2 = $jour1->fetch())
		{
			var_dump($result2);
			echo "<ul>" . $result2['nb_entrees'] . "</ul>";
			echo "<br>";
		}
	echo "</li>"

	$jour1->closeCursor();
}

$section->closeCursor();
?>