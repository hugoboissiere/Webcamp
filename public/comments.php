<?php

session_start();

include("php/includes/database.php");

if (isset($_POST['coco']))
	{
	
		$req = $dbh->prepare("INSERT INTO Commentaires"
						. "(username, commentaire, date, region)"
						. "VALUES(:username, :commentaire, :date, :country)");
	
		$req->bindParam(":username", $_POST["username"]);
	
		$req->bindParam(":commentaire", $_POST["commentaire"]);
	
		$req->bindParam(":date", date('Y-m-d H:i:s'));
	
		$req->bindParam(":country", $_POST["region"]);
	
		$req->execute();
	}	



header('Location:programmation.php');
?>