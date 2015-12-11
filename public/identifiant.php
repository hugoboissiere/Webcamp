<?php
include("php/includes/database.php");

if (isset($_POST["username"]) AND isset($_POST["password"]))
{
	$username = mysql_real_escape_string(stripslashes($_POST['username']));

	$select = $bdh->query('SELECT username, password FROM cw_human_resources_memberships WHERE username = ' . $username . ' ');
 	if ($select['password'] == $_POST['password'])
	{
		$_SESSION['username'] = $_POST['username'];
	} 
	
	echo $_SESSION['username'];


	header('Location:identification.php');
}

?>