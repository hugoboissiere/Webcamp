<?php
// include("php/includes/database.php");
require_once("php/includes/head.php");

?>

<img src=<?php echo '"resources/profilpic/' . $_SESSION['image'] . '"'; ?> alt="titi" />

<div class="infos">
   <?php
   if(!isset($_SESSION['id']))
   {
      header('Location: http://192.168.114.4/public/index.php');
   }
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