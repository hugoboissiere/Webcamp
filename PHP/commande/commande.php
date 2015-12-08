<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Commande</title>
		<meta charset="utf8">

		<link rel="stylesheet" href="commande.css">
	</head>
	<body>
		<?php include("../header.php"); ?>

        <div id="commande">
            <table>
                <caption>Articles dans votre panier<br><br></caption>
                                <tr class ="menu">
                    <th>Article</th>
                    <th>Prix</th>
                    </tr>
                
<?php

     try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }     
 
            $cat = $bdd->prepare('SELECT * FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $_SESSION['ID'] . '"');
            $cat->execute();
            
            while ($don = $cat->fetch())
            {
                $var = $don['ID_produit'];

                $categorie = $bdd->query('SELECT * FROM Produits WHERE ID = "' . $var . '"');

                while ($idk = $categorie->fetch())
                {
                    echo '<tr>
                    <td>' . $idk['Libelle'] . '</td>
                    <td class="qt">' . $idk['Prix_vente'] . '$</td>
                    </tr>';
                }
            
                $categorie->closeCursor();
            }

            $cat->closeCursor();

?>    
               </table>

            <div id="pay">
                <a href="../index.php"><img src="../image/CreditCardLogos.jpg"></img></a>
                <a href="../index.php"><img src="../image/paywpaypal.gif"></img></a>
            </div>
        </div>

		<?php include("../footer.php"); ?>
        <script type="text/javascript" src="../jquery.js"></script>
	</body>
</hmtl>