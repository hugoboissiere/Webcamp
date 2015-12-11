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
$sex = $_POST['status'];
$activity = $_POST['activity'];
$membership = $_POST['membership'];
$newsletter = $_POST['newsletter'];
$archive = $_POST['archive'];

//echo $firstname . $_SESSION['username'] ;



$rep = $bdh->exec('UPDATE cw_human_resources_memberships SET firstname = "' . $firstname . '" , password = "'. $password .'", archive = "'. $archive . '", lastname = "' . $lastname .'" , username = "' . $username . '" , sex = "' . $sex . '" , phoneHome = "' . $phoneHome .'" , phoneMobile = "' . $phoneMobile .'" , neighborhood = "' . $neighborhood .'" , city = "' . $city . '" , country = "' . $country . '" , email = "' . $email . '" , membership = "' . $membership . '" , newsletter = "' . $newsletter . '", status = "'. $status . '" , activity = "' . $activity . '" WHERE id = ' . $_SESSION['id'] . ' ');
echo PDO::errorCode();
echo $firstname . $_SESSION['username'] ;
// if ($rep == NULL)
// 	echo "NULL";
// $sele = $bdh->query('SELECT * FROM cw_human_resources_memberships');
// $sele->setFetchMode(PDO::FETCH_OBJ);
// while ($result = $sele->fetch())
// {
// 	//var_dump($result);
//    $_SESSION['username'] = $result->username;
//    $_SESSION['firstname'] = $result->firstname;
//    $_SESSION['lastname'] = $result->lastname;
//    $_SESSION['password'] = $result->password;
//    $_SESSION['sex'] = $result->sex;
//    $_SESSION['phoneHome'] = $result->phoneHome;
//    $_SESSION['phoneMobile'] = $result->phoneMobile;
//    $_SESSION['neighborhood'] = $result->neighborhood;
//    $_SESSION['city'] = $result->city;
//    $_SESSION['country'] = $result->country;
//    $_SESSION['email'] = $result->email;
//    $_SESSION['status'] = $result->status;
//    $_SESSION['activity'] = $result->activity;
//    $_SESSION['membership'] = $result->membership;
//    $_SESSION['newsletter'] = $result->newsletter;
//    $_SESSION['archive'] = $result->archive;
//    //$rep->execute();
// }

// $sele->closeCursor(); 

	
header('Location:index.php');

?>