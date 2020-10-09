<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;
use App\Estado;
use App\Parroquia;
use DB;
class ParroquiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $est = Estado::select('municipios.id as id_municipio', 'estados.nombre as nom_estado', 'municipios.nombre as nom_municipio', 'parroquias.nombre as nom_parroquia', 'parroquias.id as id_parroquia')
      ->join('municipios', 'estados.id', '=', 'municipios.id_estado')
      ->join('parroquias', 'municipios.id', '=', 'parroquias.id_municipio')
      ->get();

      return view('parroquia.index', ['est'=> $est]);  
  }

  public function getMunicipios(Request $request, $id){

    if($request->ajax()){
        $muni = municipio::municipios($id);
        return response()->json($muni);
    }

}
        //


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esta = Estado::all();
        return view('parroquia.create', ['esta'=>$esta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parroquia = new Parroquia();
        $parroquia->nombre = request('nombre');
        $parroquia->id_municipio = request('id_municipio');
        if($parroquia->save()){

            return redirect('../../parroquia')->with('msj', 'Datos Registrados');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $est = parroquia::findOrFail($id);

        $muni = DB::table('municipios')->select('municipios.id_estado')->where('id',$est->id_municipio)->get()->toArray();
        $muni_array = collect($muni)->map(function($x){ return (array) $x; })->toArray(); 

        foreach($muni as $munis){
            $id_est = $munis->id_estado;
         
        }

        $datosestado = Estado::all();
        $datosmunicipio = DB::table('municipios')
        ->where('municipios.id_estado', $muni_array)
        ->select('municipios.*')
        ->get();

       // dd($id_est);

        //return view('parroquia.edit', ['est'=> parroquia::findOrFail($id)],['datosmunicipio'=>$datosmunicipio],['datosestado'=>$datosestado]);

        return View('parroquia.edit', compact('est','id_est','datosestado','datosmunicipio'));
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
      $parroquia = parroquia::findOrFail($id);

      $parroquia->nombre = $request->get('nombre');
      $parroquia->id_municipio = $request->get('id_municipio');
     


      if($parroquia->update()){

        return redirect('../../parroquia')->with('msj', 'Datos Modificados');

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
        //
    }
}
