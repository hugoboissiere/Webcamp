<?php
include("php/includes/database.php");

// if (isset($_POST["username"]) AND isset($_POST["password"]))

// {
	// $username = $_POST['username'];

	// $select = $bdh->query('SELECT username, password FROM cw_human_resources_memberships WHERE username = "' . $username . '" ');
 // 	if ($select['password'] == $_POST['password'])
	// {
	// 	$_SESSION['username'] = $_POST['username'];
	// } 

	$moviesCompleteList = $dbh->query('SELECT * FROM cw_human_resources_memberships');
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   $username = $moviesCompleteList->username;
   echo $username;
}
$moviesCompleteList->closeCursor(); 

 // WHERE username = "' . $username . '" '
	


	// header('Location:identification.php');
// }

?>