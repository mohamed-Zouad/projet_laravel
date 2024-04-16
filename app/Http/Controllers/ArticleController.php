<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Rules\ArticleValidationRule;
class ArticleController extends Controller{
public function create(){
    $types = ['blog', 'news'];
    return view('articles.create', compact('types'));
    }
    public function store(Request $request)
    {
    $request->validate([
    'type' => ['required', 'in:blog,news', new ArticleValidationRule],
    'title' => 'required|string|max:255',
    'content' => 'required|string',
    'blog_field' => 'required_if:type,blog',
    'news_field' => 'required_if:type,news',
    ]);
    // Aucune logique d'enregistrement ici, car vous ne souhaitez pas utiliser de modèle ni de base de données
    // Enregistrez les données dans la session
    $request->session()->flash('article_data', $request->all());
    return view('articles.index');
    }}
