<?php
include("php/includes/database.php");

if (isset('coco'))
{

	$select = $bdh->query('SELECT username, password FROM cw_human_resources_memberships WHERE username = $_POST['username']');
	echo $select->username;
// 	if ($select->password == $_POST['password'])
// 	{
// 		$_SESSION['username'] = $_POST['username'];
// 	} 
	
// 	echo $_SESSION['username'];


// 	header('Location:connexion.php');

// }