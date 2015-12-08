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
     ?>

	<head>
		<title>Catégories</title>
		<meta charset="utf8">

		<link rel="stylesheet" href="categoryconsole.css">
	</head>
	<body>
		<?php include("../header.php"); ?>
		<div id="galery">
			<div class="img">
				<?php

					$reponse = $bdd->query('SELECT * FROM Categories WHERE Categories.ID IN (SELECT ID_categorie FROM Categorie_produit)');

					while ($donnees = $reponse->fetch())
					{
						echo '<a href="typeconsole.php?ID=' . $donnees['ID'] . '"><table>
								<tr>
									<td class="myTableCell">' . $donnees['Libelle'] . '</td>
								</tr>
							</table></a>';
					}
				?>
			</div>
    		<?php include("../footer.php"); ?>
        	<script type="text/javascript" src="./sortact.js"></script>
	   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	   		<script type="text/javascript">sort_game()</script>
	</body>
</hmtl>