<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
    //
    public function showForm()
    {
        return view('calcul_imc');
    }

    public function calculateIMC(Request $request)
    {
        

        // Récupération des données du formulaire
        $poids =$request->input('poids');
        $taille =$request->input('taille');

        // Calcul de l'IMC
        $imc =$poids/($taille * $taille);

        // Redirection vers la page du formulaire avec l'IMC
          return redirect('/calcul_imc')->with("imc",$imc);
         
    }
}
