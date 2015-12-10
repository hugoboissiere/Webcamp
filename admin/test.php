<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title> titre </title>
</head>
<body>
    <?php

    echo 'comment est votre blanquette ?';

    include("php/includes/database.php");

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
    $_POST["country"]= "2";
    $_POST["email"]='grgreg@er.fr';
    $_POST["status"]='Invité';
    $_POST["activity"]='Étudiant';
    $_POST["membership"]='Subscriber';
    $_POST["newsletter"]='Yes';


    try
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
        echo 'comment est votre blanquette ?';
    }
    catch(PDOException $e)
    {
        echo 'comment est votre blanquette ?1';
        handle_sql_errors($selectQuery, $e->getMessage());
    }

    ?>
</body>
</html>

