<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;

use Spatie\DbDumper\Databases\MySql;
use Spatie\DbDumper\Compressors\GzipCompressor;
use Spatie\DbDumper\Exceptions\CannotStartDump;
use Spatie\DbDumper\Exceptions\CannotSetParameter;



class RespaldoRestaurarController extends Controller
{

  public function index()
  {

    return view('respaldar_restaurar.index');
}





public function create()
{

  $databaseName= 'sigoha' ;
  $userName='root';
  $password='123456';

    MySql::create()
    ->setDbName($databaseName)
    ->setUserName($userName)
    ->setPassword($password)
    ->dumpToFile('dump.sql');


}




public function store($request)
{

}


public function show($id)
{

}


public function edit($id)
{

}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
