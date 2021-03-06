<?php

namespace App\Http\Controllers;


use App\Models\Trailer;
use App\Http\Requests\CreateTrailerRequest;
use App\Http\Requests\EditTrailerRequest;

use Faker\Provider\File;
use http\Client\Curl\User;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Utils;

class adminController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('index','store','delete','edit','update');
    }

    public function index()
    {
        $nameTrailerSearch = request('buscar-trailer');

        $listTrailer = Trailer::orderBy('id', 'desc')
                ->Title($nameTrailerSearch)
                ->get();

        return view('admin', compact('listTrailer'));

    }

    public function store(CreateTrailerRequest $request){

        $Imagen = $request->file('Imagen')->store('public/imagenes');

        $urlImagen = Storage::url($Imagen);

        Trailer::create([
            'title' => request('title'),
            'year'	=> request('year'),
            'genero'	=> request('genero'),
            'duracion'	=> request('duracion'),
            'Reparto'	=> request('reparto'),
            'sinopsis'	=> request('Sinopsis'),
            'url'	=> request('url'),
            'img'	=> $urlImagen
        ]);

        return redirect()->route('admin');
    }

    public function show()
    {

    }

    public function delete(Trailer $trailer){
        $filename = str_replace('/storage/imagenes/', '',$trailer->img);

        $listaImages = Storage::files('/public/imagenes/');

        $verificar = false;
        foreach ($listaImages as $item){
            if(str_replace('public/imagenes/','',$item) == $filename){
                $verificar = true;
            }else{
                $verificar = false;
            }
        }

        if($verificar){
            unlink(storage_path('app/public/imagenes/'.$filename));
        }

        $trailer->delete();

        return redirect()->route('admin');
    }

    public function edit($id){
        return view('editar', [
            'trailers' => Trailer::findOrFail($id)
        ]);
    }

    public function update(Trailer $trailer, EditTrailerRequest $request){

        $img = $trailer->img;

        $pathFoto = '';

        $listaImages = Storage::files('/public/imagenes/');

        if(!empty($request->file('Imagen'))){
            $pathFoto = $request->file('Imagen')->store('public/imagenes');

            $filename = str_replace('/storage/imagenes/', '',$img);

            $verificar = false;

            foreach ($listaImages as $item){
                if(str_replace('public/imagenes/','',$item) == $filename){
                    $verificar = true;
                }else{
                    $verificar = false;
                }
            }

            if($verificar){
                unlink(storage_path('app/public/imagenes/'.$filename));
            }else{
                Storage::url($pathFoto);
            }

        }

        $trailer->update([
            'title' => request('title'),
            'year'	=> request('year'),
            'genero'	=> request('genero'),
            'duracion'	=> request('duracion'),
            'Reparto'	=> request('reparto'),
            'sinopsis'	=> request('Sinopsis'),
            'url'	=> request('url'),
            'img'	=> $pathFoto == '' ? $img : Storage::url($pathFoto),
        ]);

        return redirect()->route('admin');


    }
}
