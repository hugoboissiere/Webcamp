<?php
include("php/includes/database.php");
include("php/includes/head.php");

echo '<div class="connecter">
        <p style="color:#68D2C3;">SE CONNECTER<br/><p/>
        <br>
      <div/>';

        echo '<div class="login">
                <form method="POST" action="identifiant.php">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" placeholder="Ex : laurent_dupont@gmail.com"><br/>
                <br/>
                <label for="password">Mot de passe : </label>
                <input type="password" type="password" name="password" id="password" placeholder="Au moins 5 caractères"><br/>
                <br/>
                <input type="submit" class="clearForm" name="coco" value="Se connecter">
                </form>
              </div>';

?>