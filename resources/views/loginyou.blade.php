<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
</head>
<body>
<h1>Login Form</h1>
<form method="post" action="/loginyou">
@csrf
<label for="NUser">Nom d'utilisateur :</label>
<input type="NUser" id="NUser" name="NUser" required>
<br/>
<label for="Mpasse">Mot de passe :</label>
<input type="Mpasse" id="Mpasse" name="Mpasse" required>
<br/>
<button type="submit">Se connecter</button>
</form>
@if(session('login'))
    <p style="color:red;">{{ session('login') }}</p>
@endif
</body>
</html>