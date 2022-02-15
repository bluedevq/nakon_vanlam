<nav class="navbar navbar-expand-lg navbar-dark top-menu">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="navbar-collapse hide not-active">
            @php $currentRoute = Route::currentRouteName(); @endphp
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $currentRoute == 'dashboard.index' ? 'active' : '' }}" href="{{ route('dashboard.index') }}"><span class="fas fa-home">&nbsp;</span>Trang chủ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
