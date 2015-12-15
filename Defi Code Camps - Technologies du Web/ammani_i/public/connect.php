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
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['sex'] = $_POST['sex'];
        $_SESSION['phoneHome'] = $_POST['phoneHome'];
        $_SESSION['phoneMobile'] = $_POST['phoneMobile'];
        $_SESSION['neighborhood'] = $_POST['neighborhood'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['status'] = $_POST['status'];
        $_SESSION['activity'] = $_POST['activity'];
        $_SESSION['membership'] = $_POST['membership'];
        $_SESSION['newsletter'] = $_POST['newsletter'];
        $_SESSION['archive'] = $_POST['archive'];
        header('Location: index.php');

    }
    else
        header('Location: inscription.php');

}


?>

