<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EspecialidadCreateRequest;
use App\Especialidad;

class EspecialidadController extends Controller
{

  public function index()
  {
    $est = Especialidad::all();
    return view('especialidad.index', ['est'=> $est]);
}





public function create()
{
    
 return view('especialidad.create');
}




public function store(EspecialidadCreateRequest $request)
{
    $especialidad = new Especialidad();
    $especialidad->nombre = request('nombre');
    if($especialidad->save()){
     
        return redirect('../../especialidad')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
 return view('especialidad.show', ['est'=> Especialidad::findOrFail($id)]);
}


public function edit($id)
{
 return view('especialidad.edit', ['est'=> Especialidad::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EspecialidadCreateRequest $request, $id)
    {
        $especialidad = Especialidad::findOrFail($id);

        $especialidad->nombre = $request->get('nombre');

        if($especialidad->update()){
         
            return redirect('../../especialidad')->with('msj', 'Datos Modificados');
            
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
        $datosEspecialidad = Especialidad::findOrFail($id);
        $datosEspecialidad->delete();

        






    }
}
