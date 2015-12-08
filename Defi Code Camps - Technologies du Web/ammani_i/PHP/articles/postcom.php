<?php session_start(); ?>
<?php
	include_once("../bdd.php");
		
    $select = "SELECT * FROM Commentaires";
	$add = "INSERT INTO `Commentaires` (`Pseudo`, `Com`, `ID_produit`, `Date_post`) VALUES ('".$_POST['nom']."', '".$_POST['commentaire']."', '".$_POST['idgame']."', CURDATE())";

	$req = mysqli_query($bdd, $add) or die ("Erreur requete d'insertion :".mysqli_error($bdd));
	header('Location: game.php?ID=' . $_POST['idgame']);
?>