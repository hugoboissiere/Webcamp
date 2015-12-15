<?php
if ($_FILES['profilpic']['error'] > 0)
	$erreur = "Erreur lors du transfert";
if ($_FILES['profilpic']['size'] > $maxsize)
	$erreur = "Le fichier est trop gros";

$img_extensions = array('jpg', 'jpeg', 'gif', 'png');
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
if (in_array($extension_upload,$img_extensions))
	echo "Extension correcte";
else
	echo "logie";
?>
