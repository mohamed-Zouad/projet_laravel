<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Validation de formulaire côté client en utilisant les attributs
HTML5 dans Laravel 9</title>
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
<h2>Validation de formulaire côté client en utilisant les attributs
HTML5 dans Laravel </h2>
<form id="form" method="post" action="#">
<div class="form-group">
<label for="name">Nom :</label>
<input type="text" id="name" name="name" required>
<span class="error-message"></span>
</div>
<div class="form-group">
<label for="email">Email :</label>
<input type="email" id="email" name="email" required>
<span class="error-message"></span>
</div>
<div class="form-group">
<label for="number">Numéro de téléphone :</label>
<input type="tel" id="number" name="number" required
pattern="[0-9]{10}">
<span class="error-message"></span>
</div>
<div class="form-group">
<button type="submit">Soumettre</button>
</div>
</form>
</div>
</body>
</html>