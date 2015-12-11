<?php
	$compteur = $dbh->query("UPDATE `cw_medias_movies` SET nb_entrees = nb_entrees+1 WHERE ID=1");}
	$compteur->setFetchMode(PDO::FETCH_OBJ);
	//header("Location: untitled.php");//
	echo "test";
?>