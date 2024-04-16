<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compétences de l'employé</title>
</head>
<body>
<h1>Compétences de l'employé</h1>
@if ($competences->isEmpty())
<p>Aucune compétence n'est disponible pour cet employé.</p>
@else
<ul>
@foreach ($competences as $competence)
<li>{{ $competence->nom_competence }}</li>
@endforeach
</ul>
@endif
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compétences de {{ $employe->nom }}</title>
</head>

<body>
<h1>Compétences de {{ $employe->nom }} </h1>
@if ($competences->isEmpty())
<p>Aucune compétence n'est disponible pour cet employé.</p>
@else
<ul>
@foreach ($competences as $competence)
<li>{{ $competence->nom_competence }} -niveau : {{$competence-pivot niveau}}</li>
<form action="{{ route('employes.retirer', ['employe' =>
$employe, 'competence' => $competence]) }}" method="post">
@csrf
@method('DELETE')

<button type="submit" onclick="confirmDelete()">Retirer</button>

</form>
@endforeach
</ul>
@endif



<h2>Affecter une nouvelle compétence à cet employé :</h2>

<form action="{{ route('employes.affecter', $employe) }}" method="post">
@csrf
<label for="competence_id">Sélectionner une compétence :</label>
<select name="competence_id" id="competence_id">
@foreach ($competencesDisponibles as $competenceDisponible)
<option value="{{ $competenceDisponible->id }}">{{
$competenceDisponible->nom_competence }}</option>
@endforeach
</select>
<br>
<label for="niveau">Niveau :</label><br>
<input type="radio" id="debutant" name="niveau" value="Débutant">
<label for="debutant">Débutant</label><br>
<input type="radio" id="intermediaire" name="niveau"
value="Intermédiaire">
<label for="intermediaire">Intermédiaire</label><br>
<input type="radio" id="avance" name="niveau" value="Avancé">
<label for="avance">Avancé</label><br>
<button type="submit">Affecter</button>
</form>


</body>
</html>
