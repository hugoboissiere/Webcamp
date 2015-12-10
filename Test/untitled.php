<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   echo $result->country . "\n";
}
$moviesCompleteList->closeCursor();             
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="chartist.min.css">
</head>
<body>
	<p id="test1" data-numberone="20, 60, 120" data-numbertwo="200, 180, 20" style="text-align:center">Nombre d'entrees</p>
	<div class="ct-chart"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="chartist.min.js"></script>
	<script src="test.js"></script>
	<table border="1" bgcolor="#0D8900" align="center">
   <tr>
      <th>Film</th>
      <th>Genre</th>
      <th>Duree (en min)</th>
      <th>Pays/Continent<th>
   </tr>
   <tr>
      <td>Test1</td>
      <td>Fantastique</td>
      <td>96</td>
      <td>France</td>
   </tr>
   <tr>
      <td>Test2</td>
      <td>Drame</td>
      <td>123</td>
      <td>Afrique</td>
   </tr>
</table>
</body>
</html>