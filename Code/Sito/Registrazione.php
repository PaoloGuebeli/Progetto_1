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
		
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.datepicker');
			var instances = M.Datepicker.init(elems, options);
		});
	</style>
</head>
<body>
	<div class="main">
		<h1 class="title">SIGN UP</h1>
		<form action="Correzione.php" method="get" id="form">
		<div class="row">
			<div class="input-field col s3">
				<input id="nome" type="text" name="nome" class="validate" onchange="nameControl()">
				<label for="nome">Name*</label>
			</div>
			<div class="input-field col s3">
				<input id="cognome" type="text" name="cognome" class="validate" onchange="lastNameControl()">
				<label for="cognome">Last Name*</label>
			</div>
			<div class="input-field col s3">
				<p>
					<label>
						<input name="sesso" class="radio" type="radio" id="m" checked />
						<span>M</span>
					</label>
					<label>
						<input name="sesso"  class="radio" type="radio" />
						<span>F</span>
					</label>
				</p>
			</div>
			<div class="input-field col s3">
				<input type="text" id="data" name="data" value="dd-mm-yyyy" onchange="dateControl()">
				<label for="date">Birthday</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s3">
				<input id="via" type="text" name="via" class="validate"  onchange="streetControl()">
				<label for="via">Street*</label>
			</div>
			<div class="input-field col s3">
				<input id="ncivico" type="text" name="ncivico" class="validate" onchange="houseNControl()">
				<label for="ncivico">House Number*</label>
			</div>
			<div class="input-field col s3">
				<input id="citta" type="text" name="citta" class="validate" onchange="cityControl()">
				<label for="citta">City*</label>
			</div>
			<div class="input-field col s3">
				<input id="nap" type="text" name="nap" class="validate" onchange="napControl()">
				<label for="nap">NAP*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<input id="tel" type="text" name="tel" class="validate" onchange="phoneControl()">
				<label for="tel">Phone Number*</label>
			</div>
			<div class="input-field col s6">
				<input id="email" type="text" name="email" class="validate"  onchange="emailControl()">
				<label for="email">E-mail*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<textarea id="hobby" class="materialize-textarea" name="hobby" onchange="hobbyControl()"></textarea>
				<label for="hobby">Hobby</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<textarea id="pro" class="materialize-textarea" name="pro" onchange="proControl()"></textarea>
				<label for="pro">Job</label>
			</div>
		</div>
		<p id="error"></p>
		<a onclick="submit()">
			<div class="button right" id="avanti" style="visibility:hidden">
				<p>FINISH</p>
			</div>
		</a>
		<a onclick="deleteAll()">
			<div class="button left">
				<p>DELETE</p>
			</div>
		</a>
		</form>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/dataControl.js"></script>
</body>
</html>