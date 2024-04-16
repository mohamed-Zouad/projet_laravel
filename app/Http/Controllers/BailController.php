<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BailController extends Controller
{
    public function create()
{
return view('products.create');
}
public function store(Request $request)
{
// Validation des données du formulaire
$request->validate([
'number' => 'bail|required|integer|min:3|max:10|different:detail',
'detail' => 'required',
]);
// Création du produit sans utiliser de modèle
$productData = [
'number' => $request->input('number'),
'detail' => $request->input('detail'),
// Ajoutez d'autres champs si nécessaire
];
// Enregistrement du produit (vous pouvez le stocker dans un tableau, une base de données, etc.)
// Dans cet exemple, nous stockons le produit dans une variable de session
session(['product' => $productData]);
return redirect()->route('products.create')->with('success', 'Product created successfully.');
}
}
