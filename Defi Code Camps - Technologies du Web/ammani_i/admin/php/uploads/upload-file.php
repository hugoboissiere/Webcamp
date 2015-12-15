<?php

// $uploaddir = '../../../preprod/resources/imgs/content/movies/'; 
$uploaddir = "../";
$name = $_FILES['uploadfile']['name'];
$ext = end((explode(".", $name))); # extra () to prevent notice
//$fileName = "bim"."." . $ext;
$fileName = $_POST["title"].$_POST["type"]."." . $ext;
$file = $uploaddir . basename($fileName); 
 
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
  echo "success"; 
} else {
	echo "error";
}



?>