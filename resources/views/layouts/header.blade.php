<!-- layouts/header.blade.php -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">@lang('Common.dashboard')</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form action="{{ route('changeLanguage')}}" method="POST">
                @csrf
                <input type="hidden" value="en" name="lang">
                <button type="submit" class="btn btn-link">
                    <img src="{{ asset('assets/icons/united-kingdom.png') }}" height="20" alt="en" />
                </button>
            </form>
        </li>
        <li class="nav-item">
            <form action="{{ route('changeLanguage')}}" method="POST">
                @csrf
                <input type="hidden" value="tr" name="lang">
                <button type="submit" class="btn btn-link"><img src="{{ asset('assets/icons/turkey.png') }}" height="20" alt="tr" /> </button>
            </form>
        </li>
        <li class="nav-item d-flex align-items-center text-muted">
            <span>@lang('Common.welcome'), {{ Auth::user()->name }}</span>
        </li>
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-danger"></i> @lang('Common.logout')
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>


</nav>
