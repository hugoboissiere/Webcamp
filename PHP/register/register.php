<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="register.css">
        <title>Inscription</title>
    </head>
    <body>
        <?php
        include("../header.php");
        ?>
        <form method="post" class="formulaire" action="create.php">
            <p>
                <label for="nom">Nom<br></label><input type="text" name="Nom" id="nom" placeholder="Nom" required/><br>
                <label for="prenom">Prénom<br></label><input type="text" name="Prenom" placeholder="Prénom" id="prenom" required/><br>
                <label for="date de naissance">Date de naissance<br></label><input type="date" name="Date" placeholder="DD/MM/YYYY" id="date" required/><br>
                <label for="ville">Ville<br></label><input type="text" name="Ville" placeholder="Ville" id="ville" required/><br>
                <label for="adresse">Adresse<br></label><input type="text" name="Adresse" placeholder="Adresse" id="adresse" required/><br>
                <label for="pays">Pays<br></label><input type="text" name="Pays" placeholder="Pays" id="pays" required/>
                <p>Sexe</p>
                <select name="Sexe">
                    <option value="Homme">Homme</option> 
                    <option value="Femme">Femme</option>
                </select><br>
                <label for="mail">Mail<br></label><input type="mail" name="Mail" placeholder="example@xyz.com" id="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" title="Veuillez entrer une adresse mail valide" required/><br>
                <label for="password">Mot de passe<br></label><input type="password" name="Password" placeholder="Mot de passe" id="password" required/><br>
                <label for="postal">Votre code postal<br></label><input type="text" name="Postal" placeholder="ex : 94200" id="postal" pattern="[\d]{5}" title="Veuillez entrer un vrai code postal" required/><br>
                <label for="tel">Votre numéro de téléphone<br></label><input type="tel" name="Tel" placeholder="06XXXXXXXX" id="tel" pattern="^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$" title="Veuillez entrer un numéro valide" required/><br>
                <input type="submit" class="creation" value="Créer mon compte !" />
            </p>
        </form>

        <div class = "membre">
            <p>
                <a href="../login/login.php">Vous avez déjà un compte? Cliquez ici.</a>
            </p>
        </div>
	<?php include("../footer.php"); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="../pagePresentation/./addpanier.js"></script>
	</body>
</hmtl>