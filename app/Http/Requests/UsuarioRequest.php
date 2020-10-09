<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'name'=>'required|min:3',
            'apellido'=>'required|min:3',
            'cedula'=>'required|min:7|max:9',
            'email'=>'required',
            'id_pnf'=>'required',
           
            'password'=>'required|min:3|max:15',
            


        ];
    }
    public function messages(){
        return[
            'name.required'=>'Ingrese su nombre',
            'apellido.required'=>'Ingrese su apellido',
            'cedula.required'=>'Ingrese su cédula',
            'email.required'=>'Ingrese un correo',
            'id_pnf.required'=>'Seleccione un PNF',

            'password.required'=>'Ingrese una contraseña'
            

        ];
    }
}
//'email'=>'required|regex:/^[\pL\s\-]+$/u',