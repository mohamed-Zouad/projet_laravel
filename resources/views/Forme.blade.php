<form method="post" action="{{ route('store') }}">
@csrf
<label for="nom">Nom :</label>
<input type="text" name="nom" id="nom" value="{{ old('nom') }}" required>
<br><br>
<label for="ville">Ville :</label>
<input type="text" name="ville" id="ville" value="{{ old('ville') }}" required>
<br><br>
<label for="email">Email :</label>
<input type="email" name="email" id="email" value="{{ old('email') }}" required>
<br><br>
<label for="telephone">Téléphone :</label>
<input type="text" name="telephone" id="telephone" value="{{old('telephone') }}" required>
<br><br>
<label for="code_postal">Code Postal :</label>
<input type="text" name="code_postal" id="code_postal" value="{{old('code_postal') }}" required>
<br><br>
<label for="date_naissance">Date de naissance : </label>
<input type="date" name="date_naissance" id="date_naissance" value="{{old('date_naissance') }}" required>
<br><br>
<label for="password">Password : </label>
<input type="password" name="password" id="password" value="{{old('password') }}" required>
<br><br>
<label for="image">Choisir une image : </label>
<input type="file" name="image" id="image" value="{{old('image') }}" required>
<br><br>
<button type="submit">Soumettre</button>
</form>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif