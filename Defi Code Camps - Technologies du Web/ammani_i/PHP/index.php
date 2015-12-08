<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>oldbutgold</title>
		<meta charset="utf8">

		<link rel="stylesheet" href="accueil.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		<h2>Articles au hasard</h2>
<?php
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }    

            $produit = $bdd->query('SELECT * FROM Produits ORDER BY RAND() LIMIT 4');
            echo "<div id='galery'>";
            while ($idk = $produit->fetch())
            {
                $id = $idk['ID'];
                $img = $idk['Image'];
                echo '<div class="img"><a href="articles/game.php?ID=' . $id . '"><img src="' . $img . '"alt="test" width="200" height="180"></a></div>';
            }
			echo "</div>";           
            $produit->closeCursor();

            if($_SESSION['role'] == 1)
            {
                echo "<button type='button'>Admin</button><br>";
            }

            else if($_SESSION['role'] == 3)
            {
                echo "<p>Pas de bouton pour toi, humain</p><br>";
            }

            else if(!isset($_SESSION['role']))
            {
                echo "<p>Connecte toi pour un autre message !</p>";
            }
?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div id="product">
			<div class="columns">
  				<p>Article les plus recherchés:<br><a href="articles/game.php?ID=6"><img src="image/supermariobros.jpg"></a><br><a href="articles/game.php?ID=1"><img src="image/imgMegaman.jpg"></a><br><a href="articles/game.php?ID=5"><img src="image/tombraider.jpg"></a></p>
				<p>Article les plus vendus:<br><a href="articles/game.php?ID=7"><img src="image/ff7.jpg" width="130" height="130"></a><br><a href="articles/game.php?ID=8"><img src="image/chronotrigger.jpg" width="130" height="130"></a><br><a href="articles/game.php?ID=9"><img src="image/donkeykongcountry.jpg" width="130" height="130"></a></p>
				<p>Article les plus recents:<br><a href="articles/game.php?ID=4"><img src="image/spyrothedragon.jpg" width="130" height="130"></a><br><a href="articles/game.php?ID=3"><img src="image/zelda2.jpg" width="130" height="130"></a><br><a href="articles/game.php?ID=2"><img src="image/supermetroid.jpg" width="130" height="130"></p>
			</div>
        <?php include("footer.php"); ?>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="articles/./addpanier.js"></script>
		<?php include 'connect.php';
		?>
	</body>
</hmtl>
