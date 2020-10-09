<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AmbienteCreateRequest;
use App\Sede;
use App\Ambiente;

class AmbienteController extends Controller
{

  public function index()
  {
    $est = Sede::select('ambiente.id as id_ambiente', 'sede.nombre as nom_estado', 'ambiente.nombre as nom_municipio')
    ->join('ambiente', 'sede.id', '=', 'ambiente.id_sede')
    ->get();

    return view('ambiente.index', ['est'=> $est]);
}





public function create()
{

   $esta = Sede::all();
   return view('ambiente.create', compact('esta'));
}




public function store(AmbienteCreateRequest $request)
{
    $ambiente = new Ambiente();
    $ambiente->nombre = request('nombre');
    $ambiente->id_sede = request('id_sede');
    if($ambiente->save()){

        return redirect('../../ambiente')->with('msj', 'Datos Registrados');

    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');

    }

}


public function show($id)
{
   return ambiente::where('id_sede','=',$id)->get();
}


public function edit($id)
{
  $datosestado = Sede::all();
  return view('ambiente.edit', ['est'=> ambiente::findOrFail($id)],['datosestado'=>$datosestado]);

}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AmbienteCreateRequest $request, $id)
    {
        $ambiente = Ambiente::findOrFail($id);

        $ambiente->nombre = $request->get('nombre');
          $ambiente->id_sede = $request->get('id_sede');

        if($ambiente->update()){

            return redirect('../../ambiente')->with('msj', 'Datos Modificados');

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
      $datosEstado = Ambiente::findOrFail($id);
      $datosEstado->delete();

      return redirect()->route('ambiente.index')->with('success','Registro eliminado satisfactoriamente');









    }
}
