<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<form action="{{ url('form-inscription') }}" method="POST">
@csrf
<h2>Confirmation de mot de passe</h2>
<div class="form-group row">
<label for="password" class="col-md-2 col-form-label text-mdright">Password</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control
@error('password') is-invalid @enderror" name="password" required
autocomplete="current-password">
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="form-group row">
<label for="password" class="col-md-2 col-form-label text-mdright">Confirm Password</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control
@error('password') is-invalid @enderror" name="password_confirmation" required
autocomplete="current-password">
</div>
</div>
<div class="form-group row">
<div class="col-md-5 text-center">
<input type="submit" value="Envoyer !" class="btn btn-primary">
</div>
</div>
</form>
<ul class="error">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
{{session('success')}}
    
</body>
</html>