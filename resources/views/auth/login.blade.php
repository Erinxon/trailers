@extends('layout')

@section('title','Login')

@section('style')
    <style>
        body{
            background-color: #F3F4F5 !important;
        }

        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
        }

        .btn{
            background-color: #273036 !important;
            border: #273036;
        }

    </style>
@endsection

@section('title-nav', 'Login')

@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Iniciar sesión') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="email">{{ __('Dirección de correo electrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Dirección de correo electrónico">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group  mt-2">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group  mt-3 mb-0">
                            <button type="submit" class="btn btn-primary btn-block" style="padding: 0.7em !important;" id="boton-iniciar">
                                {{ __('Iniciar sesión') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
