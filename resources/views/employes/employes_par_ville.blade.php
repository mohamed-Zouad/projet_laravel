<!-- <div class="container">
<h1>Recherche d'employés par ville</h1>
<form method="GET" action="{{ route('employes.recherche_par_ville')}}">
@csrf
<div class="form-group">
<label for="ville">Ville :</label>
<input type="text" class="form-control" id="ville" name="ville" placeholder="Entrez une ville" value="{{ request()->input('ville') }}">
</div>
<button type="submit" class="btn btn-primary">Rechercher</button>
</form>
<br>
@if(isset($employesParVille))
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
@foreach($employesParVille as $employe)
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
@endif
</div> -->


<div class="container">
<h1>Recherche d'employés par ville</h1>
<form method="GET" action="{{ route('employes.recherche_par_ville')}}">
@csrf
<div class="form-group">
<label for="ville">Ville :</label>
<!-- Affichage des villes dans une liste déroulante -->
<select class="form-control" id="ville" name="ville">
<option value="">Sélectionnez une ville</option>
@foreach($villes as $ville)
<!-- Ajout de l'attribut 'selected' si la valeur
correspond à la valeur précédemment sélectionnée -->
<option value="{{ $ville }}" {{ request()->input('ville') == $ville ? 'selected' : '' }} > {{ $ville }}</option>
@endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Rechercher</button>
</form>
<!-- Affichage des résultats de la recherche -->
@if(isset($employesParVille) && $employesParVille->count() > 0)
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
@foreach($employesParVille as $employe)
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
@elseif(isset($employesParVille) && $employesParVille->count() == 0)
<p>Aucun employé trouvé pour la ville sélectionnée.</p>
@endif
</div>