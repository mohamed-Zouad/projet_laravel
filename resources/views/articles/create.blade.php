<h1>Création d'un article</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('articles.store') }}" method="post">
@csrf
<label for="type">Type d'article</label>
<select name="type" id="type">
<option value="blog" {{ old('type') == 'blog' ? 'selected' : ''}}>Blog</option>
<option value="news" {{ old('type') == 'news' ? 'selected' : ''}}>Actualité</option>
</select>
<label for="title">Titre</label>
<input type="text" name="title" id="title" value="{{ old('title') }}">
<label for="content">Contenu</label>
<textarea name="content" id="content">{{ old('content') }}</textarea>
<div id="blog_fields" style="display: {{ old('type') == 'blog' ? 'block' :
'none' }}">
<!-- Champs spécifiques pour les articles de blog -->
<label for="blog_field">Champ spécifique au blog</label>
<input type="text" name="blog_field" id="blog_field" value="{{
old('blog_field') }}">
</div>
<div id="news_fields" style="display: {{ old('type') == 'news' ? 'block' :
'none' }}">
<!-- Champs spécifiques pour les actualités -->
<label for="news_field">Champ spécifique aux actualités</label>
<input type="text" name="news_field" id="news_field" value="{{
old('news_field') }}">
</div>
<button type="submit">Créer l'article</button>
</form>
<script>
const typeSelect = document.getElementById('type');
const blogFields = document.getElementById('blog_fields');
const newsFields = document.getElementById('news_fields');
// Afficher les champs spécifiques au blog par défaut
blogFields.style.display = typeSelect.value === 'blog' ? 'block' : 'none';
typeSelect.addEventListener('change', () => {
if (typeSelect.value === 'blog') {
blogFields.style.display = 'block';
newsFields.style.display = 'none';
} else if (typeSelect.value === 'news') {
blogFields.style.display = 'none';
newsFields.style.display = 'block';
} else {
blogFields.style.display = 'none';
newsFields.style.display = 'none';
}
});
</script>