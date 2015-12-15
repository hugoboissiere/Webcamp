<?php

session_start();

include("php/includes/database.php");
if (isset($_POST["InsertMembersOrSubscribers"])) {
    $_POST["cardNumber"] = "0"; // Pas de numero de compte pour l'instant

    if ($_POST['password'] == $_POST['password2'])
    {

        $insert = $dbh->prepare("INSERT INTO cw_human_resources_memberships"
                . "(firstname,lastname,password,cardNumber,username,sex,phoneHome,phoneMobile,neighborhood,city,country,email,status,activity,membership,newsletter)"
                . " VALUES(:firstname,:lastname,:password,:cardNumber,:username,:sex,:phoneHome,:phoneMobile,:neighborhood,:city,:country,:email,:status,:activity,:membership,:newsletter)");
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
        $insert->execute();
    }
    else
        exit(0);
}

header('Location: inscription.php');

?>

