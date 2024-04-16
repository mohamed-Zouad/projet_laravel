<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function showForm()
    {
    return view('calculator.form');
    }
    public function calculate(Request $request)
    {
    // Récupération des données du formulaire
    $nombre1 = $request->input('nombre1');
    $nombre2 = $request->input('nombre2');
    // Vérification si les deux nombres sont présents
    if ($nombre1 === null || $nombre2 === null) {
    // Gérez le cas où les nombres ne sont pas présents
    // Par exemple, vous pourriez rediriger l'utilisateur avec un message d'erreur
    return redirect('/calculator')->with('error', 'Veuillez fournir les
    deux nombres.');
    }
    // Addition des deux nombres
    $resultat = $nombre1 + $nombre2;
    // Retourne la vue avec le résultat
    return view('calculator.result', compact('resultat', 'nombre1','nombre2'));
    }


}
