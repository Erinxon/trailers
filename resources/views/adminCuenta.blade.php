@extends('layout')

@section('title','Trailer')

@section('style')
    <style>
        body{
            background-color: #F3F4F5 !important;
        }

        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
        }

    </style>
@endsection

@section('nav')
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
        <a class="navbar-brand" href="{{ route('admin') }}">Admin Trailers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user mr-2"></i>Admin</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info ml-2"
                         aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="{{ route('cuenta') }}">Mi cuenta</a>
                        <a class="dropdown-item" href="#">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <section class="container">
        <div class="row justify-content-between mt-4">
            <div class="col-lg-12 mt-3 mb-3">
                <h1 class="text-center">Detalle Cuenta</h1>
            </div>
        </div>
    <section>
@endsection
