<?php

session_start();

include("php/includes/database.php");



if (isset($_POST['votant']))
{
	echo "2";
	$session = $dbh->query('SELECT * FROM cw_medias_movies WHERE id = "'.$_POST['idmovie'].'" ');
	$session->setFetchMode(PDO::FETCH_OBJ);
	while ($result = $session->fetch())
		{
			$nbv = $result->nb_vote;
		}
echo "3";
	$session->closeCursor();

	$session2 = $dbh->query('SELECT * FROM cw_medias_movies WHERE id = "'.$_POST['idmovie'].'" ');
	$session2->setFetchMode(PDO::FETCH_OBJ);
	while ($result2 = $session2->fetch())
		{
			$voter = $result->vote;
		}
echo "4";
	$session2->closeCursor();

	$totalvote = $_POST['vote'] + $voter;



	// $req = $dbh->prepare("INSERT INTO cw_medias_movies"
	// 		  . "('vote')"
	// 		  . "(:vote)");

	// $req->bindParam(":vote", $_POST["vote"]);
	// $req->execute();
}

echo $id;

$nbv++;

$update2 = $dbh->prepare("UPDATE cw_medias_movies "
		. "SET nb_vote = :nbv "
		. "WHERE id = ".$_POST["idmovie"]);
$update2->bindParam(":nbv", $nbv);
		$update2->execute();
$update2->closeCursor();

header('Location:movie-details.php?id='.$id);

?>


