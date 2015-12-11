<?php
include("php/includes/database.php");
include("php/includes/head.php");

?>

<img src="http://img.tvmag.lefigaro.fr/ImCon/Arti/72959/Motus-350.jpg" alt="titi" />

<div class="infos">
<?php

echo 	'Login : ' . $_SESSION['username'] . '<br /> 
   		Prenom : ' . $_SESSION['firstname'] . '<br /> 
   		Nom : ' . $_SESSION['lastname'] . '<br /> 
   		Sexe : ' . $_SESSION['sex'] . '<br /> 
   		Numéro de domicile : ' .$_SESSION['phoneHome'] . '<br />
   		Numéro de portable : ' .$_SESSION['phoneMobile'] . '<br />
   		Quartier : ' . $_SESSION['neighborhood'] .'<br /> 
   		Ville : ' . $_SESSION['city'] . '<br /> 
   		Pays : ' . $_SESSION['country'] . '<br /> 
   		Email : ' . $_SESSION['email'] . '<br />
   		Statut : ' . $_SESSION['status'] . '<br />
   		Activité : ' . $_SESSION['activity'] . ' ';

?>   		
</div>   		

