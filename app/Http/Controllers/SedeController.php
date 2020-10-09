<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SedeCreateRequest;
use App\Sede;

class SedeController extends Controller
{

  public function index()
  {
    $est = Sede::all();
    return view('sede.index', ['est'=> $est]);
}





public function create()
{

   return view('sede.create');
}




public function store(SedeCreateRequest $request)
{
    $sede = new Sede();
    $sede->nombre = request('nombre');
    $sede->direccion= request('direccion');
    if($sede->save()){

        return redirect('../../sede')->with('msj', 'Datos Registrados');

    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');

    }

}


public function show($id)
{
   return view('sede.show', ['est'=> Sede::findOrFail($id)]);
}


public function edit($id)
{
   return view('sede.edit', ['est'=> Sede::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SedeCreateRequest $request, $id)
    {
        $sede = Sede::findOrFail($id);

        $sede->nombre = $request->get('nombre');

        $sede->direccion = $request->get('direccion');


        if($sede->update()){

            return redirect('../../sede')->with('msj', 'Datos Modificados');

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
      $datosEstado = Sede::findOrFail($id);
      $datosEstado->delete();

      return redirect()->route('sede.index')->with('success','Registro eliminado satisfactoriamente');









    }
}
