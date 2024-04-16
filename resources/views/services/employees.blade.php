<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employés du service {{ $service->nom_service }}</title>
</head>
<body>
<h1>Employés du service {{ $service->nom_service }}</h1>
@if ($employes !== null && $employes->isNotEmpty())
<ul>
@foreach ($employes as $employe)
<li>{{ $employe->nom }}, {{ $employe->ville }}</li>
@endforeach
</ul>
@else
<p>Aucun employé trouvé pour ce service.</p>
@endif
</body>
</html>