<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class registerController extends Controller
{
    public function  store(){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'apellido' => 'required',
            'password1' => 'required',
            'password2' => 'required',
        ]);

        return 'Mensaje enviado';
    }
}
