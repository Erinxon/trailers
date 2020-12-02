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
        .page-footer{
            background-color: #5000ca !important;
            color: #fff !important;
        }

    </style>
@endsection

@section('title-nav', 'Trailers')

@section('content')
    <section class="container mb-5">
        <h1 class="text-center mt-3">Trailer</h1>
        @if(isset($listTrailer))
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group md-form form-sm form-2">
                        <form class="form-inline ml-auto" method="get" action="{{ route('/') }}" id="formulario">
                            <div class="md-form my-0">
                                <input class="form-control" name="buscar-trailer-home" id="busqueda" type="text" placeholder="Buscar Trailer" aria-label="Search">
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
                            <p class="card-text">{{ substr($item->sinopsis, 0, 120).'...'}}</p>
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

    <nav aria-label="Page navigation mb-3 example" class="mt-3">
        <ul class="pagination justify-content-center">
            {{ $listTrailer->links() }}
        </ul>
    </nav>

    <footer class="page-footer fixed-bottom font-small">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="http://trailersapp.test/">trailersapp.test</a>
        </div>
    </footer>

@endsection
