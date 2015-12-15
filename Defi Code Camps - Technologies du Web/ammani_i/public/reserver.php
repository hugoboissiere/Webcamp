<?php

include("php/includes/database.php");

//echo "1";

if (isset($_POST['envoie']))
{
	//echo "2";
	$req = $dbh->prepare("INSERT INTO places_vendues"
						"(id_film, id_cinema, date_vente, id_utilisateur)"
						"VALUES(:movie, :theater, NOW(), :member)");
	echo 
	$req->bindParam(":movie", $_POST["movie"]);
	$req->bindParam(":thater", $_POST["theater"]);
	$req->bindParam(":member", $_POST["member"]);
	$req->execute();
	//echo "3";

	header('Location:programmation.php');
}

?>