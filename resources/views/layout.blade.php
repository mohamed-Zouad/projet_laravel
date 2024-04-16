<!-- <!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mon Site')</title>
</head>
<body>

<header>
    @yield('header')
</header>

<div class="container">
    @yield('content')
</div>
                                   
<footer>
    @yield('footer', '© 2024 Mon Site. Tous droits réservés.')
</footer> -->

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<style>
/* Add any common styles or meta tags here */
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
}
header, footer {
background-color: #0000FF;
color: #fff;
text-align: center;
padding: 10px;
}
.container {
display: flex;
}
.sidebar {
width: 20%;
background-color: #6495ED; /* Nouvelle couleur d'arrière-plan de
la barre latérale */
padding: 20px;
color: #fff;
}
.sidebar a {
color: #fff;
text-decoration: none;
}
.content {
flex: 1;
padding: 20px;
}
</style>
</head>
<body>
<header>
<h1>DD 2 web ISTA Taza</h1>
</header>
<div class="container">
<div class="sidebar">
<!-- Contenu de la barre latérale -->
<ul>
<li><a href="{{ route('home') }}">Accueil</a></li>
<li><a href="{{ route('infos') }}">Infos</a></li>
</ul>
</div>
<div class="content">
<!-- Contenu principal (modifiable par les vues) -->
@yield('content')
</div>
</div>
<footer>
<p>&copy; {{ date('Y') }} ISTA Taza</p>
</footer>
</body>
</html>
