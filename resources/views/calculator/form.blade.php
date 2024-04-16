<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculator Form</title>
</head>
<body>
<h1>Calculator Form</h1>
<form method="post" action="{{ route('calculator.calculate') }}">
@csrf
<label for="nombre1">Nombre 1 :</label>
<input type="text" id="nombre1" name="nombre1" required>&nbsp;&nbsp;&nbsp;&nbsp;
<label> +  </label>&nbsp;&nbsp;&nbsp;&nbsp;
<label for="nombre2">Nombre 2 :</label>
<input type="text" id="nombre2" name="nombre2" required>
<button type="submit">Calculer</button>
</form>
</body>
</html>