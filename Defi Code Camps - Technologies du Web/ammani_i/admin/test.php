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
    echo "fefwef";
    $_POST["idMovie"]= '1';
    $_POST["idTheater"]='1';
    $_POST["date"]= NOW;
    $_POST["language"]='Grec';
    $_POST["subtitles"]='no';
    echo "fffefefefef";
    $theaterCompleteList =  $dbh->query("SELECT * FROM cw_cinema_theaters WHERE archive = 'false'");
    $theaterCompleteList -> setFetchMode(PDO::FETCH_OBJ);
    while ($result = $theaterCompleteList->fetch())
    {
        $places = $result->numberOfPlace;
    }
    echo "ddos";
    $genresCompleteLists->closeCursor();

    echo "oui";
    try
    {
        echo "sse";

        if (isset($_POST["insertSession"])) {

            $insert = $dbh->prepare("INSERT INTO cw_cinema_sessions"
                . "(idMovie, idTheater,date,language,subtitles, nb_place)"
                . " VALUES(:idMovie, :idTheater, :date, :language, :subtitles, :nb_place)");
            $insert->bindParam(":idMovie", $_POST["idMovie"]);
            $insert->bindParam(":idTheater", $_POST["idTheater"]);
            $insert->bindParam(":date", $_POST["date"]);
            $insert->bindParam(":language", $_POST["language"]);
            $insert->bindParam(":subtitles", $_POST["subtitles"]);
            $insert->bindParam(":nb_place", $places);
            $insert->execute();
        }
    }
    catch (PDOException $e)
    {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
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