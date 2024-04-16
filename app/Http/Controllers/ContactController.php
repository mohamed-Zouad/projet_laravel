<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function showForm()
    {
    return view('contact');
    }
    public function submitForm(Request $request)
    {
    // Récupération des données du formulaire
    $nom = $request->input('nom');
    $email = $request->input('email');
    $genre = $request->input('genre');
    $interets = $request->input('interets');
    $pays = $request->input('pays');
    $message = $request->input('message');
    // Vous pouvez maintenant utiliser ces variables comme bon vous semble dans votre traitement
    // Redirection vers la page de contact avec les données
    return redirect('/contact')->with([
    'nom' => $nom,
    'email' => $email,
    'genre' => $genre,
    'interets' => $interets,
    'pays' => $pays,
    'message' => $message,
    'success' => 'Formulaire soumis avec succès!'
    ]);
    }



}
