@extends('layouts.frontend.default')
@section('content')
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
@stop
