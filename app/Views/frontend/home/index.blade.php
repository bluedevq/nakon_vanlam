<!DOCTYPE html>
<html lang="">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Công ty TNHH thương mại xây dựng - sản xuất nhôm kính BẢO KHÁNH</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap"
          rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ public_url('img/logo.jpg') }}">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ public_url('css/lib/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ public_url('css/frontend/assets/animate.min.css') }}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{ public_url('css/lib/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ public_url('css/lib/brands.min.css') }}">
    <link rel="stylesheet" href="{{ public_url('css/lib/solid.min.css') }}">
    <!-- flickity CSS -->
    <link rel="stylesheet" href="{{ public_url('css/lib/flickity.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ public_url('css/frontend/assets/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ public_url('css/frontend/assets/responsive.css') }}">
</head>
<body>
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="inspire-responsive-nav inspire-fixed-nav" style="z-index: 1000;">
        <div class="container">
            <div class="inspire-responsive-menu">
                <div class="logo">
                    <a href="{{ public_url('/') }}"> <img src="{{ public_url('/imgs/logo.jpg') }}" alt="logo" width="137" height="46"> </a>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div class="inspire-nav inspire-fixed-nav" style="z-index: 1000;">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ public_url('/') }}"> <img src="{{ public_url('/imgs/logo.jpg') }}" alt="logo" width="137" height="46"> </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ public_url('about') }}" class="nav-link">Thông tin về chúng tôi</a></li>
                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Các dịch vụ <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="services.html" class="nav-link">Services 1</a></li>
                                <li class="nav-item"><a href="services-2.html" class="nav-link">Services 2</a></li>
                                <li class="nav-item"><a href="services-3.html" class="nav-link">Services 3</a></li>
                                <li class="nav-item"><a href="single-services.html" class="nav-link">Services
                                        Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ public_url('contact') }}" class="nav-link">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div></div>
</div>
<!-- End Navbar Area -->
@if(!blank($sliders))
<div class="home-slider-area">
    <div class="home-slider" tabindex="0">
        <div class="main-carousel">
            @foreach($sliders as $slider)
            <div class="carousel-cell">
                <img src="{{ public_url(\Illuminate\Support\Arr::get($slider, 'image_url')) }}" alt="image">
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Home Slider Area -->
@endif
<!-- Start Home Slider Area -->
<!-- Start List Products Section -->
@if(!blank($listProducts))
    @foreach($listProducts as $productCategory => $listItems)
        @if(blank($listItems))
            @continue
        @endif
        <section class="project-section bg-grey section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>{{ \Illuminate\Support\Str::upper($productCategory) }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($listItems as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="project-item-box">
                                <a class="single-project-link" href="single-project.html">
                                    <img src="{{ public_url($item->image_url) }}" alt="image">
                                    <div class="project-link-title-box">
                                        <div class="project-link-title-inside">
                                            <div class="project-link-flip-front">
                                                <h3>{{ $item->name }}</h3>
                                            </div>
                                            <div class="project-link-flip-back">
                                                <h3>Xem thêm</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
        </section>
    @endforeach
@endif
<!-- End List Products Section -->
<!-- Start Hire Section -->
<section class="hire-area pb-100">
    <div class="container">
        <div class="hire-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hire-content position-relative z-index text-center">
                        <h2>BẢO KHÁNH</h2>
                        <h5>Công ty TNHH thương mại xây dựng - sản xuất nhôm kính</h5>
                        <a href="#0" class="btn btn-primary mt-25">Liên hệ ngay với chúng tôi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hire Section -->
<!-- Start Footer Section -->
<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 footer-box-item">
                <div class="footer-about footer-list">
                    <a class="footer-logo" href="#">
                        <img src="{{ public_url('/imgs/logo.jpg') }}" class="white-logo" alt="logo" width="137" height="46">
                    </a>
                    <p>CÔNG TY TNHH THƯƠNG MẠI
                        <br>
                        XÂY DỰNG - SẢN XUẤT NHÔM KÍNH BẢO KHÁNH
                        <br>
                        Niềm tin cho mọi công trình
                    </p>
                    <ul class="footer-social-icon">
                        <li><a href="https://www.facebook.com/lam.nguyenvan.7165"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            @if(!blank($categories))
            <div class="col-lg-2 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Các loại sản phẩm</h5>
                    <ul class="footer-nav-links">
                        @foreach($categories as $category)
                        <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="col-lg-4 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Thông tin liên hệ</h5>
                    <div class="footer-contact-info">
                        <ul class="footer-contact-list">
                            <li><span>Địa chỉ:</span> xóm Đình, thôn Hòa Mỹ, xã Hồng Minh, huyện Phú Xuyên, TP. Hà Nội.</li>
                            <li><span>SĐT:</span> <a href="tel:0912829510">0912 829 510</a></li>
                            <li><span>Email:</span> <a href="mailto:random@example.com">contact-info@example.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Section -->
<!-- Start Footer Copyright Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p>© {{ date('Y') }} - All Rights Reserved - Designed by <span class="author-name">Bluedevq.</span>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Copyright Section -->
<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->
<!-- jQuery Min JS -->
<script src="{{ public_url('js/lib/jquery.min.js') }}"></script>
<!-- Popper Min JS -->
<script src="{{ public_url('js/lib/popper.min.js') }}"></script>
<!-- Bootstrap Min JS -->
<script src="{{ public_url('js/lib/bootstrap.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ public_url('js/lib/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotope JS -->
<script src="{{ public_url('js/lib/isotope.pkgd.min.js') }}"></script>
<!-- Scroll To Fixed JS -->
<script src="{{ public_url('js/lib/jquery-scrolltofixed.js') }}"></script>
<!-- flickity JS -->
<script src="{{ public_url('js/lib/flickity.pkgd.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ public_url('js/frontend/assets/main.js') }}"></script>
<script type="application/javascript">
    $('.main-carousel').flickity({
        // options
        cellAlign: 'center',
        autoPlay: 3000,
        pauseAutoPlayOnHover: true,
        lazyLoad: true,
        freeScroll: true,
        contain: true,
        pageDots: false,
    });
</script>
</body>
</html>
