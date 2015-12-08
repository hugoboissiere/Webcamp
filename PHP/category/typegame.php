<?php session_start(); ?>
<!doctype html>
<html>
		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');
			}
			catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}

			$category = $bdd->query('SELECT * FROM Categories WHERE Categories.ID = "' . $_GET['ID'] . '"');

  			while ($donnees = $category->fetch())
            {
                $nom = $donnees['Libelle'];
                $idCat = $donnees['ID'];
            }

            $category->closeCursor();
            if (!isset($_GET['ID']) || !isset($nom))
                header('Location: ../index.php');



		 ?>
	<head>
		<title><?php echo $nom; ?></title> 
		<meta charset="utf8">
        <link rel="stylesheet" href="subcategory.css">
	</head>
	<body>
		<?php include("../header.php"); ?>
<!-- 			<button type="button" id="sortname">Tri par nom</button>
			<button type="button" id="sortprice">Tri par prix</button> -->
			
				<table>
				<tr>
					<td class='jeu'>JEU</td>
					<td class='image'>JAQUETTE</td>
					<td class='prix'>PRIX</td>
				</tr>
			</table>
			<?php 
			$reponse = $bdd->query('SELECT Produits.Libelle, Produits.Image, Produits.Prix_vente, Produits.ID FROM Produits, Categories, Type_jeu_produit WHERE Produits.ID = Type_jeu_produit.ID_jeu AND Categories.ID = Type_jeu_produit.ID_categorie AND Categories.ID = "' . $_GET['ID'] . '"');
			while ($donnees = $reponse->fetch())
			{
				echo "<table><tr><td class='jeu'>". $donnees['Libelle'] . "</td><td class='image'><a href='". "../articles/game.php?ID=" . $donnees['ID'] . "'><img class='jaquette' src='" . $donnees['Image'] . "'></a></td><td class='prix'>" . $donnees['Prix_vente'] . "€</td></tr>";
			}

			$reponse->closeCursor();
			?>
        	<script type="text/javascript" src="./sortnes.js"></script>
	   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	   		<script type="text/javascript">sort_game()</script>
	   	<?php include("../footer.php"); ?>
	</body>
</hmtl>
