@extends('layout')

@section('title','Admin')

@section('style')
    <style>
        body{
            background-color: #F3F4F5 !important;
        }

        .navbar{
            background-color: #5000ca !important;
            color: #fff !important;
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

        .agregar-trailer i{
            color: #000000;
            opacity: 0.5;
        }

        .agregar-trailer{
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
        <div class="row justify-content-between mt-4">
            <div class="col-lg-4 mt-3 mb-3">
                <form class="form-search" id="formulario" method="get" action="{{ route('admin') }}">
                    @csrf
                    <i class="fas fa-search"></i>
                    <input type="text" name="buscar-trailer" placeholder="Buscar Trailer" id="inputTexto">
                </form>
            </div>
            <div class="col-lg-3 mt-3 mb-3">
                <div class="agregar-trailer">
                    <a href="{{ route('admin.agregar') }}" class="btn-agregar">
                        <i class="fas fa-plus-circle"></i>
                        Agregar Nuevo Trailer
                    </a>
                </div>
            </div>
            <div class="col-lg-12 mt-3 mb-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Año</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Género</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($listTrailer as $item)
                        <tr accesskey="{{$item->id}}">
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->title}}</td>
                            <td style="max-width: 80px;"><img src="{{$item->img}}" class="img-fluid" alt="..."></td>
                            <td>{{$item->year}}</td>
                            <td>{{$item->duracion}}</td>
                            <td>{{$item->genero}}</td>
                            <td style="max-width: 50px;">{{$item->sinopsis}}</td>
                            <td>
                                <button class="btn btn-link btn-editar">
                                    <a href="{{ route('admin.editar', $item) }}" class="btn-editar" id="editar" >
                                        <i class="far fa-edit"></i>Editar
                                    </a>
                                </button>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.delete', $item) }}">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-link btn-eliminar"><i class="fas fa-trash-alt"></i>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="9" class="text-center">No hay trailers disponible</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
