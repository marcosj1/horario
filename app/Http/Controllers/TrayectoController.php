<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trayecto;
use App\Pnf;
use DB;
use Illuminate\Support\Facades\Auth;
class TrayectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_pnf = Auth::User()->id_pnf;
        $est = Pnf::select('trayectos.id as id_trayecto', 'pnfs.nombre as nom_pnf', 'trayectos.nombre as nom_trayecto','trayectos.codigo as nom_codigo')
        ->join('trayectos', 'pnfs.id', '=', 'trayectos.id_pnf')
        ->where('trayectos.id_pnf', $id_pnf)
        ->get();


        return view('trayecto.index', ['est'=> $est]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esta = Pnf::all();
        return view('trayecto.create', ['esta'=>$esta]);
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
        $trayecto = new trayecto();
        $trayecto->nombre = request('nombre');
        $trayecto->codigo = request('codigo');
        $trayecto->id_pnf = $id_pnf;
        if($trayecto->save()){

            return redirect('../../trayecto')->with('msj', 'Datos Registrados');

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


        $datostrayecto = Pnf::all();
        return view('trayecto.edit', ['est'=> trayecto::findOrFail($id)],['datostrayecto'=>$datostrayecto]);
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
        $trayecto = trayecto::findOrFail($id);

        $trayecto->nombre = $request->get('nombre');
        $trayecto->codigo = $request->get('codigo');
        $trayecto->id_pnf = $id_pnf;

        if($trayecto->update()){

            return redirect('../../trayecto')->with('msj', 'Datos Modificados');

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
        $datosTrayecto = trayecto::findOrFail($id);
        $datosTrayecto->delete();
    }
}
