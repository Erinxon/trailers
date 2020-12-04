<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Trailer;

class TrailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $nameTrailerSearch = request('buscar-trailer-home');

        $listTrailer = Trailer::orderBy('id', 'desc')->Title($nameTrailerSearch)
            ->paginate(6);

        return view('home', compact('listTrailer'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('trailers.trailer', [
            'trailers' => Trailer::findOrFail($id)
        ]);
    }


}
