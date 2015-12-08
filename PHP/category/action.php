<!doctype html>
<html>
	<head>
		<title>Catégories Action/Aventure</title>
		<meta charset="utf8">

		<link rel="stylesheet" href="jeups1.css">
	</head>
	<body>
		<?php include("../header.php"); ?>
		</div>
			<button type="button" id="sortname">Tri par nom</button>
			<button type="button" id="sortprice">Tri par prix</button>
		<div id="tabletest">
			<table>
				<tr>
					<td class="gamename">Megaman 2 :</td>
					<td><a href="../pagePresentation/megaman.php"><img src="../image/imgMegaman.jpg" width="150" height="200" alt="test"></a></td>
					<td>15$</td>
				</tr>
				<tr>
					<td class="gamename">Super Metroid :</td>
					<td><a href="../pagePresentation/metroid.php"><img src="../image/supermetroid.jpg" width="150" height="200" alt="test"></a></td>
					<td>50$</td>
				</tr>
				<tr>
					<td class="gamename">Tomb Raider :</td>
					<td><a href="../pagePresentation/tombraider.php"><img src="../image/tombraider.jpg" width="150" height="200" alt="test"></a></td>
					<td>10$</td>
				</tr>
			</table>
			</div>

    		<?php include("../footer.php"); ?>
        	<script type="text/javascript" src="./sortact.js"></script>
	   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	   		<script type="text/javascript">sort_game()</script>
	</body>
</hmtl>