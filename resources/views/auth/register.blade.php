@extends('layout')

@section('title','Register')

@section('style')
    <style>
        body{
            background-color: #F3F4F5 !important;
        }


        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
        }

        .content-form{
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        }

        .btn{
            background-color: #273036 !important;
            border: #273036;
        }

    </style>
@endsection

@section('nav')
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
        <a class="navbar-brand" href="/">Trailers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="{{ setActive('register') }}">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fas fa-user-plus"></i>  Sign Up
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="{{ setActive('login') }}">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt ml-2"></i>  Login</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Registrarse') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                                <label for="name">{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <label for="email">{{ __('Dirección de correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block" style="padding: 0.7em !important;">
                                    {{ __('Registrarse') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
