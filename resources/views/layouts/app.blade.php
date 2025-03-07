<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no">
@include('layouts.head')
@stack('head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Header / Navbar -->
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')
</div>
<!-- ./wrapper -->

@include('layouts.scripts')
<!-- Ekstra scriptler eklemek için stack -->
@yield('scripts')
</body>
</html>
