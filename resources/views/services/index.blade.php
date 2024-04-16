<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des services</title>
</head>
<body>
<h1>Liste des services</h1>
<ul>
@foreach ($services as $service)
<li><a href="{{ route('services.employees', $service->id) }}">{{
$service->nom_service }}</a></li>
@endforeach
</ul>
</body>
</html>