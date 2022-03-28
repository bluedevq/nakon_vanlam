@extends('layouts.frontend.default')
@section('content')
    <!-- Start Project Details Area -->
    <section class="project-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="projects-details-desc">
                        <div class="project-details-image">
                            <img src="{{ public_url($entity->image_url) }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="projects-details-desc">
                        <h3>{{ $entity->name }}</h3>
                        Giá: {{ blank($entity->price) ? 'liên hệ' : number_format($entity->price) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="projects-details-desc">
                        <p>{!! nl2br($entity->description) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Details Area -->
@stop
