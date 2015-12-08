<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="login.css">
        <title>Connexion</title>
    </head>

    <body>
		<?php include("../header.php"); 
        include_once("../bdd.php");
        ?>

        <form method="post" class="formulaire" action="connect.php">
            <p>
                <label for="mail">Mail<br></label><input type="mail" name="Mail" placeholder="example@ex.com" id="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" title="Veuillez entrer une adresse mail valide" required/><br>
                <label for="password">Mot de passe<br></label><input type="password" name="Password" placeholder="Mot de passe" id="password" required/><br>
                <a href="../accueil/accueil.php"><input type="submit" value="Se connecter" /></a>
            </p>
        </form>
        </div>
		<?php include("../footer.php"); ?>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../pagePresentation/./addpanier.js"></script>
	</body>
</hmtl>