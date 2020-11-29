@extends('layout')

@section('title','Trailer')

@section('style')
    <style>
        body{
            background-color: #273036 !important;
            color: #cbd5e0;
        }

        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
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

        .card-img-overlay{
            display: none !important;
            position: absolute;
        }

        .content-img:hover .card-img-overlay{
            display: block !important;
        }

        .linkTrailer{
            text-decoration: none !important;
            color: #fff !important;

        }

        .linkTrailer:hover .img-trailer{
            opacity: 0.3 !important;
        }
        .img-trailer{
            max-height: 300px !important;
        }

        .text-sm{
            padding: 1em;
            text-align: center;
        }

        .shadow-sm{
            display: none;
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

        <h1 class="text-center mt-3">Trailer</h1>

        @if(isset($listTrailer))
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <form class="form-inline ml-auto" method="get" action="{{ route('/') }}" id="formulario">
                            @csrf
                            <div class="md-form my-0">
                                <input class="form-control" name="buscar-trailer-home" id="busqueda" type="text" placeholder="Buscar Trailer" aria-label="Search" value="{{ old('buscar-trailer-home') }}">
                            </div>
                            <button class="btn btn-light btn-md my-0 ml-sm-2" id="xd">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-between mt-4">
            @forelse($listTrailer as $item)
            <div class="col-lg-6 mt-3 mb-3 content-trailer">
                <div class="card bg-dark text-white content-img">
                    <a href="{{ route('/name', $item) }}" class="linkTrailer" target="_blank">
                        <img src="{{$item->img}}" class="card-img img-trailer" alt="{{$item->title}}">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text">{{$item->sinopsis}}</p>
                            <p class="card-text">{{$item->year}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                <h1 class="text-center">No hay trailers disponible</h1>
            @endforelse
        </div>
    </section>
    <nav aria-label="Page navigation example" class="mt-3">
        <ul class="pagination justify-content-center">
            {{ $listTrailer->links() }}
        </ul>
    </nav>
    
@endsection
