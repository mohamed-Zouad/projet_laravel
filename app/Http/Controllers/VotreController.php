<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\InvitationCodeRule;

class VotreController extends Controller
{
    public function register(Request $request)
{
$request->validate([
'invitation_code' => ['required', new InvitationCodeRule],
// Ajoutez d'autres règles de validation selon vos besoins
]);
// Logique pour l'inscription si la validation réussit
}
public function showRegistrationForm()
{
return view('register');
}
}
