<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pnf;
use Caffeinated\Shinobi\Models\Role;
use App\Http\Requests\UsuarioRequest;
class UsuarioController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usu = User::select('users.id as id_usuario', 'users.name as nom_usuario', 'users.apellido as ape_usuario', 'users.cedula as cedu_usuario', 'users.email as email_usuario', 'pnfs.nombre as nom_pnf')
        ->join('pnfs', 'pnfs.id', '=', 'users.id_pnf')
        ->get();

        return view('usuario.index', ['usu'=> $usu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $pnf = pnf::all();

      $rol = Role::get();

      return view('usuario.create', ['pnf'=>$pnf, 'rol' =>$rol]);
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        {
            $usu = new User();
            $usu->name = request('name');
            $usu->apellido = request('apellido');
            $usu->cedula = request('cedula');
            $usu->email = request('email');
            $usu->password = bcrypt($request['password']);
            $usu->id_pnf = request('id_pnf');





            if($usu->save()){

            //guardar $roles
              $usu->roles()->sync($request->get('roles'));

              return redirect('../../usuario')->with('msj', 'Datos Registrados');

          } else{
              return back()->with('Errormsj', 'Error al Ejecutar la Operación');

          }

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
     $datosPnf = pnf::all();
     $rol = Role::get();

     return view('usuario.edit', ['usu'=> user::findOrFail($id),'datosPnf'=>$datosPnf, 'rol' => $rol]);
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
        $usu = User::findOrFail($id);
        $usu->name = $request->get('name');
        $usu->apellido = $request->get('apellido');
        $usu->cedula = $request->get('cedula');
        $usu->email = $request->get('email');
        $usu->password = bcrypt($request['password']);
        $usu->id_pnf = $request->get('id_pnf');


        if($usu->update()){

            return redirect('../../usuario')->with('msj', 'Datos Modificados');

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
     $usu = User::findOrFail($id);
     $usu->delete();

 }
}
