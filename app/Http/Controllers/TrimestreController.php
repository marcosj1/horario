<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrimestreCreateRequest;
use App\Trimestre; 

class TrimestreController extends Controller
{
    public function index()
    {
        $est = Trimestre::all();
        return view('trimestre.index', ['est'=> $est]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
     
     return view('trimestre.create');
 }

 public function store(TrimestreCreateRequest $request) 
 {
    $trimestre = new Trimestre();
    $trimestre->nombre = request('nombre');
    if($trimestre->save()){
     
        return redirect('../../trimestre')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
 return view('trimestre.show', ['est'=> Trimestre::findOrFail($id)]);
}


public function edit($id)
{
 return view('trimestre.edit', ['est'=> Trimestre::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrimestreCreateRequest $request, $id)
    {
        $trimestre = Trimestre::findOrFail($id);

        $trimestre->nombre = $request->get('nombre');

        if($trimestre->update()){
         
            return redirect('../../trimestre')->with('msj', 'Datos Modificados');
            
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
        $datosTrimestre = Trimestre::findOrFail($id);
        $datosTrimestre->delete();

        return redirect()->route('trimestre.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
