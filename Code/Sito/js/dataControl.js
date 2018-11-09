
var name = false;
var lastName = false;
var birthdate = false;
var street = false;
var city = false;
var nap = false;
var houseNumber = false;
var phone = false;
var email = false;
var hobby = true;
var job = true;

var nameV;
var lastNameV;
var birthdateV;
var streetV;
var cityV;
var napV;
var houseNumberV;
var phoneV;
var emailV;
var hobbyV;
var jobV;

var check = /[^A-Za-zAàèìòùÀÈÌÒÙ ]/;

function nameControl(){
	var y = true;
	var x = document.getElementById("nome").value;
	if(x != null && x !== ""){
		if(x.length <= 50){
			for(var i = 0; i < x.length; i++){
				if(check.test(x[i])){
					y = false;
				}
			}
			if(y){
				name = true;
				document.getElementById("error").innerHTML = "";
			}else{
				name = false;
				document.getElementById("error").innerHTML = "Name can only contain letters and spaces";
			}
		}else{
			name = false;
			document.getElementById("error").innerHTML = "Name max length is 50 characters.";
		}
	}else{
		name = false;
	}
	finish();
}

function lastNameControl(){
	var y = true;
	var x = document.getElementById("cognome").value;
	if(x != null && x !== ""){
		if(x.length <= 50){
			for(var i = 0; i < x.length; i++){
				if(check.test(x[i])){
					y = false;
				}
			}
			if(y){
				lastName = true;
				document.getElementById("error").innerHTML = "";
			}else{
				lastName = false;
				document.getElementById("error").innerHTML = "Last Name can only contain letters and spaces";
			}
		}else{
			lastName = false;
			document.getElementById("error").innerHTML = "Last name max length is 50 characters.";
		}
	}else{
		lastName = false;
	}
	finish();
}

function dateControl(){
	var y = true;
	var x = document.getElementById("data").value;
	if(x != null && x !== ""){
		if(x.length == 10){
			for(var i = 0; i < 2; i++){
				if(/[^0-9]/.test(x[i])){
					y = false;
				}
			}
			if(x[2] != "-"){
				y = false;
			}
			for(var i = 3; i < 5; i++){
				if(/[^0-9]/.test(x[i])){
					y = false;
				}
			}
			if(x[5] != "-"){
				y = false;
			}
			for(var i = 6; i < 10; i++){
				if(/[^0-9]/.test(x[i])){
					y = false;
				}
			}
			var parti = x.split('-');
			var dt = new Date(parti[2], parti[1] - 1, parti[0]);
			var adesso = new Date();

			if(adesso < dt || adesso.getFullYear()-dt.getFullYear() > 120){
				y = false;
			}
			
			if(dt.getDate() > 31){
				y = false;
			}
			
			if(dt.getMonth() > 11){
				y = false;
			}
			
			if(y){
				document.getElementById("error").innerHTML = "";
			}else{
				document.getElementById("error").innerHTML = "Date is not valid";
			}
		}else{
			document.getElementById("error").innerHTML = "Date length is 10 characters and the format is dd-mm-yyyy";
		}
	}
	birthdate = y;
	finish();
}

function streetControl(){
	var y = true;
	var x = document.getElementById("via").value;
	if(x != null && x !== ""){
		if(x.length <= 50){
			for(var i = 0; i < x.length; i++){
				if(check.test(x[i])){
					y = false;
				}
			}
			if(y){
				street = true;
				document.getElementById("error").innerHTML = "";
			}else{
				street = false;
				document.getElementById("error").innerHTML = "Street can only contain letters and spaces";
			}
		}else{
			street = false;
			document.getElementById("error").innerHTML = "Street max length is 50 characters.";
		}
	}else{
		street = false;
	}
	finish();
}

function houseNControl(){
	var y = true;
	var x = document.getElementById("ncivico").value;
	if(x != null && x !== ""){
		if(x.length <= 4){
			if(x.length > 1){
				for(var i = 0; i < x.length-1; i++){
					if(/[^0-9]/.test(x[i])){
						y = false;
					}
				}
				if(/[^A-Za-z0-9]/.test(x[x.length-1])){
					y = false;
				}
			}else{
				if(/[^0-9]/.test(x[0])){
					y = false;
				}
			}
			
			if(y){
				houseNumber = true;
				document.getElementById("error").innerHTML = "";
			}else{
				houseNumber = false;
				document.getElementById("error").innerHTML = "House number needs to contain a valid number.";
			}
		}else{
			houseNumber = false;
			document.getElementById("error").innerHTML = "House number max length is 4 characters.";
		}
	}else{
		houseNumber = false;
	}
	finish();
}

