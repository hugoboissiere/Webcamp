<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   echo $result->country . "\n";
}
$moviesCompleteList->closeCursor(); 

$test = $dbh->query("SELECT * from cw_medias_movies"); 
$test->setFetchMode(PDO::FETCH_OBJ);

$essai = $dbh->query("SELECT * from cw_medias_movies"); 
$essai->setFetchMode(PDO::FETCH_OBJ);

while ($result = $essai->fetch())
{
   if ($pouet != "")
      $pouet = ",'".$result->title." : <br> ".$result->runningTime."'";
   else
      $pouet = $result->title." : <br> ".$result->runningTime."'";
   if ($serie != "")
      $serie = $serie.", ".$result->runningTime;
   else
      $serie = $result->runningTime;
   echo $serie . "<br>";
   echo $pouet. "<br>";
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
	  <script>
         var test = $("#test1").data("numberone");
         console.log(test);
         var test2 = $("#test1").data("numbertwo");
         console.log(test2);

           new Chartist.Bar('.ct-chart', {
             labels: ['Test : <br> 20 entrees', 'Test1 : <br> 60 entrees', 'Test2 : <br> 120 entrees', 'Test3 : <br> 200 entrees', 'Test4 : <br> 180 entrees', 'Test5 : <br> 20 entrees', 'Test6 : <br> 10 entrees'],
             series: [ 20, 60, 120, 200, 180, 20, 10],
           }, {
             distributeSeries: true,
             width: 1500,
             height: 600,
           });
     </script>
	  <table border="1" bgcolor="#0D8900" align="center" style="border-color:#732C2C">
      <tr>
         <th>Film</th>
         <th>Genre</th>
         <th>Duree (en min)</th>
         <th>Pays/Continent<th>
      </tr>
      <?php
      while ($result = $test->fetch())
      {
         echo '<tr>
                  <td>' . $result->title . '</td>
                  <td>' . $result->genre . '</td>
                  <td>' . $result->runningTime . '</td>
                  <td>' . $result->country . '</td>
               </tr>';
      }
      $employeeStatusListAdd->closeCursor();
      ?>
      </table>
   </body>
</html>