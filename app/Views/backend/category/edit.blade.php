@extends('layouts.backend.default')
@section('content')
    <div class="content">
        <div class="container">
            <div class="post">
                <div class="card">
                    <div class="card-header">
                        <div class="page-title flex align-items-center">
                            <div class="mr-auto flex align-items-center">
                                <h1 class="heading-1">Sửa danh mục</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="scroll-area responsive-container-sp">
                            @include('backend.category._form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
