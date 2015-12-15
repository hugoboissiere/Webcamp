<?php

include("php/includes/database.php");

echo $_POST['id_sessions'];
echo "1";

// $i = 0;

// while ($i < $_POST['places'])
// {
// 	if (isset($_POST['envoie']))
// 	{
	
// 		$req = $dbh->prepare("INSERT INTO places_vendues"
// 						. "(id_film, id_cinema, date_vente, id_utilisateur)"
// 						. "VALUES(:theater, :movie, :date, :member)");
	
// 		$req->bindParam(":movie", $_POST["movie"]);
	
// 		$req->bindParam(":theater", $_POST["theater"]);
	
// 		$req->bindParam(":date", date('Y-m-d H:i:s'));
	
// 		$req->bindParam(":member", $_POST["member"]);
	
// 		$req->execute();
// 	}
// 	$i++;
	
// }

// header('Location:programmation.php');

?>