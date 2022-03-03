<header role="header" class="header">
    <div class="container flex align-items-center">
        <div class="header-title">
            <a href="{{ public_url('/admin') }}"><img src="{{ public_url('imgs/logo.jpg') }}" width="100"></a>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.index') }}"><span class="fas fa-warehouse">&nbsp;</span>Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}"><span class="fas fa-list">&nbsp;</span>Danh mục sản phẩm</a>
            </li>
        </ul>
        <div class="header-user-name">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"><span>Xin chào&nbsp;</span><span class="text-info">{{ backendGuard()->user()->name }}</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="document.getElementById('form-logout').submit();"><span class="fas fa-sign-in-alt">&nbsp;</span>Đăng xuất</a>
                </li>
                <form id="form-logout" method="post" action="{{ route('backend.logout') }}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</header>
