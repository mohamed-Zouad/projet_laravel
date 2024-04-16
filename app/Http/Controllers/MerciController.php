<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerciController extends Controller
{
    //
    public function showForm()
    {
        return view('contacts.form');
    }

    public function submitForm(Request $request)
    {
        // Traitement des données du formulaire ici
        $data = $request->all();

        // Affichage d'une page de remerciements
        return view('contacts.result', compact('data'));
    }
}
