<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactFormRequest;

class ContactUsController extends Controller
{

    public function create(): Response
    {
    return response()->view('contact-us');
    }
    public function store(ContactFormRequest $request): RedirectResponse
    {
    // get validated form data
    $validatedData = $request->validated();
    return response()->redirectToRoute('contact-us')->withErrors($request)->withInput(); // pass form data
    }


}
