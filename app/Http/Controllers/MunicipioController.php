<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;
use App\Estado;
use DB;
class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $est = Estado::select('municipios.id as id_municipio', 'estados.nombre as nom_estado', 'municipios.nombre as nom_municipio')
        ->join('municipios', 'estados.id', '=', 'municipios.id_estado')
        ->get();


        return view('municipio.index', ['est'=> $est]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esta = Estado::all();
        return view('municipio.create', ['esta'=>$esta]);
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $municipio = new municipio();
      $municipio->nombre = request('nombre');
      $municipio->id_estado = request('id_estado');
      if($municipio->save()){

        return redirect('../../municipio')->with('msj', 'Datos Registrados');

    } else{
        return back()->with('Errormsj', 'Error al Ejecutar la Operación');

    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return municipio::where('id_estado','=',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $datosestado = Estado::all();
        return view('municipio.edit', ['est'=> municipio::findOrFail($id)],['datosestado'=>$datosestado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $municipio = municipio::findOrFail($id);

        $municipio->nombre = $request->get('nombre');
        $municipio->id_estado = $request->get('id_estado');

        if($municipio->update()){

            return redirect('../../municipio')->with('msj', 'Datos Modificados');

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
        $datosMunicipio = municipio::findOrFail($id);
        $datosMunicipio->delete();
    }
}
