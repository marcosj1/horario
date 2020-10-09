<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DedicacionRequest;
use App\Dedicacion;

class DedicacionController extends Controller
{
  public function index()
  {
    $est = Dedicacion::all();
    return view('dedicacion.index', ['est'=> $est]);
}





public function create()
{

   return view('dedicacion.create');
}




public function store(DedicacionRequest $request)
{
    $dedicacion = new Dedicacion();
    $dedicacion->nombre = request('nombre');
    $dedicacion->horas_acreditables = request('horas_acreditables');
    $dedicacion->horas_aula = request('horas_aula');
    $dedicacion->horas_totales = request('horas_totales');
    if($dedicacion->save()){

        return redirect('../../dedicacion')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
   return view('dedicacion.show', ['est'=> Dedicacion::findOrFail($id)]);
}


public function edit($id)
{
   return view('dedicacion.edit', ['est'=> Dedicacion::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DedicacionRequest $request, $id)
    {
        $dedicacion = Dedicacion::findOrFail($id);
        $dedicacion->nombre = request('nombre');
        $dedicacion->horas_acreditables = request('horas_acreditables');
        $dedicacion->horas_aula = request('horas_aula');
        $dedicacion->horas_totales = request('horas_totales');

        if($dedicacion->update()){

            return redirect('../../dedicacion')->with('msj', 'Datos Modificados');
            
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
        $datosDedicacion = Dedicacion::findOrFail($id);
        $datosDedicacion->delete();

        






    }
}
