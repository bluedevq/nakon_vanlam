@extends('layouts.frontend.default')
@section('content')
    <!-- Start List Products Section -->
    @if(!blank($listProducts))
        <section class="project-section bg-grey section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3>{{ \Illuminate\Support\Str::upper($entity->name) }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($listProducts as $product)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="project-item-box">
                                <a class="single-project-link" href="{{ route('frontend.product.show', $product->id) }}">
                                    <img src="{{ public_url($product->image_url) }}" alt="image">
                                    <div class="project-link-title-box">
                                        <div class="project-link-title-inside">
                                            <div class="project-link-flip-front">
                                                <h3>{{ $product->name }}</h3>
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
    @else
        <section class="project-section bg-grey section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>{{ \Illuminate\Support\Str::upper($entity->name) }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="align-center">Hiện không có sản phẩm nào</p>
                </div>
            </div>
        </section>
    @endif
    <!-- End List Products Section -->
@stop
