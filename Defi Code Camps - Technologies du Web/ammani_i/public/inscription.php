<?php
// Titre de la page
$headTitle = "Cinewax - Accueil";

// CSS de cette page
$addCSS =  array("");

// JS de cette page
$addJS =  array("");

// Queries de cette page
$addPHP = array("");
include("php/includes/database.php");
include("php/includes/head.php");

// $employeeRegionListAdd = $dbh->query("SELECT * FROM region");
// $employeeRegionListAdd->setFetchMode(PDO::FETCH_OBJ);
// while ($result = $employeeRegionListAdd->fetch()) 
// {
// 	echo $result->nom_region;
// 	echo "ffff";
// }
// $employeeRegionListAdd->closeCursor();


$statusListAdd= $dbh->query("SELECT name FROM cw_human_resources_memberships_status  WHERE archive = 'false'");
$statusListAdd->setFetchMode(PDO::FETCH_OBJ);
$activityListAdd= $dbh->query("SELECT name FROM cw_human_resources_memberships_activity  WHERE archive = 'false'");
$activityListAdd->setFetchMode(PDO::FETCH_OBJ);
echo '<p style="color:#68D2C3;">INSCRIPTION<br/><p/>';
echo '<br />';


echo '<form method="post" action="connect.php" id="addForm" autocomplete="off" class="formOverflow"> 
                <label for="member">Adhérent</label>
                <input type="radio" name="membership" value="Member" id="member" class="radio"><br />
                <br />
                <label for="subscriber">Abonné</label>
                <input type="radio" name="membership" value="Subscriber" id="subscriber" class="radio" checked>
                <br />
                <br/>
                <label for="newsletterOn">Newsletter(ON)</label>
                <input type="radio" name="newsletter" value="Yes" id="newsletterOn"class="radio">
                <label for="newsletterOff">Newsletter(OFF)</label>
                <input type="radio" name="newsletter" value="No" id="newsletterOff"class="radio" checked>
                <br/>
                <label for="name">Nom : </label>
                <input type="text" name="lastname" id="name" placeholder="Ex : Dupont" required><br />
                <br/>
                <label for="firstname">Prénom : </label>
                <input type="text" name="firstname" id="firstname" placeholder="Ex : Laurent" required><br />
                <br/>
                <label for="password">Mot de passe : </label>
                <input type="password" name="password" id="password" placeholder="Au moins 5 caractères" pattern=".{5,}" required><br />
                <br/>
                <label for="username">Pseudo : </label>
                <input type="text" name="username" id="username" placeholder="Ex : laurent_dupont" required><br />
                <br/>
                Sexe : 
                <label for="man">Homme</label>
                <input type="radio" name="sex" value="Male" id="man" class="radio">
                <label for="woman">Femme</label>
                <input type="radio" name="sex" value="Female" id="woman"  class="radio" checked><br />
                <br/>
                <label for="phoneHome">Téléphone Fixe : </label>
                <input type="tel" name="phoneHome" id="phoneHome" placeholder="Ex : +221 01 023 45 87"><br />
                <br/>
                <label for="phoneMobile">Téléphone Mobile : </label>
                <input type="tel" name="phoneMobile" id="phoneMobile" placeholder="Ex : +221 01 023 45 87"><br />
                <br/>
                <label for="neighborhood">Quartier : </label>
                <input type="text" id="neighborhood" name="neighborhood" placeholder=""><br />
                <br/>
                <label for="city">Ville : </label>
                <input type="text" name="city" id="city" placeholder="Dakar"><br />
                <br/>
                <label for="country">Pays : </label>
                <select name="country" id="country" required>';
                ?>
                <?php

                $employeeRegionListAdd = $dbh->query("SELECT * FROM region");
				$employeeRegionListAdd->setFetchMode(PDO::FETCH_OBJ);
                    while ($result = $employeeRegionListAdd->fetch()) {
						echo '<option value="' . $result->id_region . '">' . $result->nom_region . '</option>';                        
                    }
                    $employeeRegionListAdd->closeCursor();
                    ?>
                    <?php
echo '                </select>
                <br/>
                <label for="mail">Email : </label>
                <input type="email" name="email" id="mail" placeholder="Ex : laurent.dupont@gmail.com" required>
                <br/>
                <label for="status">Statut : </label>
                <select name="status" id="status">';
                ?>
                <?php
                    while ($result = $statusListAdd->fetch()) {
                    echo '<option value="' . $result->name . '">' . $result->name . '</option>';      
                    }
                    $statusListAdd->closeCursor();
                    ?>
                    <?php
echo '                </select>
                <br/>
                <label for="activity">Activité : </label>
                <select name="activity" id="activity">';
                ?>
                <?php
                    while ($result = $activityListAdd->fetch()) {
                    echo '<option value="' . $result->name . '">' . $result->name . '</option>';                        
                    }
                    $activityListAdd->closeCursor();
                    ?>
                    <?php
echo '                </select><br/>
                <input type="submit" class="clearForm" name="InsertMembersOrSubscribers" value="Enregistrer">';
                 echo '
                 <br/>
            </form>
        </div>';

include("php/includes/scripts.php");
?>

<!--scripts Js-->
<script type="text/javascript" src></script>
</body>
</html>