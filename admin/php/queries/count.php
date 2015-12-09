<?php

$countMediasMovies = $dbh->query("SELECT count(id) as count FROM cw_medias_movies");
$countMediasMovies ->setFetchMode(PDO::FETCH_OBJ);
    
$countMediasGenres = $dbh->query("SELECT count(id) as count FROM cw_medias_genres");
$countMediasGenres ->setFetchMode(PDO::FETCH_OBJ);
    
$countMediasCountries = $dbh->query("SELECT count(id) as count FROM cw_medias_countries");
$countMediasCountries ->setFetchMode(PDO::FETCH_OBJ);
    
$countMediasLanguages = $dbh->query("SELECT count(id) as count FROM cw_medias_languages");
$countMediasLanguages ->setFetchMode(PDO::FETCH_OBJ);

if($_SESSION['auth']['job'] == 1)
{
	$countHRMemberships = $dbh->query("SELECT count(id) as count FROM cw_human_resources_memberships");
	$countHRMemberships ->setFetchMode(PDO::FETCH_OBJ);
}

else
{
	$countHRMemberships = $dbh->query("SELECT count(id) as count FROM cw_human_resources_memberships WHERE region = '" . $_SESSION['auth']['region'] . "'");
	$countHRMemberships ->setFetchMode(PDO::FETCH_OBJ);
}

if($_SESSION['auth']['job'] == 1)
{
	$countHREmployees = $dbh->query("SELECT count(id) as count FROM cw_human_resources_employees");
	$countHREmployees ->setFetchMode(PDO::FETCH_OBJ);
}

else
{
	$countHREmployees = $dbh->query("SELECT count(id) as count FROM cw_human_resources_employees WHERE region= '" . $_SESSION['auth']['region'] . "'");
	$countHREmployees ->setFetchMode(PDO::FETCH_OBJ);
}

// if ($_SESSION['auth']['job'] == 1)

	$countCinemaSessions = $dbh->query("SELECT count(id) as count FROM cw_cinema_sessions INNER JOIN cw_cinema_theaters ON cw_cinema_sessions.idMovie = cw_cinema_theaters.id");
	$countCinemaSessions ->setFetchMode(PDO::FETCH_OBJ);


// else

	// $countCinemaSessions = $dbh->query("SELECT count(id) as count FROM cw_cinema_sessions IN (SELECT region= '" . $_SESSION['auth']['region'] . "'");
	// $countCinemaSessions ->setFetchMode(PDO::FETCH_OBJ);


if($_SESSION['auth']['job'] == 1)
{
	$countCinemaTheaters = $dbh->query("SELECT count(id) as count FROM cw_cinema_theaters");
	$countCinemaTheaters ->setFetchMode(PDO::FETCH_OBJ);
}

else
{
	$countCinemaTheaters = $dbh->query("SELECT count(id) as count FROM cw_cinema_theaters WHERE region= '" . $_SESSION['auth']['region'] . "'");
	$countCinemaTheaters ->setFetchMode(PDO::FETCH_OBJ);
}
        
?> 