@extends('layout')
@section('title', 'Page Personnalisée')
@section('header')
<h2>En-tête personnalisé</h2>
@endsection
@section('content')
<p>Contenu de la page personnalisée...</p>
@endsection
@section('footer')
@parent
<p>Contactez-nous à info@monsite.com</p>
@endsection