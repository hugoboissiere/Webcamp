<?php
include("php/includes/database.php");

// Titre de la page
$headTitle = "Admin - Stats";

// CSS de cette page
$addCSS =  array("");

// JS de cette page
$addJS =  array("");
include("php/includes/head.php");

// Queries de cette page
$addPHP = array("");
//include("php/includes/queries/count.php");
include("php/includes/navigator.php");
?>

        <!-- main content here -->
        <head>
   <meta charset="utf-8">
	<title>Test</title>
   <link rel="stylesheet" type="text/css" href="style.css"></link>
   <body>
	   <p class="titre">Statistiques des films</p>
	   <table class="tableau">
      <tr>
         <th>Film</th>
         <th>Genre</th>
         <th>Durée (en min)</th>
         <th>Pays/Continent</th>
         <th>Date de publication</th>
         <th>Nombre d'entrées totaux</th>
         <th>Différence de jours</th>
         <th>Moyenne d'entrées par jour</th>
         <th>Moyenne d'entrées par semaine</th>
         <th>Moyenne d'entrées par mois</th>
      </tr>
      <?php
      include("stats.php");
      ?>
      </table>
   </head>
   </body>
	</main>
    <script src="js/layoutNavigator.js"></script> <!-- Resource jQuery -->
</body>
</html>