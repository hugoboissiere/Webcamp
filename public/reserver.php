<?php

include("php/includes/database.php");

echo "1";

if (isset($_POST['envoie']))
{
	echo "2";
	$req = $dbh->prepare("INSERT INTO places_vendues"
						. "(id_film, id_cinema, date_vente, id_utilisateur)"
						. "VALUES(:theater, :movie, :date, :member)");
	echo "3";
	$req->bindParam(":movie", $_POST["movie"]);
	echo "a";
	$req->bindParam(":theater", $_POST["theater"]);
	echo "b";
	$req->bindParam(":date", date('Y-m-d H:i:s'));
	echo "c";
	$req->bindParam(":member", $_POST["member"]);
	echo "d";
	$req->execute();
	echo "4";

	header('Location:programmation.php');
}

?>