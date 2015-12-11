<?php
include("php/includes/database.php");
include("php/includes/head.php");

echo '<p>SE CONNECTER<br/><p/>
        <br>';

        echo '<form method="POST" action="identifiant.php">
        <label for="username">Username : </label>
                <input type="text" name="username" id="username" placeholder="Ex : laurent_dupont">
                <br/>
                <label for="password">Mot de passe : </label>
                <input type="password" type="password" name="password" id="password" placeholder="Au moins 5 caractères">
                <br/>
                <input type="submit" class="clearForm" name="coco" value="Se connecter">';

?>