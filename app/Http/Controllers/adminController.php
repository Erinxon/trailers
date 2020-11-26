<?php

namespace App\Http\Controllers;

use App\Models\Trailer;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $listTrailer = Trailer::orderBy('id', 'desc')->get();

        return view('admin', compact('listTrailer'));
    }
}
