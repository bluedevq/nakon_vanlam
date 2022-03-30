@extends('layouts.frontend.default')
@section('content')
    <!-- Start List Products Section -->
    @if(!blank($entities))
        <section class="project-section bg-grey section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3>{{ \Illuminate\Support\Str::upper('Các sản phẩm của chúng tôi') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($entities as $entity)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="project-item-box">
                                <a class="single-project-link" href="{{ route('frontend.product.show', $entity->id) }}">
                                    <img src="{{ public_url($entity->image_url) }}" alt="image">
                                    <div class="project-link-title-box">
                                        <div class="project-link-title-inside">
                                            <div class="project-link-flip-front">
                                                <h3>{{ $entity->name }}</h3>
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
    @endif
    <!-- End List Products Section -->
@stop
