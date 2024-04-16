<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'IMC</title>
</head>
<body>
    <h1>Calcul de l'Indice de Masse Corporelle (IMC)</h1>

    @if(session('imc'))
        <p>Votre IMC est : {{ session('imc') }}</p>
    @endif

    <form method="post" action="/calcul_imc">
        @csrf

        <label for="poids">Poids (en kilogrammes):</label>
        <input type="number" step="0.1" id="poids" name="poids" required>
        <br/>

        <label for="taille">Taille (en mètres):</label>
        <input type="number" step="0.01" id="taille" name="taille" required>
        <br/>

        <button type="submit">Calculer l'IMC</button>
    </form>
</body>


</html>