function cityControl(){
	var y = true;
	var x = document.getElementById("citta").value;
	if(x != null && x !== ""){
		if(x.length <= 50){
			for(var i = 0; i < x.length; i++){
				if(check.test(x[i])){
					y = false;
				}
			}
			if(y){
				city = true;
				document.getElementById("error").innerHTML = "";
			}else{
				city = false;
				document.getElementById("error").innerHTML = "City can only contain letters and spaces";
			}
		}else{
			city = false;
			document.getElementById("error").innerHTML = "City max length is 50 characters.";
		}
	}else{
		city = false;
	}
	finish();
}

function napControl(){
	var y = true;
	var x = document.getElementById("nap").value;
	if(x != null && x !== ""){
		if(x.length <= 5){
			for(var i = 0; i < x.length; i++){
				if(/[^0-9]/.test(x[i])){
					y = false;
				}
			}
			if(y){
				nap = true;
				document.getElementById("error").innerHTML = "";
			}else{
				nap = true;
				document.getElementById("error").innerHTML = "NAP can only contain numbers";
			}
		}else{
			nap = true;
			document.getElementById("error").innerHTML = "NAP max length is 5 numbers.";
		}
	}else{
		nap = true;
	}
	finish();
}

function phoneControl(){
	var y = true;
	var x = document.getElementById("tel").value;
	if(x != null && x !== ""){
		if(x.length >= 8 && x.length <= 12){
			for(var i = 0; i < x.length; i++){
				if(/[^0-9 ]/.test(x[i])){
					y = false;
				}
			}
			if(y){
				phone = true;
				document.getElementById("error").innerHTML = "";
			}else{
				phone = false;
				document.getElementById("error").innerHTML = "Phone number needs to contain a valid phone number.";
			}
		}else{
			phone = false;
			document.getElementById("error").innerHTML = "Phone number needs to be long 8-12 numbers.";
		}
	}else{
		phone = false;
	}
	finish();
}

function emailControl(){
	var y = true;
	var x = document.getElementById("email").value;
	if(x != null && x !== ""){
		if(x.length <= 50){
			if(x.indexOf("@") != -1){
				var h = x.substring(0,x.indexOf("@"));
				for(var i = 0; i < h.length; i++){
					if(/[^A-Za-z0-9._]/.test(h[i])){
						y = false;
					}
				}
				g = x.substring(x.indexOf("@")+1, x.length);
				if(g.indexOf(".")!=-1 && g.indexOf(".")!=g.length-1 && g.indexOf(".") != 0){
					for(var i = 0; i < g.length; i++){
						if(/[^A-Za-z.]/.test(g[i])){
							y = false;
						}
					}
					if(y){
						document.getElementById("error").innerHTML = "";
					}else{
						document.getElementById("error").innerHTML = "E-mail needs to be valid.";
					}
				}else{
					document.getElementById("error").innerHTML = "E-mail needs to be valid.";
				}
			}else{
				document.getElementById("error").innerHTML = "E-mail needs to be valid.";
			}
		}else{
			document.getElementById("error").innerHTML = "E-mail max length is 50 characters.";
		}
	}
	email = y;
	finish();
}

function hobbyControl(){
	var y = true;
	var x = document.getElementById("hobby").value;
	if(x.length <= 500 || x == null){
		hobby=true;
	}else{
		hobby = false;
		document.getElementById("error").innerHTML = "Hobby max length is 500 characters.";
	}
	finish();
}

function proControl(){
	var y = true;
	var x = document.getElementById("pro").value;
	if(x.length <= 500 || x == null){
		job = true;
	}else{
		job = false;
		document.getElementById("error").innerHTML = "Job max length is 500 characters.";
	}
	finish();
}

function deleteAll(){
	document.getElementById("nome").value = "";
	document.getElementById("cognome").value = "";
	document.getElementById("m").checked = true;
	document.getElementById("nome").value = "";
	document.getElementById("via").value = "";
	document.getElementById("ncivico").value = "";
	document.getElementById("citta").value = "";
	document.getElementById("nap").value = "";
	document.getElementById("tel").value = "";
	document.getElementById("email").value = "";
	document.getElementById("hobby").value = "";
	document.getElementById("pro").value = "";
}

function finish(){
	if(name && lastName && birthdate && street && city && nap && houseNumber && phone && email && hobby && job){
		document.getElementById("avanti").style.visibility = "visible";
	}
}