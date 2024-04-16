<form action="{{ route('register') }}" method="post">
@csrf
<label for="invitation_code">Code d'invitation:</label>
<input type="text" name="invitation_code" id="invitation_code" required>
@error('invitation_code')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<!-- Autres champs et bouton de soumission ici -->
<button type="submit">S'inscrire</button>
</form>