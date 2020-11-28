@extends('layout')

@section('title',$trailers->title)

@section('style')
    <style>
        body {
            background-color: #273036 !important;
            color: #fff;
        }

        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
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
                        <i class="fas fa-sign-in-alt ml-2"></i> Login</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <section class="container">
        <div class="row mt-5 justify-content-center align-items-center vh-60">
            <div class="col-lg-12">
                <div class="card-deck">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <iframe width="590" height="450" src="https://www.youtube.com/embed/{{$trailers->url}}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6" style="background-color: #5000ca; max-height: 450px !important;">
                            <div class="card-body">
                                <h5 class="card-title">{{$trailers->title}}</h5>
                                <p class="card-text">{{$trailers->sinopsis}}</p>
                                <p class="card-text">Año: {{$trailers->year}}</p>
                                <p class="card-text">Duración: {{$trailers->duracion}} </p>
                                <p class="card-text">Género: {{$trailers->genero}}</p>
                                <p class="card-text">Reparto: {{$trailers->Reparto}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
