<!-- Start Footer Section -->
<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 footer-box-item">
                <div class="footer-about footer-list">
                    <a class="footer-logo" href="{{ route('home.index') }}">
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
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            @if(!blank($categories) && !isMobile())
                <div class="col-lg-2 col-md-6 footer-box-item">
                    <div class="footer-list">
                        <h5 class="title">Các loại sản phẩm</h5>
                        <ul class="footer-nav-links">
                            @foreach($categories as $category)
                                <li><a href="{{ route('frontend.category.show', $category->id) }}">{{ $category->name }}</a></li>
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
                            <li><span>SĐT:</span> <a href="tel:{{ \App\Helper\Common::getConfig('phone_number') }}">{{ formatPhone(\App\Helper\Common::getConfig('phone_number')) }}</a></li>
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
@include('layouts.frontend.structures.footer_js')
