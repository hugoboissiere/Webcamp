<?php
include("php/includes/database.php");

if (isset($_POST["username"]) AND isset($_POST["password"]))
{

	$select = $bdh->query('SELECT username, password FROM cw_human_resources_memberships WHERE username = $_POST['username']');
 	if ($select['password'] == $_POST['password'])
	{
		$_SESSION['username'] = $_POST['username'];
	} 
	
	echo $_SESSION['username'];


	header('Location:identification.php');
}

?>