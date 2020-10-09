<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaCreateRequest;
use App\Categoria;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $est = Categoria::all();
        return view('categoria.index', ['est'=> $est]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
     return view('categoria.create');
 }

 public function store(CategoriaCreateRequest $request)
 {
    $categoria = new Categoria();
    $categoria->nombre = request('nombre');
    if($categoria->save()){
     
        return redirect('../../categoria')->with('msj', 'Datos Registrados');
        
    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');
        
    }

}


public function show($id)
{
 return view('categoria.show', ['est'=> Categoria::findOrFail($id)]);
}


public function edit($id)
{
 return view('categoria.edit', ['est'=> Categoria::findOrFail($id)]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaCreateRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->nombre = $request->get('nombre');

        if($categoria->update()){
         
            return redirect('../../categoria')->with('msj', 'Datos Modificados');
            
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
        $datosCategoria = Categoria::findOrFail($id);
        $datosCategoria->delete();

        






    }
}
