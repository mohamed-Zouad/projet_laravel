<style>
.employee-table {
border-collapse: collapse;
width: 100%;
}
.employee-table th,
.employee-table td {
border: 1px solid #000;
padding: 8px;
text-align: left;
}
.employee-table th {
background-color: #f2f2f2;
}
</style>
<h1>Liste des employés</h1>
<table class="employee-table">
<thead>
<tr>
<th>Nom</th>
<th>Ville</th>
<th>Date de naissance</th>
<th>Email</th>
<th>Salaire</th>
<th>Motorisé</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
@foreach ($employes as $employe)
<tr>
<td>{{ $employe->nom }}</td>
<td>{{ $employe->ville }}</td>
<td>{{ $employe->date_naiss }}</td>
<td>{{ $employe->email }}</td>
<td>{{ $employe->salaire }}</td>
<td>{{ $employe->motorise ? 'Oui' : 'Non' }}</td>
<td>
<a href="{{ route('employes.show', $employe) }}">Voir</a>
<a href="{{ route('employes.edit', $employe) }}">Modifier</a>
<a href="#" onclick="confirmDelete('{{ $employe->id }}')">Supprimer</a>
<form id="delete-form-{{ $employe->id }}" action="{{route('employes.destroy', $employe) }}" method="POST" style="display: none;">
@csrf
@method('DELETE')
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<a href="{{ route('employes.create') }}">Créer un nouvel employé</a>
<p>Version : {{ env('APP_VERSION') }}</p>
<script>
function confirmDelete(id) {
if (confirm("Êtes-vous sûr de vouloir supprimer cet employé?")) {
event.preventDefault();
document.getElementById('delete-form-' + id).submit();
}
}
</script>

