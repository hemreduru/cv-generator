<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body class="hold-transition login-page">
<div class="login-box">
    @yield('content')
</div>

@include('layouts.scripts')
</body>
</html>
