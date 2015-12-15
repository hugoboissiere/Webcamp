<?php

include("php/includes/database.php");

$moviesTitleList = $dbh->query("SELECT nb_entrees FROM cw_medias_movies WHERE id = ".$_POST["movie"]));
		$moviesTitleList->setFetchMode(PDO::FETCH_OBJ);

while ($result = $moviesTitleList->fetch()) {
	$nb = $result->nb_entrees;
	$nb++;
}
$session = $dbh->query('SELECT * FROM cw_cinema_sessions WHERE id = "'.$_POST['session'].'" ');
$session->setFetchMode(PDO::FETCH_OBJ);
while ($result = $session->fetch())
{
	$nb_places = $result->nb_place;
}
echo "1";
$session->closeCursor();

$i = 0;

while ($i < $_POST['places'])
{
	if (isset($_POST['envoie']))
	{
	
		$req = $dbh->prepare("INSERT INTO places_vendues"
						. "(id_film, id_cinema, date_vente, id_utilisateur)"
						. "VALUES(:theater, :movie, :date, :member)");
	
		$req->bindParam(":movie", $_POST["movie"]);
	
		$req->bindParam(":theater", $_POST["theater"]);
	
		$req->bindParam(":date", date('Y-m-d H:i:s'));
	
		$req->bindParam(":member", $_POST["member"]);
	
		$req->execute();
	}
		$nb++;
		$i++;
	
}
$update = $dbh->prepare("UPDATE cw_medias_movies "
		. "SET nb_entrees = nb_entrees + :nb "
		. "WHERE id = ".$_POST["movie"]);
		$update->bindParam(":nb", $nb);
		$update->execute();
$moviesTitleList->closeCursor();

header('Location:programmation.php');

?>