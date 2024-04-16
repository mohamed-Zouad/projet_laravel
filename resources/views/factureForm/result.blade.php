<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Résultat</title>
</head>
<body>
<h1>Formulaire</h1>
<h1>Résultat du calcul :</h1>
<p>Total de la facture : {{ $prix*$qte}}.</p>
<p>Montant de la remise appliquée : {{ $remise}}.</p>
<p>Total avec la remise : {{ $prixFinal}}.</p>
</body>
</html>