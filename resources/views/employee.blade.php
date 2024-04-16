<form method="post" action="{{ route('calculateSalary') }}">
@csrf
<label for="nom">Nom :</label>
<input type="text" name="nom" id="nom" value="{{ old('nom') }}" required>
<br><br>
<label for="prenom">Prénom :</label>
<input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" required>
<br><br>
<label for="Salaire_base">Salaire de base :</label>
<input type="number" name="Salaire_base" id="Salaire_base" value="{{ old('Salaire_base') }}" required>
<br><br>
<label for="Heures_travaillées">Heures travaillées :</label>
<input type="number" name="Heures_travaillées" id="Heures_travaillées" value="{{old('Heures_travaillées') }}" required>
<br><br>
<label for="Taux_horaire">Taux horaire :</label>
<input type="number" name="Taux_horaire" id="Taux_horaire" value="{{old('Taux_horaire') }}" required>
<br><br>
<button type="submit">Calculer salaire</button>
</form>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif