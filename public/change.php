<?php

// print_r($_POST);

session_start();

include("php/includes/database.php");

$firstname = $_POST['firstname'];
$password = $_POST['password'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$sex = $_POST['sex'];
$phoneHome = $_POST['phoneHome'];
$phoneMobile = $_POST['phoneMobile'];
$neighborhood = $_POST['neighborhood'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];
$status = $_POST['status'];
$activity = $_POST['activity'];
$membership = $_POST['membership'];
$newsletter = $_POST['newsletter'];
$archive = $_POST['archive'];

echo $_SESSION['id'];

$rep = $dbh->exec("UPDATE cw_human_resources_memberships SET firstname = '" . $firstname . "' , password = '". $password ."', archive = '". $archive . "', lastname = '" . $lastname ."' , username = '" . $username . "', sex = '" . $sex . "' , phoneHome = '" . $phoneHome ."' , phoneMobile = '" . $phoneMobile ."' , neighborhood = '" . $neighborhood ."' , city = '" . $city . "' , country = '" . $country . "' , email = '" . $email . "' , membership = '" . $membership . "' , newsletter = '" . $newsletter . "', status = '". $status . "' , activity = '" . $activity ."' WHERE id =  '".$_SESSION['id']."' ");

	
// header('Location:index.php');

?>