<?php
include("php/includes/database.php");

if (isset($_POST["email"]) AND isset($_POST["password"]))

{

	$moviesCompleteList = $dbh->query('SELECT * FROM cw_human_resources_memberships WHERE email = "' . $_POST['email'] . '"  AND password = "' . $_POST["password"] .'"  ');
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   $_SESSION['username'] = $result->username;
}
echo $_SESSION['username'];
$moviesCompleteList->closeCursor(); 

 // WHERE username = "' . $username . '" '
	


	// header('Location:identification.php');
// }

?>