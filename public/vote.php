<?php

session_start();

include("php/includes/database.php");

if (isset($_POST['votant']))
{
	$session = $dbh->query('SELECT * FROM cw_medias_movies WHERE id = "'.$_POST['idmovie'].'" ');
	$session->setFetchMode(PDO::FETCH_OBJ);
	while ($result = $session->fetch())
		{
			$nbv = $result->nb_vote;
		}

	$session->closeCursor();



	$req = $dbh->prepare("INSERT INTO cw_medias_movies"
			  . "('vote')"
			  . "(:vote)");

	$req->bindParam(":vote", $_POST["vote"]);
	$req->execute();
}

$nbv++;

$update2 = $dbh->prepare("UPDATE cw_medias_movies "
		. "SET nb_vote = :nbv "
		. "WHERE id = ".$_POST["idmovie"]);
		$update2->bindParam(":nbv", $nbv);
		$update2->execute();
$update2->closeCursor();

header('Location:movie-details.php');

?>


