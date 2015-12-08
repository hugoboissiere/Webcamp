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
            
            $reponse = $bdd->query('SELECT * FROM Produits WHERE Produits.ID = "' . $_GET['ID'] . '"');
        
            $cat = $bdd->prepare('SELECT * FROM Categorie_produit WHERE ID_produit = "' . $_GET['ID'] . '"');
            $cat->execute();
            
            while ($don = $cat->fetch())
            {
                $var = $don['ID_categorie'];
            }

            $cat->closeCursor();

            $categorie = $bdd->query('SELECT * FROM Categories WHERE ID = "' . $var . '"');

            while ($idk = $categorie->fetch())
            {
                $categories = $idk['Libelle'];
            }
            
            $categorie->closeCursor();

            
            $cat2 = $bdd->prepare('SELECT * FROM Type_jeu_produit WHERE ID_jeu = "' . $_GET['ID'] . '"');
            $cat2->execute();

            while ($don2 = $cat2->fetch())
            {
                $var2 = $don2['ID_categorie'];
            }

            $cat2->closeCursor();

            $categorie2 = $bdd->query('SELECT * FROM Categories WHERE ID = "' . $var2 . '"');

            while ($idk2 = $categorie2->fetch())
            {
                $categories2 = $idk2['Libelle'];
            }
            
            $categorie2->closeCursor();
      
            while ($donnees = $reponse->fetch())
            {
                $nom = $donnees['Libelle'];
                $prix = $donnees['Prix_vente'];
                $description = $donnees['Description'];
                $image = $donnees['Image'];
            }

            $reponse->closeCursor();

            if (!isset($_GET['ID']) || !isset($nom))
                header('Location: ../index.php');    

            $_SESSION['produit'] = $_GET['ID'];  
        ?> 


	<head>
		<title><?php echo $nom; ?></title> 
		<meta charset="utf8">
        <link rel="stylesheet" href="game.css">
	</head>
	<body>

        <?php include("../header.php"); ?>
        <h2><?php echo $nom; ?></h2>
        <form class ="buy" action="addpanier.php">
    	   <button type="submit">Ajouter au panier</button>
            <h4 class="prix">Prix : <?php echo $prix; ?> $</h4>
            <?php echo '<img src="' . $image . '" class ="jaquette" alt="La jaquette européenne du jeu" title="La jaquette européenne du jeu">'; ?>
        </form>
    
    <div class ="description">
        <h3>Description du jeu :</h3>
        <?php echo $description; ?>
        <?php echo '<p class="categorie">Catégories : <a href="../category/typeconsole.php?ID=' . $var . '">' . $categories . '</a>, <a href="../category/typegame.php?ID=' . $var2 . '">' . $categories2 . '</a></p>'; ?> 
    </div>
		<?php include("../footer.php"); ?>
		<?php include("commentaires.php"); ?>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
    </body>
</html>
















<!--  <script type="text/javascript" src="./com.js"></script> -->