<?php
include("php/includes/database.php");
include("php/includes/head.php");

echo 	'Login : ' . $_SESSION['username'] . '<br /> 
   		Prenom : ' . $_SESSION['firstname'] . ' 
   		Nom : ' . $_SESSION['lastname'] . ' 
   		Sexe : ' . $_SESSION['sex'] . ' 
   		Numéro de domicile : ' .$_SESSION['phoneHome'] . '
   		Numéro de portable : ' .$_SESSION['phoneMobile'] . '
   		Quartier : ' . $_SESSION['neighborhood'] .' 
   		Ville : ' . $_SESSION['city'] . ' 
   		Pays : ' . $_SESSION['country'] . ' 
   		Email : ' . $_SESSION['email'] . '
   		Statut : ' . $_SESSION['status'] . '
   		Activité : ' . $_SESSION['activity'] . ' ';

?>   		
   		

