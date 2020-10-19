<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;



class RolController extends Controller
{

  public function __construct()
      {

        $this->middleware('can:rol.create')->only(['create','store']);
        $this->middleware('can:rol.index')->only(['index']);
        $this->middleware('can:rol.edit')->only(['edit', 'update']);
        $this->middleware('can:rol.show')->only(['show']);
        $this->middleware('can:rol.delete')->only(['destroy']);

      }

  public function index()
  {
    $est = Role::all();
    return view('rol.index',compact('est'));
}





public function create()
{

    $permiso = Permission::get();

   return view('rol.create', compact('permiso'));
}




public function store(Request $request)
{
    $rol = new Role($request->all());
    $rol->save();

    $rol->permissions()->sync($request->get('permisos'));


    return redirect('../../rol')->with('msj', 'Datos Registrados');
}


public function show($id)
{

    $est=   Role::findOrFail($id);
    return view('rol.show', compact('est'));
}


public function edit($id)
{
    $est = Role::findOrFail($id);

    $permiso = Permission::get();

   return view('rol.edit', compact('est','permiso'));
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

        $rol=  Role::find($id);

        $rol->update($request->all());

        $rol->permissions()->sync($request->get('permisos'));

        return redirect('../../rol')->with('msj', 'Datos Modificados');

        }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $datosEstado = Role::findOrFail($id);
      $datosEstado->delete();

      return redirect()->route('rol.index')->with('success','Registro eliminado satisfactoriamente');









    }
}
