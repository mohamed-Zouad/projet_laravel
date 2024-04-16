<div class="alert alert-{{ $type }}">
    {{ $slot }}
</div>

@once
    <!-- Inclure Bootstrap localement si ce n'est pas déjà inclus -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
@endonce