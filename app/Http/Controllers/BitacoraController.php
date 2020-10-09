<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitacora;

class BitacoraController extends Controller
{
    public function index()
    {
        $est = bitacora::all();
        return view('bitacora.index', ['est'=> $est]);
    }
}
