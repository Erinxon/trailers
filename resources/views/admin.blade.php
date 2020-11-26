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
        <a class="navbar-brand" href="#">Admin Trailers</a>
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
                        <a class="dropdown-item" href="#">Mi cuenta</a>
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
            <div class="col-lg-4 mt-3 mb-3">
                <form class="form-search" id="formulario">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Buscar Trailer" id="inputTexto">
                </form>
            </div>
            <div class="col-lg-3 mt-3 mb-3">
                <div class="agregar-contacto">
                    <a href="#" class="btn-agregar" data-toggle="modal" data-target="#abrir-modal">
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
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Coco</td>
                        <td style="max-width: 80px;"><img src="img/1.jpg" class="img-fluid" alt="..."></td>
                        <td>2020</td>
                        <td style="max-width: 50px;">Miguel es un joven que sueña con ser músico, algo a lo que su
                            familia
                            se opone totalmente.</td>
                        <td>
                            <a href="#" class="btn-editar" id="editar" data-toggle="modal" data-target="#abrir-modal-editar">
                                <i class="far fa-edit"></i>
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn-eliminar" id="eliminar">
                                <i class="fas fa-trash-alt"></i>
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12">
                <div class="modal fade" id="abrir-modal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Nuevo Trailer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="year" class="form-control" placeholder="Año del trailer">
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <textarea type="text" name="Sinopsis" class="form-control" placeholder="Sinopsis"></textarea>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <input type="text" name="url" class="form-control" placeholder="Url">
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label>Subir mineatura</label>
                                            <input type="file" class="form-control-file" name="Imagen" accept="image/*">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="guardar-trailer">Guardar
                                    Trailer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="modal fade" id="abrir-modal-editar" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Editar Trailer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="year" class="form-control" placeholder="Año del trailer">
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <textarea type="text" name="Sinopsis" class="form-control" placeholder="Sinopsis"></textarea>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <input type="text" name="url" class="form-control" placeholder="Url">
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label>Subir mineatura</label>
                                            <input type="file" class="form-control-file" name="Imagen" accept="image/*">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="editar-trailer">Editar
                                    Trailer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
