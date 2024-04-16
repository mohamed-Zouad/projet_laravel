<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureFormController extends Controller
{

    public function form()
    {
        return view('factureForm.form');
    }

    public function calculerP(Request $request)
    {
        $qte = $request->input('qte');
        $prix = $request->input('prix');
        $remiseT = $request->input('remiseT')?"Pourcentage":"montant";
        $remise = $request->input('remise'); // Appliquer une remise de 10% si la case est cochée
        if($remiseT=="Pourcentage"){
            $prixFinal=$prix*$qte-$remise;
        }
        else{
            $prixFinal=$prix*$qte-($prix*$remise/100);
        }

        return view('factureForm.result', ['prix'=>$prix,"qte"=>$qte,'remise'=>$remise,'prixFinal' =>$prixFinal]);
    }
}
