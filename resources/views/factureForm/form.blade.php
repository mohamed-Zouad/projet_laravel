<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('factureForm.result') }}" method="post">
    @csrf

    <h1>Formule de facturation</h1>
    <label for="qte">Quantité d'articles :</label>
    <input type="number" name="qte" id="qte" required>
    <br>

    <label for="prix">Prix unitaire d'un article :</label>
    <input type="number" name="prix" id="prix" required>

    <br>
    <label for="remiseT">Type de remise :
    <input type="radio" name="remiseT" id="Pourcentage" required>
    <label for="Pourcentage">Pourcentage</label>
    <input type="radio" name="remiseT" id="montant" required>
    <label for="montant">Montant fixe</label>
    </label>
    <br>
    <label>Montant de remise :
        <input type="number" name="remise">
    </label>
    <br>

    <button type="submit">Calculer la facture</button>
</form>
</body>
</html>