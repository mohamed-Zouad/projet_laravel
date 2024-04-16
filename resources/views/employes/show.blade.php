@section('content')
<h1>Détails de l'employé {{ $employe->nom }}</h1>
<ul>
<li>Nom: {{ $employe->nom }}</li>
<li>Ville: {{ $employe->ville }}</li>
<li>Date de naissance: {{ $employe->date_naiss }}</li>
<li>Email: {{ $employe->email }}</li>
<li>Salaire: {{ $employe->salaire }}</li>
<li>Motorisé: {{ $employe->motorise ? 'Oui' : 'Non' }}</li>
</ul>
<a href="{{ route('employes.edit', $employe) }}">Modifier</a>
