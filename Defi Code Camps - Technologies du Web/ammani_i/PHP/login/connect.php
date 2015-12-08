<?php
session_start();
$_SESSION['password'] = $_POST['Password'];
$_SESSION['mail'] = $_POST['Mail'];

$bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');

if(!empty($_SESSION['mail']) && !empty($_SESSION['password']))
{
	$query = $bdd->query('SELECT * FROM Utilisateurs WHERE Mail = "'.$_SESSION['mail'].'"');
	$data = $query->fetch();
	if($data['Mail'] == $_SESSION['mail'] && ($data['Mot_de_passe'] == $_SESSION['password']))
	{
		$_SESSION['ID'] = $data[0];
		$_SESSION['Nom'] = $data[2];
		$_SESSION['role'] = $data[8];
		$_SESSION['Prenom'] = $data[1];		
		header('Location: ../index.php');
	}
	else
	{
		header('Location: login.php');
	}
}
?>