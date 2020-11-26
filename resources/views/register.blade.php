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
    <section class="container">
        <div class="row m-5 justify-content-center align-items-center vh-50">
            <div class="col-lg-6 content-form">
                <h4 class="text-center mt-2">Registrarse</h4>
                <form class="m-4" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ old('name') }}">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Apellido</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
                            <span class="text-danger">{{$errors->first('apellido')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input type="email" class="form-control" name="email"  placeholder="Correo electrónico" value="{{ old('email') }}">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="password1" placeholder="Contraseña" value="{{ old('password1') }}">
                            <span class="text-danger">{{$errors->first('password1')}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Repetir Contraseña</label>
                            <input type="password" class="form-control" name="password2" placeholder="Repetir Contraseña" value="{{ old('password2') }}">
                            <span class="text-danger">{{$errors->first('password2')}}</span>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block">Registrarse</button>
                </form>
            </div>
        </div>
    </section>
@endsection

