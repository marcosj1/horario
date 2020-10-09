<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DedicacionRequest extends FormRequest
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


    public function rules()
    {
        return [
           'nombre' => 'required',
           'horas_acreditables' => 'required',
           'horas_aula' => 'required',
           'horas_totales' => 'required',
           
        ];
    }
}
