<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('facture.resultat') }}" method="post">
    @csrf
    <label for="prix">Prix :</label>
    <input type="text" name="prix" id="prix" required>

    <br>

    <label>
        <input type="checkbox" name="remise"> Appliquer une remise de 20%
    </label>

    <br>

    <button type="submit">Calculer Prix</button>
</form>
</body>
</html>
