<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTrailerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'year' => 'required',
            'duracion' => 'required',
            'genero' => 'required',
            'reparto' => 'required',
            'Sinopsis' => 'required',
            'url' => 'required',
            'Imagen' => 'required|Image|max:30000'
        ];
    }
}
