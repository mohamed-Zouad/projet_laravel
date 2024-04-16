<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showForm()
    {
    return view('loginyou');
    }
    public function submitForm(Request $request)
    {
    // Récupération des données du formulaire
    $NUser = $request->input('NUser');
    $Mpasse = $request->input('Mpasse');
    if($NUser=="u1" && $Mpasse=="123"){
        session()->put("login","");
        return redirect('/moncompte');
    }
        else{session()->put("login","Nom d'utilisateur ou mot de passe incorrects!");
            return redirect('/erreur');
        } 
    // Redirection vers la page de contact avec les données
    return redirect('/loginyou')->with([
        'NUser' => $NUser,
        'Mpasse' => $Mpasse
    ]);
    }
}
