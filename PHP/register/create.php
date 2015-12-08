<?php
include_once("../bdd.php");

$select = "SELECT * FROM Utilisateurs WHERE Mail = '" . $_POST['Mail'] . "'";
$add = "INSERT INTO `Utilisateurs` (`Nom`, `Prenom`, `Date_de_naissance`, `Ville`, `Adresse`, `Code_postale`, `Pays`, `Sexe`, `Mail`, `Mot_de_passe`, `Role`, `Telephone`, `Date_creation`, `Date_modification`) VALUES('".$_POST['Nom']."', '".$_POST['Prenom']."', '".$_POST['Date']."', '".$_POST['Ville']."', '".$_POST['Adresse']."', '".$_POST['Postal']."', '".$_POST['Pays']."', '".$_POST['Sexe']."', '".$_POST['Mail']."', '".$_POST['Password']."', 3, '".$_POST['Tel']."', CURDATE(), CURDATE())";
if (mysqli_num_rows(mysqli_query($bdd, $select)) == 0)
{
	$req = mysqli_query($bdd, $add) or die ("Erreur requete d'insertion :".mysqli_error($bdd));
	header('Location: ../login/login.php');
}
else
{
	header('Location: register.php');
}
?>