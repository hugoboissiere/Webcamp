<?php
// Titre de la page
$headTitle = "Cinewax - Films disponibles";

// CSS de cette page
$addCSS =  array("");

// JS de cette page
$addJS =  array("");

// Queries de cette page
$addPHP = array("");
include("php/includes/head.php");
?>

<form method="post" action="upload.php" enctype="multipart/form-data">
     <label for="profilpic">Fichier (JPG, JPEG, GIF ou PNG | max. 1 Mo) :</label><br />
     <input type="file" name="profilpic" id="profilpic" /><br />
     <input type="submit" name="submit" value="Envoyer" />
</form> 
<?php echo $_SESSION['erreur']; ?>



<?php
include("php/includes/scripts.php");
?>

<!--scripts Js-->



</body>
</html>
