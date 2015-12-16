<?php
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
if (in_array($extension_upload,$img_extensions))
{
	echo "Extension correcte";
}
$image_size = getimagesize($_FILES['profilpic']['tmp_name']);
if ($image_size[0] > $maxwidth OR $image_size[1] > $maxheight)
	$erreur = "Image trop grande";

if($erreur)
	echo $erreur;
//Créer un dossier 'fichiers/1/'
echo "test :";
if(!file_exists('resources/profilpic') && !is_dir('resources/profpic'))
{
  mkdir('resources/profilpic', 0755, true);
} 
else
{
	echo "ala";
}
echo "libri";








//Créer un identifiant difficile à deviner
  // $nom = md5(uniqid(rand(), true));
?>
