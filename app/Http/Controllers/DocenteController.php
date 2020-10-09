<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocenteCreateRequest;
use App\Docente;
use App\Especialidad;
use App\Categoria;
use App\Dedicacion;

class DocenteController extends Controller
{

  public function index()
  {
    $est = Docente::all();
    return view('docente.index', ['est'=> $est]);
  }





  public function create()
  {
    $Especialidad = Especialidad::all();
    $Categoria = Categoria::all();
    $Dedicacion = Dedicacion::all();

    return view('docente.create', ['Dedicacion'=>$Dedicacion,'Especialidad'=>$Especialidad,'Categoria'=>$Categoria]);
  }




  public function store(DocenteCreateRequest $request)
  {
    $docente = new Docente();
    $docente->nombre = request('nombre');
    $docente->apellido = request('apellido');
    $docente->cedula = request('cedula');
    $docente->direccion = request('direccion');
    $docente->telefono = request('telefono');
    $docente->id_especialidad = request('id_especialidad');
    $docente->id_categoria = request('id_categoria');
    $docente->id_dedicacion = request('id_dedicacion');


    if($docente->save()){

      return redirect('../../docente')->with('msj', 'Datos Registrados');

    } else{
      return back()->with('Errormsj', 'Error al Ejecutar la Operación');

    }

  }


  public function show($id)
  {
   return view('docente.show', ['est'=> Docente::findOrFail($id)]);
 }


 public function edit($id)
 {
   $datosespecialidad = Especialidad::all();
   $datoscategoria = Categoria::all();
   $datosdedicacion = Dedicacion::all();
   return view('docente.edit', ['est'=> Docente::findOrFail($id),'datosespecialidad'=>$datosespecialidad,'datosdedicacion'=>$datosdedicacion,'datoscategoria'=>$datoscategoria]);
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteCreateRequest $request, $id)
    {
      $docente = Docente::findOrFail($id);

      $docente->nombre = $request->get('nombre');
      $docente->apellido = $request->get('apellido');
      $docente->cedula = $request->get('cedula');
      $docente->direccion = $request->get('direccion');
      $docente->telefono = $request->get('telefono');
      $docente->id_especialidad = $request->get('id_especialidad');
      $docente->id_categoria = $request->get('id_categoria');
      $docente->id_dedicacion = $request->get('id_dedicacion');


      if($docente->update()){

        return redirect('../../docente')->with('msj', 'Datos Modificados');

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
      $datosDocente = Docente::findOrFail($id);
      $datosDocente->delete();








    }
  }
