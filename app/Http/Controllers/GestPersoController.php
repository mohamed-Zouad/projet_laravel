<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestPersoController extends Controller
{
    private $pers= array();

    public function __construct()
   {
       $this->pers['100']='alami';
       $this->pers['101']='alaoui';
       $this->pers['102']='partner';
       $this->pers['103']='souidi';
        }

    public function index ()
        {
        foreach ($this->pers  as $key => $value)
                 {
                     echo $key." ".$value;
                     echo "</br>";
                 }
             }

     public function  rechercher( $mat){
     if (array_key_exists($mat, $this->pers)) {
                    echo  'nom=<strong>'.$this->pers[$mat].'</strong>' ;
    } else {
    echo "Matricule introuvable!";
    }
    }
}  
   