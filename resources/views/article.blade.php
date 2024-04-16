c'est l'article n {{$numero}}
Résultat : {{$hello}}
@if (isset($hello1))
    .<p>$hello1<p>
@endif
<?php
// Simuler des données de produits (tableau simple)
$produits = ['Produit A', 'Produit B', 'Produit C'];
?>

@if (count($produits) === 0)
    <p>Il n'y a présentement aucun produit.</p>
    <div><a class="stylebouton" href="{{ route('produits.create') }}">Ajouter</a></div>
@else
    <!-- Code à exécuter si des produits sont présents -->
    <ul>
        @foreach($produits as $produit)
            <li>{{ $produit }}</li>
        @endforeach
    </ul>
@endif
