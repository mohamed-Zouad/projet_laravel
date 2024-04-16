<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
</head>
<body>
<h1>Contact Form</h1>
<form method="post" action="/contact">
@csrf
<label for="nom">Nom :</label>
<input type="text" id="nom" name="nom" required>
<br/>
<label for="email">Email :</label>
<input type="email" id="email" name="email" required>
<br/>
<label>Genre :</label>
<label for="homme">Homme</label>
<input type="radio" id="homme" name="genre" value="homme" required>
<label for="femme">Femme</label>
<input type="radio" id="femme" name="genre" value="femme" required>
<label for="autre">Autre</label>
<input type="radio" id="autre" name="genre" value="autre" required>
<br/>
<label>Intérêts :</label>
<label for="football">Football</label>
<input type="checkbox" id="football" name="interets[]"
value="football">
<label for="basketball">Basketball</label>
<input type="checkbox" id="basketball" name="interets[]"
value="basketball">
<label for="tennis">Tennis</label>
<input type="checkbox" id="tennis" name="interets[]" value="tennis">
<label for="autreInteret">Autre</label>
<input type="checkbox" id="autreInteret" name="interets[]"
value="autre">
<br/>
<label for="pays">Pays :</label>
<select id="pays" name="pays" required>
<option value="maroc">Maroc</option>
<option value="france">France</option>
<option value="canada">Canada</option>
<option value="usa">États-Unis</option>
<!-- Ajoutez d'autres options selon vos besoins -->
</select>
<br/>
<label for="message">Message :</label>
<textarea id="message" name="message" required></textarea>
<br/>
<button type="submit">Envoyer</button>
</form>
@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif
<h1>Contact Form</h1>
<!-- Affichez les données récupérées -->
<p>Nom: {{ session('nom') }}</p>
<p>Email: {{ session('email') }}</p>
<p>Genre: {{ session('genre') }}</p>
<p>Intérêts: {{ implode(', ', session('interets', [])) }}</p>
<p>Pays: {{ session('pays') }}</p>
<p>Message: {{ session('message') }}</p>
</body>
</html>




