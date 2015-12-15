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


$rep = $dbh->exec("UPDATE cw_human_resources_memberships SET firstname = '" . $firstname . "' , password = '". $password ."', archive = '". $archive . "', lastname = '" . $lastname ."' , username = '" . $username . "', sex = '" . $sex . "' , phoneHome = '" . $phoneHome ."' , phoneMobile = '" . $phoneMobile ."' , neighborhood = '" . $neighborhood ."' , city = '" . $city . "' , country = '" . $country . "' , email = '" . $email . "' , membership = '" . $membership . "' , newsletter = '" . $newsletter . "', status = '". $status . "' , activity = '" . $activity ."' WHERE id =  '".$_SESSION['id']."' ");
$rep->setFetchMode(PDO::FETCH_OBJ);
	while ($result = $rep->fetch())
{
   $_SESSION['username'] = $result->username;
   $_SESSION['firstname'] = $result->firstname;
   $_SESSION['lastname'] = $result->lastname;
   $_SESSION['password'] = $result->password;
   $_SESSION['caddNumber'] = $result->cardNumber;
   $_SESSION['sex'] = $result->sex;
   $_SESSION['phoneHome'] = $result->phoneHome;
   $_SESSION['phoneMobile'] = $result->phoneMobile;
   $_SESSION['neighborhood'] = $result->neighborhood;
   $_SESSION['city'] = $result->city;
   $_SESSION['country'] = $result->country;
   $_SESSION['email'] = $result->email;
   $_SESSION['status'] = $result->status;
   $_SESSION['activity'] = $result->activity;
   $_SESSION['membership'] = $result->membership;
   $_SESSION['newsletter'] = $result->newsletter;
   $_SESSION['archive'] = $result->archive;
}
	
header('Location:index.php');

?>