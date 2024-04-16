
<h1>Création d'un nouvel employé</h1>
<form action="{{ route('employes.store') }}" method="post">
@csrf
<div class="form-group">
<label for="nom">Nom</label>
<input type="text" class="form-control" id="nom" name="nom"
required>
</div>
<div class="form-group">
<label for="ville">Ville</label>
<input type="text" class="form-control" id="ville" name="ville"
required>
</div>
<div class="form-group">
<label for="date_naiss">Date de naissance</label>
<input type="date" class="form-control" id="date_naiss"
name="date_naiss" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email"
required>
</div>
<div class="form-group">
<label for="salaire">Salaire</label>
<input type="number" class="form-control" id="salaire"
name="salaire" required>
</div>
<div class="form-group">
<label for="motorise">Motorisé</label>
<input type="hidden" name="motorise" value="0"> <!-- Ajoutez ce
champ caché pour représenter la case non cochée -->
<input type="checkbox" class="form-check-input" id="motorise"
name="motorise" value="1"> <!-- La valeur envoyée sera 1 si la case est cochée
-->
</div>
<button type="submit" class="btn btn-primary">Créer</button>
</form>
