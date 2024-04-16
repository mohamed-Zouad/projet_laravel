<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    
        // public function validerMotDePasse(Request $request)
        // {
        //     // Règles de validation
        //     $rules = [
        //         'password' => 'required|min:8|confirmed', // Le champ 'password_confirmation' doit correspondre à 'password'
        //     ];
    
        //     // Messages d'erreur personnalisés
        //     $messages = [
        //         'password.required' => 'Le champ mot de passe est requis.',
        //         'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
        //         'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        //     ];
    
        //     // Validation
        //     $validator = Validator::make($request->all(), $rules, $messages);
    
        //     // Vérification de la validation
        //     if ($validator->fails()) {
        //         return redirect('form-inscription')
        //             ->withErrors($validator)
        //             ->withInput();
        //     }
    
        //     // Si la validation réussit, le code ici est exécuté
    
        //     return redirect('form-inscription')->with('success', 'Mot de passe confirmé avec succès !');
        // }
        public function validerMotDePasse(Request $request)
    {
        // Validation
        $request->validate([
            'password' => 'required|min:8|confirmed', // Le champ 'password_confirmation' doit correspondre à 'password'
        ], [
            'password.required' => 'Le champ mot de passe est requis.',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);

        // Si la validation réussit, le code ici est exécuté

        return redirect('form-inscription')->with('success', 'Mot de passe confirmé avec succès !');
    }
    

}
