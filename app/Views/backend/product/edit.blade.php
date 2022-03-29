@extends('layouts.backend.default')
@section('content')
    <div class="post">
        <div class="card">
            <div class="card-header">
                <div class="page-title flex align-items-center">
                    <div class="mr-auto flex align-items-center">
                        <h1 class="heading-1">Sửa sản phẩm</h1>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="responsive-container-sp">
                    @include('backend.product._form')
                </div>
            </div>
        </div>
    </div>
@stop
