<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function storeSessionVilles(Request $request)
    {
        $ville = $request->input('ville');

        // Récupère le tableau de villes de la session
        $villes = session()->get('villes', []);

        // Ajoute la ville au tableau
        $villes[] = $ville;

        // Met à jour le tableau dans la session
        session()->put('villes', $villes);

        // Retourne le tableau de villes
        return $villes;
    }

    public function accessSessionVilles(Request $request)
    {
        // Récupère le tableau de villes de la session
        $villes = session()->get('villes', []);

        // Retourne le tableau de villes
        return $villes;
    }

    public function deleteSessionVilles(Request $request)
    {
        // Supprime le tableau de villes de la session
        session()->forget('villes');

        // Retourne un message
        return 'Le tableau de villes a été supprimé de la session';
    }


    public function suppSessionVilles(Request $request)
    {
        $villeASupprimer = $request->input('ville');

        // Récupère le tableau de villes de la session
        $villes = session()->get('villes', []);

      
        
          // Supprime la ville spécifique du tableau
          $villes = array_filter($villes, function ($vill) use ($villeASupprimer) {
            return $vill !== $villeASupprimer;
        });

        // Met à jour le tableau dans la session
        session()->put('villes', $villes);

  
        // Retourne le tableau de villes
        return $villes;
    }
}
