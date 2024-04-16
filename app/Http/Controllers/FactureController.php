<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {
        return view('facture.index');
    }

    public function calculerPrix(Request $request)
    {
        $prix = $request->input('prix');
        $remise = $request->has('remise') ? 0.8 : 1; // Appliquer une remise de 10% si la case est cochée
        $prixFinal = $prix * $remise;

        return view('facture.resultat', ['prixFinal' => $prixFinal]);
    }
}
