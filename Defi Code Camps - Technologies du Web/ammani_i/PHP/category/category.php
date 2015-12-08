<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Catégories</title>
		<meta charset="utf8">

		<link rel="stylesheet" href="category.css">
	</head>
	<body>
		<?php include("../header.php"); ?>
		<div id="galery">
			<div class="img">
				<a href="../category/categoryconsole.php"><img src="../image/typedeconsole.jpg" alt="test"></a>
				<br><br>
				<a href="../category/categoryjeu.php"><img src="../image/typedejeu.jpg" alt="test"></a>
			</div>
    		<?php include("../footer.php"); ?>
        	<script type="text/javascript" src="./sortact.js"></script>
	   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	   		<script type="text/javascript">sort_game()</script>
	</body>
</hmtl>