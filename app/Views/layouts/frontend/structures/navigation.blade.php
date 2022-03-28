<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="inspire-responsive-nav inspire-fixed-nav" style="z-index: 1000;">
        <div class="container">
            <div class="inspire-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home.index') }}"> <img src="{{ public_url('/imgs/logo.jpg') }}" alt="logo" width="137" height="46"> </a>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div class="inspire-nav inspire-fixed-nav" style="z-index: 1000;">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home.index') }}"> <img src="{{ public_url('/imgs/logo.jpg') }}" alt="logo" width="137" height="46"> </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('about.index') }}" class="nav-link">Thông tin về chúng tôi</a></li>
                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Các dịch vụ <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="services.html" class="nav-link">Services 1</a></li>
                                <li class="nav-item"><a href="services-2.html" class="nav-link">Services 2</a></li>
                                <li class="nav-item"><a href="services-3.html" class="nav-link">Services 3</a></li>
                                <li class="nav-item"><a href="single-services.html" class="nav-link">Services
                                        Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('contact.index') }}" class="nav-link">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div></div>
</div>
<!-- End Navbar Area -->
