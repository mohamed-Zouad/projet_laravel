<style>
.error-message {
color: red;
}
</style>
<div class="container">
<h1>Create Product</h1>
@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
@if($errors->any())
<div class="alert alert-danger">
<ul class="error-message">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="POST" action="{{ route('products.store') }}">
@csrf
<div class="form-group">
<label for="number">Product Number:</label>
<input type="text" name="number" class="form-control"
value="{{ old('number') }}" >
</div>
<div class="form-group">
<label for="detail">Product Detail:</label>
<textarea name="detail" class="form-control" >{{ old('detail')
}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Create
Product</button>
</form>
</div>