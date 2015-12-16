<?php

include("php/includes/head.php");
include("php/includes/database.php");


echo '<form method="post" action="change.php" id="addForm" enctype="multipart/form-data" autocomplete="off" class="formOverflow"> 
<label for="member">Adhérent</label>
<input type="radio" name="membership" value="Member" id="member" class="radio"><br/>
<br/>
<label for="subscriber">Abonné</label>
<input type="radio" name="membership" value="Subscriber" id="subscriber" class="radio" checked><br/>
<br/>
<label for="newsletterOn">Newsletter(ON)</label>
<input type="radio" name="newsletter" value="Yes" id="newsletterOn"class="radio"><br/>
<br/>
<label for="newsletterOff">Newsletter(OFF)</label>
<input type="radio" name="newsletter" value="No" id="newsletterOff"class="radio" checked><br/>
<br/>
<label for="name">Nom : </label>
<input type="text" name="lastname" id="name" value="' . $_SESSION['lastname'] . '"><br/>
<br/>
<label for="firstname">Prénom : </label>
<input type="text" name="firstname" id="firstname" value="' . $_SESSION['firstname'] . '"><br/>
<br/>
<label for="password">Mot de passe : </label>
<input type="password" type="password" name="password" id="password" value="' . $_SESSION['password'] . '" pattern=".{5,}"><br/>
<br/>
<label for="username">Pseudo : </label>
<input type="text" name="username" id="username" value="' . $_SESSION['username'] . '"><br/>
<br/>
Sexe : 
<label for="man">Homme</label>
<input type="radio" name="sex" value="Male" id="man" class="radio">
<label for="woman">Femme</label>
<input type="radio" name="sex" value="Female" id="woman"  class="radio" checked><br/>
<br/>
<label for="phoneHome">Téléphone Fixe : </label>
<input type="tel" name="phoneHome" id="phoneHome" value="' . $_SESSION['phoneHome'] . '"><br/>
<br/>
<label for="phoneMobile">Téléphone Mobile : </label>
<input type="tel" name="phoneMobile" id="phoneMobile" value="' . $_SESSION['phoneMobile'] . '"><br/>
<br/>
<label for="neighborhood">Quartier : </label>
<input type="text" id="neighborhood" name="neighborhood" value="' . $_SESSION['neighborhood'] . '"><br/>
<br/>
<label for="city">Ville : </label>
<input type="text" name="city" id="city" value="' . $_SESSION['city'] . '"><br/>
<br/>
<label for="profilpic">Fichier (JPG, JPEG, GIF ou PNG | max. 1 Mo) :</label><br />
<input type="file" name="profilpic" id="profilpic" /><br />
' . $_SESSION['erreur']; . '
<br>
<label for="country">Pays : </label>
<select name="country" id="country">';
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
echo '                </select><br/>
<br/>
<label for="mail">Email : </label>
<input type="email" name="email" id="mail" value="' . $_SESSION['email'] . '"><br/>
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
echo '                </select><br/>
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
<br/>
<input type="submit" class="clearForm" value="Modification">';
echo '
<br/>
</form>
</div>';


?>
