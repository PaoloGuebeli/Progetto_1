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
		<h1 class="title">CORRECTION</h1>
		<table style="width:100%">
		<tr>
			<th>Name</th>
			<th>Lastname</th> 
			<th>Sex</th>
			<th>Birthdate</th>
		</tr>
		<tr>
			<td id="name"></td>
			<td id="lastname"></td> 
			<td id="birthdate"></td>
		</tr>
		<tr>
			<td>Eve</td>
			<td>Jackson</td> 
			<td>94</td>
		</tr>
		</table>
		<a href="">
			<div class="button">
				<p>OK</p>
			</div>
		</a>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>