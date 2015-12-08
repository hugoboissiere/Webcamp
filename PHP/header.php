<?php session_start(); ?>

		<div id="container">
			<div id="button">
				<div id="login">
<?php
	if (!isset($_SESSION['ID']))
		echo '<a href="../register/register.php">Se connecter / Creer un compte</a>';
	else
		echo '<a href="../login/disconnect.php">Bienvenue ' . $_SESSION['Nom'] . ' ' . $_SESSION['Prenom'] . '</a>';
?>
				</div>
				<div id="panier">
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');
	$categorie = $bdd->query('SELECT * FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $_SESSION['ID'] . '"');
	$categorie->fetch();
$i = 0;
            while ($idk = $categorie->fetch())
            {
            	$i++;
            }

	    $categorie->closeCursor();
	echo '<a href="../commande/commande.php" class="panier">Panier: ' . $i . '</a>';



?>
				</div>
			</div>
		</div>
				<h1 class="titre"><a href="../index.php"><img src="../image/oldbutgoldlogo.png"></a></h1>

			<form action="../category/category.php" id="searchthis" method="post">
				<select>
					<option value="-1">Choisissez la plateforme</option>
					<option value="NES">NES</option>
					<option value="supernes">Super NES</option>
					<option value="playsation1">Playstation 1</option>
				</select>
				<select>
					<option value="-1">Choisissez le type de jeu</option>
					<option value="actionaventure">Action-aventure</option>
					<option value="RPG">Jeu de rôle</option>
					<option value="plateforme">Plateforme</option>
				</select>
					<input id="search" name="q" type="text" placeholder="Rechercher" />
					<input type="submit" value="OK"/>
				</form>