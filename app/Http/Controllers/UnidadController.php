<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trayecto;
use App\Pnf;
use App\User;
use App\Unidad_Curricular;
use DB;
use Illuminate\Support\Facades\Auth;
class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $id_pnf = Auth::User()->id_pnf;
//dd($id_pnf);
      $est = Unidad_Curricular::select('unidad_curriculars.nombre as nom_unidad', 'unidad_curriculars.id as id_unidad', 'unidad_curriculars.codigo as codigo_unidad', 'unidad_curriculars.uc as uc_unidad')
      ->where('unidad_curriculars.id_pnf',$id_pnf)
      ->get();
      

      return view('unidad.index', ['est'=> $est]);  
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $id_pnf = Auth::User()->id_pnf;
     $Unidad_Curricular = new Unidad_Curricular();
     $Unidad_Curricular->nombre = request('nombre');
     $Unidad_Curricular->codigo = request('codigo');
     $Unidad_Curricular->uc = request('uc');
     $Unidad_Curricular->id_pnf = $id_pnf;
     if($Unidad_Curricular->save()){

        return redirect('../../unidad')->with('msj', 'Datos Registrados');

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
   return view('unidad.edit', ['est'=> Unidad_Curricular::findOrFail($id)]);
    
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
        $id_pnf = Auth::User()->id_pnf;
        $unidad = Unidad_Curricular::findOrFail($id);
        $unidad->nombre = $request->get('nombre');
        $unidad->codigo = $request->get('codigo');
        $unidad->uc = $request->get('uc');
        $unidad->id_pnf = $id_pnf;

        if($unidad->update()){

            return redirect('../../unidad')->with('msj', 'Datos Modificados');

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
       $datosUnidad = Unidad_Curricular::findOrFail($id);
        $datosUnidad->delete();
    }
}
