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

        .content-form{
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        }

        .btn{
            background-color: #273036 !important;
            border: #273036;
        }


        .form-search i{
            color: #000000;
            opacity: 0.5;
        }

        .form-search input{
            border: none;
            outline: none;
            background-color: #ffffff;
            margin-left: 1rem;
            color: #2B3743;
        }

        .agregar-contacto i{
            color: #000000;
            opacity: 0.5;
        }

        .content-img:hover .card-img-overlay{
            display: block !important;
        }


        .linkTrailer:hover .img-trailer{
            opacity: 0.3 !important;
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
                    <a class="nav-link" href="/register">
                        Sign Up
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="{{ setActive('login') }}">
                    <a class="nav-link" href="/login">
                        Login</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <section class="container">
        <div class="row m-5 justify-content-center align-items-center vh-60">
            <div class="col-lg-5 content-form">
                <h4 class="text-center mt-2">Iniciar sesión</h4>
                <form class="m-4" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" value="{{ old('password') }}">
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </section>
@endsection
