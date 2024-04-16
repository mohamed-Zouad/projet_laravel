<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($nom)
    {
        return 'salut '.$nom;
    }

}
