<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AmbienteCreateRequest;
use App\Sede;
use App\Tipo_ambiente;
use App\Ambiente;
use DB;

class AmbienteController extends Controller
{

  public function index()
  {
    $est = DB::table('ambiente')->select('ambiente.id as id_ambiente,ambiente.nombre as nom_ambiente, (select nombre from sede where id = ambiente.id_sede) as nombre_sede, (select nombre from tipo_ambiente where id = ambiente.id_tipo_ambiente) as nombre_tipoa')
    ->join('sede', 'sede.id', '=', 'ambiente.id_sede')
    ->join('tipo_ambiente', 'tipo_ambiente.id', '=', 'ambiente.id_tipo_ambiente')
    ->get();

    return view('ambiente.index', compact('est'));
}





public function create()
{

   $esta = Sede::all();
   $este = Tipo_ambiente::all();
   return view('ambiente.create', compact('esta','este'));
}




public function store(AmbienteCreateRequest $request)
{
    $ambiente = new Ambiente();
    $ambiente->nombre = request('nombre');
    $ambiente->id_sede = request('id_sede');
    $ambiente->id_tipo_ambiente = request('id_tipo_ambiente');
    if($ambiente->save()){

        return redirect('../../ambiente')->with('msj', 'Datos Registrados');

    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');

    }

}


public function show($id)
{
   return ambiente::where('id_sede','=',$id)->get();
   return ambiente::where('id_tipo_ambiente','=',$id)->get();
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
          $ambiente->id_tipo_ambiente = $request->get('id_tipo_ambiente');

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
