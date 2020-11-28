@extends('layout')

@section('title',"Editar: {$trailers->title}")

@section('style')
    <style>
        body{
            background-color: #F3F4F5 !important;
        }

        .btn{
            background-color: #273036 !important;
            border: #273036;
        }

        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
        }


        .btn .volver-atras-admin{
            text-decoration: none;
            color: #fff;
        }

        .content-editar{
            margin-top: 2em;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
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
                        <i class="fas fa-user mr-2"></i>
                        @auth()
                            {{ auth()->user()->name}}
                        @endauth
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info ml-2"
                         aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <section class="container">
        <div class="row justify-content-center align-items-center vh-60">
            <div class="col-md-8 content-editar">
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.update', $trailers) }}" id="formulario"  enctype="multipart/form-data">
                        @csrf @method('PATCH')
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <input type="text" name="title" class="form-control" placeholder="Titulo" value="{{ old('title', $trailers->title) }}">
                                <span class="text-danger">{{$errors->first('title')}}</span>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <input type="text" name="year" class="form-control" placeholder="Año" value="{{ old('year', $trailers->year)}}">
                                <span class="text-danger">{{$errors->first('year')}}</span>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <input type="text" name="duracion" class="form-control" placeholder="Duración" value="{{ old('duracion',$trailers->duracion)}}">
                                <span class="text-danger">{{$errors->first('duracion')}}</span>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <input type="text" name="genero" class="form-control" placeholder="Género" value="{{ old('genero',$trailers->genero) }}">
                                <span class="text-danger">{{$errors->first('genero')}}</span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <textarea type="text" name="reparto" class="form-control" placeholder="Reparto" rows="3" >{{ old('reparto', $trailers->Reparto) }}</textarea>
                                <span class="text-danger">{{$errors->first('reparto')}}</span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <textarea type="text" name="Sinopsis" class="form-control" placeholder="Sinopsis" rows="3" >{{ old('Sinopsis', $trailers->sinopsis) }}</textarea>
                                <span class="text-danger">{{$errors->first('Sinopsis')}}</span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <input type="text" name="url" class="form-control" placeholder="Url" value="{{ old('url', $trailers->url) }}" id="urlCampo">
                                <span class="text-danger">{{$errors->first('url')}}</span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label>Subir mineatura</label>
                                <input type="file" class="form-control-file" name="Imagen" accept="image/*" value="{{ old('url', $trailers->img) }}">
                                <span class="text-danger">{{$errors->first('Imagen')}}</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary"><a href="{{ route('admin') }}" class="volver-atras-admin">Volver al Inicio</a></button>
                            <button class="btn btn-primary" id="guardar-trailer">Editar
                                Trailer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        const formulario = document.getElementById('guardar-trailer');
        const codigoUlr = document.getElementById('urlCampo')

        formulario.addEventListener('click', (e) => {

            let link = codigoUlr.value

            let caracter= '=';
            let cont = 0;

            for(let i=0;i<link.length;i++){
                if(link[i] === caracter){
                    cont += 1
                }
            }
            if(cont===2){
                link = link.slice(link.indexOf(caracter) + 1, link.lastIndexOf('='));
            }
            else{
                link = link.slice(link.indexOf(caracter) + 1, link.length);
            }
            codigoUlr.value = link
        })

    </script>
@endsection
