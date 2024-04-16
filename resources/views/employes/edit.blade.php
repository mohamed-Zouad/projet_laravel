<h1>Modifier l'employé {{ $employe->nom }}</h1>
<form action="{{ route('employes.update', $employe->id) }}" method="post">
@csrf
@method('PUT')
<div class="form-group">
<label for="nom">Nom</label>
<input type="text" class="form-control" id="nom" name="nom"
value="{{ $employe->nom }}" required>
</div>
<div class="form-group">
<label for="ville">Ville</label>
<input type="text" class="form-control" id="ville" name="ville"
value="{{ $employe->ville }}" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email"
value="{{ $employe->email }}" required>
</div>
<div class="form-group">
<label for="date_naiss">Date de naissance</label>
<input type="date" class="form-control" id="date_naiss"
name="date_naiss" value="{{ $employe->date_naiss }}" required>
</div>
<div class="form-group">
<label for="salaire">Salaire</label>
<input type="number" class="form-control" id="salaire"
name="salaire" value="{{ $employe->salaire }}" required>
</div>
<div class="form-group">
<label for="motorise">Motorisé</label>
<input type="hidden" name="motorise" value="0"> <!-- Champ caché avec une valeur par défaut -->
<input type="checkbox" class="form-check-input" id="motorise"
name="motorise" value="1" {{ $employe->motorise ? 'checked' : '' }}>
</div>
<button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
</form>