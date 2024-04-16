<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function ajouter(): Response
    {
    return response()->view('formulaire');
    }
    public function validateForm(Request $request)
{
$rules = [
'nom' => 'required|string|max:255',
'ville' => 'required|string|max:255',
'email' => 'required|email|max:255',
'telephone' => 'required|string|max:20',
'code_postal' => 'required|string|max:10',
'date_naissance' => 'required|date',
'password' => 'required|min:8',
'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
];
$this->validate($request, $rules);
}

public function store(Request $request)
{
$this->validateForm($request);
// Le reste du code pour traiter le formulaire après la validation
// Vous pouvez enregistrer les données dans la base de données, par exemple
// Affichez les informations dans la vue
return view('showcar')->with([
'nom' => $request->input('nom'),
'ville' => $request->input('ville'),
'email' => $request->input('email'),
'telephone' => $request->input('telephone'),
'code_postal' => $request->input('code_postal'),
'date_naissance' => $request->input('date_naissance'),
'password' => $request->input('password'),
'image' => $request->input('image'),
]);
} 
}