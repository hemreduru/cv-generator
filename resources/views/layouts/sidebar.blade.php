<!-- layouts/sidebar.blade.php -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light d-flex justify-content-center"><img style="max-width: 150px"  src="{{ asset('assets/img/quickcv-logo.png') }}" alt="logo"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>@lang('Common.dashboard')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal-information.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>@lang('Common.personal_information')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>@lang('Common.settings')</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
