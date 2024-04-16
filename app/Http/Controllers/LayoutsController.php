<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function showPage()
{
    $isAdmin = true;
    return view('pages.Page')->with('isAdmin', $isAdmin);
}
}
