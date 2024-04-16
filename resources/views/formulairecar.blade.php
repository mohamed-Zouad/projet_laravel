<form method="post" action="{{ route('store') }}">
@csrf
<label for="code">Code : </label>
<input type="text" name="code" id="code" value="{{ old('code') }}" required>
<br><br>
<label for="marque">Marque : </label>
<input type="text" name="marque" id="marque" value="{{ old('marque') }}" required>
<br><br>
<label for="capacite">Capacite : </label>
<input type="text" name="capacite" id="capacite" value="{{ old('capacite') }}" required>
<br><br>
<label for="km">Km :</label>
<input type="number" name="km" id="km" value="{{old('km') }}" required>
<br><br>
<label for="dateachat">Date d'achat : </label>
<input type="date" name="dateachat" id="dateachat" value="{{old('dateachat') }}" required>
<br><br>
<label>Type car :</label>
<label for="urbain">urbain</label>
<input type="checkbox" id="urbain" name="Type[]" value="urbain">
<label for="interurbain">interurbain</label>
<input type="checkbox" id="interurbain" name="Type[]" value="interurbain">
<label for="touristique">Tennis</label>
<input type="checkbox" id="touristique" name="Type[]" value="touristique">
<br><br>
<!-- <label for="image">Choisir une image : </label>
<input type="file" name="image" id="image" value="{{old('image') }}" required>
<br><br> -->
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