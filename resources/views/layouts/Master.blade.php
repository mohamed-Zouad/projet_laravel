<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
</head>
<body>
@if($isAdmin)
@include('layouts.admin_header')
@else
@include('layouts.user_header')
@endif
<div class="content">
@yield('content')
</div>
@include('layouts.footer')
</body>
</html>