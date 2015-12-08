<?php session_start(); ?>
<?php
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=oldbutgold_boissi_h;charset=utf8', 'root', 'obgboissigoupy');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }     
        
        $gameid = $_GET['ID'];
        echo '<form method="post" id="commentaire" action=postcom.php>
        <input type="text" name="nom" id="name" placeholder="Nom" required/><br>
        <input type="text" name="commentaire" id="com" placeholder="Votre commentaire" required/><br>
        <input type="submit" id="addcom" value="Ajouter un commentaire!"></input>
        <input type="text" name="idgame" value="' . $gameid . '" style="display:none;">
        <div id="comzone"></div>
            </form>';
        $reponse = $bdd->query('SELECT * FROM Commentaires WHERE Commentaires.ID_produit = "' . $_GET['ID'] . '"');
      
        while ($donnees = $reponse->fetch())
        {
            echo '<div class="pseudo">Le ' . $donnees['Date_post'] . ', ' . $donnees['Pseudo'] . ' a dit :</div><br><br><div class="com">' . $donnees['Com'] . '<br><br></div>';
        }

        $reponse->closeCursor();


?>