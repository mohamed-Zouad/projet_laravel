<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaireController extends Controller
{
    public function validateSalaryForm(Request $request)
{
$rules = [
'nom' => 'required|string|max:255',
'prenom' => 'required|string|max:255',
'Salaire_base' => 'required|integer|min:0',
'Heures_travaillées' => 'required|integer|min:0',
'Taux_horaire' => 'required|integer|min:0',
];
$this->validate($request, $rules);
}

public function calculateSalary(Request $request)
{
$this->validateSalaryForm($request);

        $Salaire_base =$request->input('Salaire_base');
        $Heures_travaillées =$request->input('Heures_travaillées');
        $Taux_horaire =$request->input('Taux_horaire');

        $salaire =$Salaire_base+ $Heures_travaillées * $Taux_horaire;

    return view('result')->with([
    'nom' => $request->input('nom'),
    'prenom' => $request->input('prenom'),
    'Salaire_base' => $request->input('Salaire_base'),
    'Heures_travaillées' => $request->input('Heures_travaillées'),
    'Taux_horaire' => $request->input('Taux_horaire'),
    'salaire'=>$salaire,
]);
} 

}
