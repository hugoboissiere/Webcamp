<?php

include("php/includes/database.php");

if (isset($_POST['envoie']))
{
	$req = $dbh->prepare("INSERT INTO places_vendues"
						."(id_film, id_cinema, date_vente, id_utilisateur)"
						."VALUES(:movie, :theater, NOW(), :member)");
	$req->bindParam(":movie", $_POST["movie"]);
	$req->bindParam(":thater", $_POST["theater"]);
	$req->bindParam(":member", $_POST["member"]);
	$req->execute();

	header('Location:programmation.php');
}