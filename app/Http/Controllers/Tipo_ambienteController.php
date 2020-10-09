<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tipo_ambienteCreateRequest;
use App\Tipo_ambiente;

class Tipo_ambienteController extends Controller
{

  public function index()
  {
    $est = Tipo_ambiente::all();
    return view('tipo_ambiente.index', ['est'=> $est]);
}





public function create()
{

   return view('tipo_ambiente.create');
}




public function store(Tipo_ambienteCreateRequest $request)
{
    $tipo_ambiente = new Tipo_ambiente();
    $tipo_ambiente->nombre = request('nombre');
    if($tipo_ambiente->save()){

        return redirect('../../tipo_ambiente')->with('msj', 'Datos Registrados');

    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');

    }

}


public function show($id)
{
   return view('tipo_ambiente.show', ['est'=> Tipo_ambiente::findOrFail($id)]);
}


public function edit($id)
{
   return view('tipo_ambiente.edit', ['est'=> Tipo_ambiente::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tipo_ambienteCreateRequest $request, $id)
    {
        $tipo_ambiente = Tipo_ambiente::findOrFail($id);

        $tipo_ambiente->nombre = $request->get('nombre');

        if($tipo_ambiente->update()){

            return redirect('../../tipo_ambiente')->with('msj', 'Datos Modificados');

        } else{
            return back()->with('Errormsj', 'Error al Ejecutar la Operación');

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $datosEstado = Tipo_ambiente::findOrFail($id);
      $datosEstado->delete();

      return redirect()->route('tipo_ambiente.index')->with('success','Registro eliminado satisfactoriamente');









    }
}
