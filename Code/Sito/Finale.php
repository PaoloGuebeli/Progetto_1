<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"/>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<style>
		@font-face {
			font-family: Hallosans;
			src: url("Hallo.otf");
		}
		
		input[type="submit"]{
			background-color:none;
			
		}
	</style>
</head>
<body>
	<div class="main">
		<h1 class="title">RIEPILOGO GIORNATA</h1>
		<?php
		$fileHandle = fopen("Registrazioni/Registrazioni_".date("Y-m-d").".csv", "r");
		while (($row = fgetcsv($fileHandle, 0, ";")) !== FALSE) {
			echo
			"<table style=\"width:100%\">
			<tr>
				<th>Time</th>
				<th>Name</th>
				<th>Lastname</th> 
				<th>Sex</th>
				<th>Birthdate</th>
			</tr>
			<tr>
				<td>".$row[0]."</td>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td> 
				<td>".$row[3]."</td>
				<td>".$row[4]."</td>
			</tr>
			<tr>
				<th>Street</th>
				<th>House number</th> 
				<th>City</th>
				<th>NAP</th>
			</tr>
			<tr>
				<td>".$row[5]."</td>
				<td>".$row[6]."</td> 
				<td>".$row[7]."</td>
				<td>".$row[8]."</td>
			</tr>
			<tr>
				<th colspan=\"2\">Phone number</th>
				<th colspan=\"2\">E-mail</th> 
			</tr>
			<tr>
				<td colspan=\"2\">".$row[9]."</td>
				<td colspan=\"2\">".$row[10]."</td> 
			</tr>";
			if(count($row) > 10){
				echo
				"<tr>
					<th colspan=\"2\">Hobby</th>
					<th colspan=\"2\">Job</th>
				</tr>
				<tr>
					<td colspan=\"2\">".$row[11]."</td>
					<td colspan=\"2\">".$row[12]."</td> 
				</tr>
				</table>
				<br>
				<br>
				<br>";
			}
		}
		?>
		<a href="index.html">
			<div class="button right" margin="50px">
				<p>FINISH</p>
			</div>
		</a>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/dataControl.js"></script>
</body>
</html>