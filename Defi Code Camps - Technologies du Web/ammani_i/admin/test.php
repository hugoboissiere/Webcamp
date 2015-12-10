<?php
include("php/includes/database.php")
 $_POST["firstname"]='gre';
 $_POST["lastname"]='grd';
 $_POST["password"]='eeeee';
$_POST["username"]='greree';
 $_POST["sex"]='Female';
 $_POST["cardNumber"]='0';
 $_POST["phoneHome"]='546467984649';
 $_POST["phoneMobile"]='484488448488';
 $_POST["neighborhood"]='578';
$_POST["city"]='fes';
 $_POST["country"]='fefeew';
$_POST["email"]='grgreg@er.fr';
$_POST["status"]='Invité';
 $_POST["activity"]='Étudiant';
 $_POST["membership"]='Subscriber';
$_POST["newsletter"]='Yes';
$_POST["region"]='1';

    $insert = $dbh->prepare("INSERT INTO cw_human_resources_memberships"
            . "(firstname,lastname,password,cardNumber,username,sex,phoneHome,phoneMobile,neighborhood,city,country,email,status,activity,membership,newsletter,region)"
            . " VALUES(:firstname,:lastname,:password,:cardNumber,:username,:sex,:phoneHome,:phoneMobile,:neighborhood,:city,:country,:email,:status,:activity,:membership,:newsletter,:region)");
    $insert->bindParam(":firstname", $_POST["firstname"]);
    $insert->bindParam(":lastname", $_POST["lastname"]);
    $insert->bindParam(":password", $_POST["password"]);
    $insert->bindParam(":cardNumber", $_POST["cardNumber"]);
    $insert->bindParam(":username", $_POST["username"]);
    $insert->bindParam(":sex", $_POST["sex"]);
    $insert->bindParam(":phoneHome", $_POST["phoneHome"]);
    $insert->bindParam(":phoneMobile", $_POST["phoneMobile"]);
    $insert->bindParam(":neighborhood", $_POST["neighborhood"]);
    $insert->bindParam(":city", $_POST["city"]);
    $insert->bindParam(":country", $_POST["country"]);
    $insert->bindParam(":email", $_POST["email"]);
    $insert->bindParam(":status", $_POST["status"]);
    $insert->bindParam(":activity", $_POST["activity"]);
    $insert->bindParam(":membership", $_POST["membership"]);
    $insert->bindParam(":newsletter", $_POST["newsletter"]);
    $insert->bindParam(":region", $_POST["region"]);
    $insert->execute();

    ?>