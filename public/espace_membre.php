<?php
include("php/includes/database.php");
include("php/includes/head.php");

?>

<img src="http://img.tvmag.lefigaro.fr/ImCon/Arti/72959/Motus-350.jpg" alt="titi" />

<div class="infos">
<?php

echo 	  'Prenom : ' . $_SESSION['firstname'] . '<br /> 
         <br />
   		Nom : ' . $_SESSION['lastname'] . '<br /> 
         <br />
         Login : ' . $_SESSION['username'] . '<br /> 
         <br />
   		Sexe : ' . $_SESSION['sex'] . '<br /> 
         <br />
   		Numéro de domicile : ' .$_SESSION['phoneHome'] . '<br />
         <br />
   		Numéro de portable : ' .$_SESSION['phoneMobile'] . '<br />
         <br />
   		Quartier : ' . $_SESSION['neighborhood'] .'<br /> 
         <br />
   		Ville : ' . $_SESSION['city'] . '<br /> 
         <br />
   		Pays : ' . $_SESSION['country'] . '<br /> 
         <br />
   		Email : ' . $_SESSION['email'] . '<br />
         <br />
   		Statut : ' . $_SESSION['status'] . '<br />
         <br />
   		Activité : ' . $_SESSION['activity'] . ' ';
         $_SERVER['DOCUMENT_ROOT'];

?>
<br /> 
<br />  		
<form method="post" action="modification.php">
<input type="submit" value="Modifier"/>
</form>
</div>   	

<br />
<br />

<form action="programmation.php" />
<input type="submit" value="Faire une reservation" />
</form>