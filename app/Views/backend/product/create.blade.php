@extends('layouts.backend.default')
@section('content')
    <div class="content">
        <div class="container">
            <div class="post">
                <div class="card">
                    <div class="card-header">
                        <div class="page-title flex align-items-center">
                            <div class="mr-auto flex align-items-center">
                                <h1 class="heading-1">Thêm mới sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="scroll-area responsive-container-sp">
                            {{ Form::open(['route' => 'product.store', 'class' => '', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                            <div class="form-block">
                                <div class="row col-12">
                                    <div class="form-group">
                                        <div class="form-field col-6">
                                            <label class="input-name">Tên sản phẩm</label>
                                            {!! Form::text('name', '', ['class' => 'form-control ' .  ($errors->has('name') ? 'border-error' : '')]) !!}
                                            @if($errors->has('name'))<p class="error">{{ $errors->first('name') }}</p>@endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 col-12">
                                    <div class="form-group">
                                        <div class="form-field col-4">
                                            <label class="input-name">Danh mục</label>
                                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control form-select ' .  ($errors->has('category_id') ? 'border-error' : '')]) !!}
                                            @if($errors->has('category_id'))<p class="error">{{ $errors->first('category_id') }}</p>@endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 col-12">
                                    <div class="form-group">
                                        <div class="form-field col-4">
                                            <label class="input-name">Ảnh sản phẩm</label>
                                            {!! Form::file('image_url', ['class' => 'form-control ' .  ($errors->has('image_url') ? 'border-error' : '')]) !!}
                                            @if($errors->has('image_url'))<p class="error">{{ $errors->first('image_url') }}</p>@endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 col-12">
                                    <button type="submit" name="submit" class="btn btn-success col-2">Thêm</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
