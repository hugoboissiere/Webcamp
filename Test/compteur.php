<?php
	// $compteur = $dbh->query("UPDATE `cw_medias_movies` SET nb_entrees = nb_entrees+1 WHERE ID=1");}
	// $compteur->setFetchMode(PDO::FETCH_OBJ);
	//header("Location: untitled.php");//
include('../admin/php/includes/database.php');
$moviesTitleList = $dbh->query("SELECT nb_entrees FROM cw_medias_movies WHERE id = ".$_GET['ID']);
$moviesTitleList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesTitleList->fetch()) {
	$nb = $result->nb_entrees;
	$nb++;
}
$moviesTitleList->closeCursor();

// echo $nb;
$update = $dbh->prepare("UPDATE cw_medias_movies "
	. "SET nb_entrees = :nb "
	. "WHERE id = ".$_GET['ID']);
$update->bindParam(":nb", $nb);
$update->execute();
header("Location: untitled.php");
?>