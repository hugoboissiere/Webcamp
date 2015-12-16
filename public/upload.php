<?php
session_start();


$maxsize = 1048576;
$maxwidth = 500;
$maxheight = 500;
if ($_FILES['profilpic']['error'] > 0)
	$erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize)
	$erreur = "Le fichier est trop gros";

$img_extensions = array('jpg', 'jpeg', 'gif', 'png');
// //1. strrchr renvoie l'extension avec le point (« . »).
// //2. substr(chaine,1) ignore le premier caractère de chaine.
// //3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(substr(strrchr($_FILES['profilpic']['name'], '.'), 1));
if (!in_array($extension_upload,$img_extensions))
{
	$erreur = "Extension correcte";
}
$image_size = getimagesize($_FILES['profilpic']['tmp_name']);
if ($image_size[0] > $maxwidth OR $image_size[1] > $maxheight)
	$erreur = "Image trop grande";
echo "dddd";
if($erreur)
	echo $erreur;
else
{
	echo "aa";
	$nom = "photo_" . $_SESSION['id'];

	$dir = "resources/profilpic/";
	$truepath = $dir . $nom . "." . $extension_upload;
	// echo $truepath;

	$resultat = move_uploaded_file($_FILES['profilpic']['tmp_name'],$truepath);
	if ($resultat)
		header("Location : espace_membre.php");
	else
		echo "Fail <br>";
}
?>
