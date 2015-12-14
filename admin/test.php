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

    $_POST["firstname"]='graoui';
    $_POST["lastname"]='CAPSLOCK';
    $_POST["password"]='eeeee';
    $_POST["birthDate"]='12-12-1912';
    $_POST["sex"]='Female';
    $_POST["address"]='Femalergegegergreger';
    $_POST["phoneHome"]='546467984649';
    $_POST["phoneMobile"]='484488448488';
    $_POST["city"]='fes';
    $_POST["country"]= "2";
    $_POST["email"]='grgreg@er.fr';
    $_POST["status"]='CDI';
    $_POST["job"]='3';

    echo "oui";
    try
    {
        echo "sse";
    $update = $dbh->prepare("UPDATE cw_human_resources_employees "
        . "SET firstname = :firstname, lastname = :lastname, birthDate = :birthDate, sex = :sex, address = :address, city = :city, phoneHome = :phoneHome, phoneMobile = :phoneMobile, email = :email, job = :job, status = :status, password = :password, country = :country "
        . "WHERE id = 7");
    $update->bindParam(":id", $_POST["id"]);
    $update->bindParam(":lastname", $_POST["lastname"]);
    $update->bindParam(":firstname", $_POST["firstname"]);
    $update->bindParam(":birthDate", $_POST["birthDate"]);
    $update->bindParam(":sex", $_POST["sex"]);
    $update->bindParam(":address", $_POST["address"]);
    $update->bindParam(":city", $_POST["city"]);
    $update->bindParam(":phoneHome", $_POST["phoneHome"]);
    $update->bindParam(":phoneMobile", $_POST["phoneMobile"]);
    $update->bindParam(":email", $_POST["email"]);
    $update->bindParam(":job", $_POST["job"]);
    $update->bindParam(":status", $_POST["status"]);
    $update->bindParam(":password", $_POST["password"]);
    $update->bindParam(":country", $_POST["country"]);
    $update->execute();
        echo 'logie';
    }
    catch(PDOException $e)
    {
        echo 'graphie';
        handle_sql_errors($selectQuery, $e->getMessage());
    }

    ?>
</body>
</html>


<!-- 
$moviesCompleteList = $dbh->query("SELECT * FROM cw_human_resources_memberships WHERE username = '" . $_POST["username"] . "'");
// $moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
// while ($result = $moviesCompleteList->fetch())
// {
//    $id = $result->id;
// }
// $moviesCompleteList->closeCursor();




//     // $update = $dbh->prepare("update INTO cw_human_resources_memberships"
//     //         . "(firstname,lastname,password,cardNumber,username,sex,phoneHome,phoneMobile,neighborhood,city,country,email,status,activity,membership,newsletter)"
//     //         . " VALUES(:firstname,:lastname,:password,:cardNumber,:username,:sex,:phoneHome,:phoneMobile,:neighborhood,:city,:country,:email,:status,:activity,:membership,:newsletter)");
//     // $update->bindParam(":firstname", $_POST["firstname"]);
//     // $update->bindParam(":lastname", $_POST["lastname"]);
//     // $update->bindParam(":password", $_POST["password"]);
//     // $update->bindParam(":cardNumber", $_POST["cardNumber"]);
//     // $update->bindParam(":username", $_POST["username"]);
//     // $update->bindParam(":sex", $_POST["sex"]);
//     // $update->bindParam(":phoneHome", $_POST["phoneHome"]);
//     // $update->bindParam(":phoneMobile", $_POST["phoneMobile"]);
//     // $update->bindParam(":neighborhood", $_POST["neighborhood"]);
//     // $update->bindParam(":city", $_POST["city"]);
//     // $update->bindParam(":country", $_POST["country"]);
//     // $update->bindParam(":email", $_POST["email"]);
//     // $update->bindParam(":status", $_POST["status"]);
//     // $update->bindParam(":activity", $_POST["activity"]);
//     // $update->bindParam(":membership", $_POST["membership"]);
//     // $update->bindParam(":newsletter", $_POST["newsletter"]);
//     // $update->execute(); -->