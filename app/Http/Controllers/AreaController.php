<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AreaCreateRequest;
use App\Area; 

class AreaController extends Controller
{
      public function index()
    {
        $est = Area::all();
        return view('area.index', ['est'=> $est]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
     
     return view('area.create');
 }

 public function store(AreaCreateRequest $request) 
 {
    $area = new Area();
    $area->nombre = request('nombre');
    if($area->save()){
     
        return redirect('../../area')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
 return view('area.show', ['est'=> Area::findOrFail($id)]);
}


public function edit($id)
{
 return view('area.edit', ['est'=> Area::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaCreateRequest $request, $id)
    {
        $area = Area::findOrFail($id);

        $area->nombre = $request->get('nombre');

        if($area->update()){
         
            return redirect('../../area')->with('msj', 'Datos Modificados');
            
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
        $datosArea = Area::findOrFail($id);
        $datosArea->delete();

        return redirect()->route('area.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
