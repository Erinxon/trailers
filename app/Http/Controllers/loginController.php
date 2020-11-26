<?php


namespace App\Http\Controllers;


class loginController
{
    public function  validar(){
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        return 'Datos validos';
    }
}
