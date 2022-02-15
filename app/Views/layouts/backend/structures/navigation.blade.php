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
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"><span>Xin chào&nbsp;</span><span class="text-info">{{ backendGuard()->user()->name }}</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="document.getElementById('form-logout').submit();"><span class="fas fa-sign-out-alt">&nbsp;</span>Đăng xuất</a>
                </li>
                <form id="form-logout" method="post" action="{{ route('backend.logout') }}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>
