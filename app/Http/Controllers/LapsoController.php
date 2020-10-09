<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LapsoCreateRequest;
use App\Lapso; 

class LapsoController extends Controller
{
    public function index()
    {
        $est = Lapso::all();
        return view('lapso.index', ['est'=> $est]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
     
     return view('lapso.create');
 }

 public function store(LapsoCreateRequest $request) 
 {
    $lapso = new Lapso();
    $lapso->nombre = request('nombre');
    if($lapso->save()){
     
        return redirect('../../lapso')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
 return view('lapso.show', ['est'=> Lapso::findOrFail($id)]);
}


public function edit($id)
{
 return view('lapso.edit', ['est'=> Lapso::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LapsoCreateRequest $request, $id)
    {
        $lapso = Lapso::findOrFail($id);

        $lapso->nombre = $request->get('nombre');

        if($lapso->update()){
         
            return redirect('../../lapso')->with('msj', 'Datos Modificados');
            
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
        $datosLapso = Lapso::findOrFail($id);
        $datosLapso->delete();

        return redirect()->route('lapso.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
