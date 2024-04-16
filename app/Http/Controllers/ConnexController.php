<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexController extends Controller
{
    public function verif_login(Request $request)
    {
        $user=$request->input("user");
        $pwd=$request->input("pwd");
        if($user=="u1" && $pwd=="123"){
        session()->put("login","ok");
        echo "welcome you are logged successfully";}
        else echo "login ou mot de pass invalide!!";
    }
    public function deconnexion()
    {
        Session::flush();
         // Efface toutes les données de session

         return redirect()->route('welcome');
          // Redirige vers la page d'accueil
    }
}

