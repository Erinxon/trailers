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

        .content-form{
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        }

        .btn{
            background-color: #273036 !important;
            border: #273036;
        }


        .form-search {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            padding: 1rem;
            background-color: #ffffff;
            border-radius: 0.375rem;
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

        .agregar-contacto{
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            padding: 1rem;
            background-color: #ffffff;
            border-radius: 0.375rem;
        }

        .btn-agregar{
            text-decoration: none !important;
            color: #000000 !important;
            text-align: center !important;
        }

        .btn-eliminar{
            text-decoration: none !important;
            text-align: center !important;
            color: red !important;
        }

        .btn-editar{
            text-decoration: none !important;
            text-align: center !important;
            color: green !important;
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
            max-height: 250px !important;
        }

        .table{
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            background-color: #ffffff;
            border-radius: 0.375rem;
        }

        table th{
            padding: 20px !important;
        }

        table td{
            padding: 20px !important;
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
        <div class="row mt-5 justify-content-center align-items-center vh-60">
            <div class="col-lg-10">
                <div class="card-deck">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <iframe width="400" height="315" src="https://www.youtube.com/embed/{{$trailers->url}}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body">
                                <h5 class="card-title">{{$trailers->title}}</h5>
                                <p class="card-text">{{$trailers->sinopsis}}</p>
                                <p class="card-text">Año: {{$trailers->year}}</p>
                                <p class="card-text">Actores: </p>
                                <p class="card-text">Categoria: Comedia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
