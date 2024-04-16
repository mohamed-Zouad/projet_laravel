<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
{
    return view('infos1');
}
    public function store(Request $request)
{
    return 'Le nom est ' . $request->input('nom');
}
}
