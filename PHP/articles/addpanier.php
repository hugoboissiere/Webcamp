<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');
$id_produits = $_SESSION['produit'];
$produits = $bdd->prepare('SELECT * FROM Produits WHERE ID = "' . $id_produits . '"');
$produits->execute();
$produits->fetch();
$id_utilisateur = $bdd->prepare('SELECT ID FROM Utilisateurs WHERE ID = "' . $_SESSION['ID'] . '"');
$id_utilisateur->execute();
$id_utilisateur->fetch();
$select = "SELECT * FROM Produit_Utilsateur WHERE ID_utilisateur = '" . $_SESSION['ID'] . "'";
if(isset($_SESSION['ID']) == $id_utilisateur)
{
    $st = $bdd->prepare("INSERT INTO Produit_Utilisateur (ID_utilisateur, ID_produit) VALUES(:id_user, :id_product)");
    $st->bindParam(':id_user', $name);
	$st->bindParam(':id_product', $value);
	$name = $_SESSION['ID'];
	$value = $_SESSION['produit'];
	$st->execute();
	header('location: game.php?ID=' . $_SESSION['ID']);
}
else
{
    header('location: ../login/login.php');
}
?>