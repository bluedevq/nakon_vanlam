@extends('layouts.backend.auth')
@section('content')
    <div class="login-card-inner container">
        <h1><img src="{{ url('img/logo.jpg') }}" width="250"></h1>
        <div class="login-card-body">
            {{ Form::open(['route' => 'backend.auth', 'class' => 'form-signin', 'method' => 'post']) }}
                <div class="form-block">
                    <div class="form-inner">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="form-login-input form-login-input--email">
                                    <label class="input-name">EMAIL</label>
                                    {!! Form::text('email', '', ['class' => 'form-control ' .  ($errors->has('email') ? 'border-error' : '')]) !!}
                                    @if($errors->has('email'))<p class="error">{{ $errors->first('email') }}</p>@endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <div class="form-login-input form-login-input--password">
                                    <label class="input-name">Mật khẩu</label>
                                    {!! Form::password('password', ['class' => 'form-control ' .  ($errors->has('password') ? 'border-error' : '')]) !!}
                                    @if($errors->has('password'))<p class="error">{{ $errors->first('password') }}</p>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-btn-area">
                        <input type="submit" name="submit" value="Đăng nhập" class="btn btn-success btn-login">
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
