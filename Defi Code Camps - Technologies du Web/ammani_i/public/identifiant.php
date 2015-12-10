<?php

if (isset('coco'))
{
	$_POST['cardNumber'] = "0";

	$select = $bdh->query('SELECT username, password FROM cw_human_resources_memberships WHERE username = $_POST['username']');
	if ($select->password == $_POST['password'])
	{
		$_SESSION['username'] = $_POST['username'];
	} 
	else
		exit(0);

	echo $_SESSION['username'];


	header('Location:connexion.php');

}