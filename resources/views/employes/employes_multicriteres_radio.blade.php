<form action="{{ route('rechercheMulticriteres2') }}" method="POST">
@csrf <!-- Ajout du jeton CSRF -->
<div>
<label for="searchValue">Valeur à rechercher :</label>
<input type="text" id="searchValue" name="searchValue" value="{{
old('searchValue', $searchValue) }}">
<!-- Utilisation de la fonction old() pour afficher la valeur saisie
précédemment ou la valeur actuelle -->
</div>
<div>
<p>Choisissez le critère de recherche :</p>
<label>
<input type="radio" name="critere" value="nom" {{ (old('critere') === 'nom' || (!old('critere') && $critere === 'nom')) ? 'checked' : '' }}>
Nom
</label>
<label>
<input type="radio" name="critere" value="ville" {{
(old('critere') === 'ville' || (!old('critere') && $critere === 'ville')) ? 'checked' : '' }}>
Ville
</label>
<label>
<input type="radio" name="critere" value="salaire" {{
(old('critere') === 'salaire' || (!old('critere') && $critere === 'salaire')) ? 'checked' : '' }}>
Salaire
</label>
</div>
<button type="submit">Rechercher</button>
</form>

<!-- Afficher les résultats ici -->
@if(isset($employes))
@if($employes->count() > 0)
<h2>Résultats de la recherche pour "{{ $searchValue }}" dans {{
ucfirst($critere) }}</h2>
<ul>
@foreach($employes as $employe)
<li>{{ $employe->nom }}, {{ $employe->ville }}, {{ $employe->salaire }}</li>
@endforeach
</ul>
@else
<p>Aucun résultat trouvé pour "{{ $searchValue }}" dans {{ucfirst($critere) }}</p>
@endif
@endif


