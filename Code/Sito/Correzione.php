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
	</style>
</head>
<body onload="assign">
	<div class="main">
		<?php 
			$nome = $_GET["nome"];
			$cognome = $_GET["cognome"];
			if($_GET["sesso"] == "on"){ $sesso = "Male"; }else{ $sesso = "Female"; }
			$data = $_GET["data"];
			$via = $_GET["via"];
			$ncivico = $_GET["ncivico"];
			$citta = $_GET["citta"];
			$nap = $_GET["nap"];
			$tel = $_GET["tel"];
			$email = $_GET["email"];
			$hobby = $_GET["hobby"];
			$pro = $_GET["pro"];
		?>
		<form id="form" method="post">
		<h1 class="title">CORRECTION</h1>
		<table style="width:100%">
		<tr>
			<th>Name</th>
			<th>Lastname</th> 
			<th>Sex</th>
			<th>Birthdate</th>
		</tr>
		<tr>
			<td><?php echo $nome?></td>
			<td><?php echo $cognome?></td> 
			<td><?php echo $sesso?></td>
			<td><?php echo $data?></td>
		</tr>
		<tr>
			<th>Street</th>
			<th>House number</th> 
			<th>City</th>
			<th>NAP</th>
		</tr>
		<tr>
			<td><?php echo $via?></td>
			<td><?php echo $ncivico?></td> 
			<td><?php echo $citta?></td>
			<td><?php echo $nap?></td>
		</tr>
		<tr>
			<th colspan="2">Phone number</th>
			<th colspan="2">E-mail</th> 
		</tr>
		<tr>
			<td colspan="2"><?php echo $tel?></td>
			<td colspan="2"><?php echo $email?></td> 
		</tr>
		<tr>
			<th colspan="2">Hobby</th>
			<th colspan="2">Job</th> 
		</tr>
		<tr>
			<td colspan="2"><?php echo $hobby?></td>
			<td colspan="2"><?php echo $pro?></td> 
		</tr>
		</table>
		<a onclick="submit()">
			<div class="button right">
				<p>OK</p>
			</div>
		</a>
		<a href="Registrazione.php">
			<div class="button left">
				<p>CHANGE</p>
			</div>
		</a>
		</form>
		<?php
			$text = date("H:i:s").";".$nome.";".$cognome.";".$sesso.";".$data.";".$via.";".$ncivico.";".$citta.";".$nap.";".$tel.";".$email.";".$hobby.";".$pro.";\n";
			$file = fopen("Registrazioni/Registrazioni_tutte.csv", "a");
			$fileDay = fopen("Registrazioni/Registrazioni_".date("Y-m-d").".csv","a");
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				fwrite($file,date("Y-m-d")." ".$text);
				fclose($file);
				fwrite($fileDay,$text);
				fclose($fileDay);
				echo "<script>window.location.replace('Finale.php')</script>";
			}
		?>
	</div>
	<script type="text/javascript" src="js/dataControl.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>