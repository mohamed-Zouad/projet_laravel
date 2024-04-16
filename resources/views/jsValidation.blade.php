<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Validation de formulaire côté client en JavaScript dans Laravel
</title>
<style type="text/css">
body {
background: #ddd;
font-family: Arial, sans-serif;
}
.container {
background: #fff;
margin: 100px auto;
padding: 20px;
width: 400px;
border-radius: 5px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.form-group {
margin-bottom: 20px;
}
label {
display: block;
font-weight: bold;
margin-bottom: 5px;
}
input[type="text"] {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 5px;
}
.error-message {
color: red;
font-size: 14px;
}
</style>
</head>
<body>
<div class="container">
<h2>Validation de formulaire côté client en JavaScript dans Laravel </h2>
<form id="form">
<div class="form-group">
<label for="name">Nom :</label>
<input type="text" id="name" name="name">
<span class="error-message" id="name-error"></span>
</div>
<div class="form-group">
<label for="email">Email :</label>
<input type="text" id="email" name="email">
<span class="error-message" id="email-error"></span>
</div>
<div class="form-group">
<label for="number">Numéro de téléphone :</label>
<input type="text" id="number" name="number">
<span class="error-message" id="number-error"></span>
</div>
<div class="form-group">
<button type="button"
onclick="validateForm()">Soumettre</button>
</div>
</form>
</div>
<script>
function validateForm() {
var name = document.getElementById('name').value.trim();
var email = document.getElementById('email').value.trim();
var number = document.getElementById('number').value.trim();
var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var numberError = document.getElementById('number-error');
var isValid = true;
// Reset previous error messages
nameError.innerHTML = '';
emailError.innerHTML = '';
numberError.innerHTML = '';
// Validation rules
if (name === '') {
nameError.innerHTML = 'Le nom est requis.';
isValid = false;
}
if (email === '') {
emailError.innerHTML = 'L\'adresse email est requise.';
isValid = false;
} else if (!isValidEmail(email)) {
emailError.innerHTML = 'Veuillez entrer une adresse email
valide.';
isValid = false;
}
if (number === '') {
numberError.innerHTML = 'Le numéro de téléphone est requis.';
isValid = false;
} else if (!isValidPhoneNumber(number)) {
numberError.innerHTML = 'Veuillez entrer un numéro de
téléphone valide.';
isValid = false;
}
// Submit the form if all validations pass
if (isValid) {
document.getElementById('form').submit();
}
}
function isValidEmail(email) {
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
return emailRegex.test(email);
}
function isValidPhoneNumber(number) {
var numberRegex = /^[0-9]+$/;
return numberRegex.test(number);
}
</script>
</body>
</html>