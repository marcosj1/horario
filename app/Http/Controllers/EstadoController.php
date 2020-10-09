<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstadoCreateRequest;
use App\Estado;

class EstadoController extends Controller
{

  public function index()
  {
    $est = Estado::all();
    return view('estado.index', ['est'=> $est]);
}

    



public function create()
{
    
   return view('estado.create');
}




public function store(EstadoCreateRequest $request)
{
    $estado = new Estado();
    $estado->nombre = request('nombre');
    if($estado->save()){
       
        return redirect('../../estado')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
   return view('estado.show', ['est'=> Estado::findOrFail($id)]);
}


public function edit($id)
{
   return view('estado.edit', ['est'=> Estado::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoCreateRequest $request, $id)
    {
        $estado = Estado::findOrFail($id);

        $estado->nombre = $request->get('nombre');

        if($estado->update()){
           
            return redirect('../../estado')->with('msj', 'Datos Modificados');
            
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
        $datosEstado = Estado::findOrFail($id);
        $datosEstado->delete();

        






    }
}
