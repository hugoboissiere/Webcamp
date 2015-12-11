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

    try
    {

    $update = $dbh->prepare("UPDATE cw_human_resources_employees "
        . "SET firstname = :firstname, lastname = :lastname, birthDate = :birthDate, sex = :sex, address = :address, city = :city, phoneHome = :phoneHome, phoneMobile = :phoneMobile, email = :email, job = :job, status = :status, password = :password, country = :country "
        . "WHERE id = 1");
    $insert->bindParam(":lastname", $_POST["lastname"]);
    $insert->bindParam(":firstname", $_POST["firstname"]);
    $insert->bindParam(":birthDate", $_POST["birthDate"]);
    $insert->bindParam(":sex", $_POST["sex"]);
    $insert->bindParam(":address", $_POST["address"]);
    $insert->bindParam(":city", $_POST["city"]);
    $insert->bindParam(":phoneHome", $_POST["phoneHome"]);
    $insert->bindParam(":phoneMobile", $_POST["phoneMobile"]);
    $insert->bindParam(":email", $_POST["email"]);
    $insert->bindParam(":job", $_POST["job"]);
    $insert->bindParam(":status", $_POST["status"]);
    $insert->bindParam(":password", $_POST["password"]);
    $insert->bindParam(":country", $_POST["country"]);
    $insert->execute();
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




//     // $insert = $dbh->prepare("INSERT INTO cw_human_resources_memberships"
//     //         . "(firstname,lastname,password,cardNumber,username,sex,phoneHome,phoneMobile,neighborhood,city,country,email,status,activity,membership,newsletter)"
//     //         . " VALUES(:firstname,:lastname,:password,:cardNumber,:username,:sex,:phoneHome,:phoneMobile,:neighborhood,:city,:country,:email,:status,:activity,:membership,:newsletter)");
//     // $insert->bindParam(":firstname", $_POST["firstname"]);
//     // $insert->bindParam(":lastname", $_POST["lastname"]);
//     // $insert->bindParam(":password", $_POST["password"]);
//     // $insert->bindParam(":cardNumber", $_POST["cardNumber"]);
//     // $insert->bindParam(":username", $_POST["username"]);
//     // $insert->bindParam(":sex", $_POST["sex"]);
//     // $insert->bindParam(":phoneHome", $_POST["phoneHome"]);
//     // $insert->bindParam(":phoneMobile", $_POST["phoneMobile"]);
//     // $insert->bindParam(":neighborhood", $_POST["neighborhood"]);
//     // $insert->bindParam(":city", $_POST["city"]);
//     // $insert->bindParam(":country", $_POST["country"]);
//     // $insert->bindParam(":email", $_POST["email"]);
//     // $insert->bindParam(":status", $_POST["status"]);
//     // $insert->bindParam(":activity", $_POST["activity"]);
//     // $insert->bindParam(":membership", $_POST["membership"]);
//     // $insert->bindParam(":newsletter", $_POST["newsletter"]);
//     // $insert->execute(); -->