<div class="container">
<h1>Recherche multicritères d'employés</h1>
<form method="GET" action="{{route('employes.recherche_multicriteres') }}">
@csrf
<div class="form-group">
<label for="recherche">Recherche :</label>
<input type="text" class="form-control" id="recherche"
name="recherche" placeholder="Saisissez vos critères de recherche" value="{{
isset($critereRecherche) ? $critereRecherche : '' }}">
</div>
<button type="submit" class="btn btn-primary">Rechercher</button>
</form>
<!-- Affichage des résultats de la recherche -->
@if(isset($resultats) && $resultats->count() > 0)
<h2>Résultats de la recherche :</h2>
<table class="table">
<thead>
<tr>
<th>Nom</th>
<th>Ville</th>
<th>Email</th>
<th>Date de naissance</th>
<th>Salaire</th>
<th>Motorisé</th>
</tr>
</thead>
<tbody>
@foreach($resultats as $employe)
<tr>
<td>{{ $employe->nom }}</td>
<td>{{ $employe->ville }}</td>
<td>{{ $employe->email }}</td>
<td>{{ $employe->date_naiss }}</td>
<td>{{ $employe->salaire }}</td>
<td>{{ $employe->motorise ? 'Oui' : 'Non' }}</td>
</tr>
@endforeach
</tbody>
</table>
@elseif(isset($resultats) && $resultats->count() == 0)
<p>Aucun résultat trouvé pour les critères de recherche
spécifiés.</p>
@endif
</div>
