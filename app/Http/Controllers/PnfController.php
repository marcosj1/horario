<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PnfCreateRequest;
use App\Pnf;
class PnfController extends Controller
{
 
  public function index()
  {
    $est = Pnf::all();
    return view('pnf.index', ['est'=> $est]);
}

    



public function create()
{
    
   return view('pnf.create');
}




public function store(PnfCreateRequest $request)
{
    $pnf = new Pnf();
    $pnf->nombre = request('nombre');
    $pnf->codigo = request('codigo');
    if($pnf->save()){
       
        return redirect('../../pnf')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
   return view('pnf.show', ['est'=> Pnf::findOrFail($id)]);
}


public function edit($id)
{
   return view('pnf.edit', ['est'=> Pnf::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PnfCreateRequest $request, $id)
    {
        $pnf = Pnf::findOrFail($id);

        $pnf->nombre = $request->get('nombre');
        $pnf->codigo = $request->get('codigo');

        if($pnf->update()){
           
            return redirect('../../pnf')->with('msj', 'Datos Modificados');
            
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
        $datosPnf = Pnf::findOrFail($id);
        $datosPnf->delete();

        






    }
}
