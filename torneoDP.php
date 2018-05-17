<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\torneoMD;

class torneoDP extends Controller
{
    public function index()
    {
        return \App\torneoMD::all();
    }
    
    public function show($id)
    {
        return \App\torneoMD::find($id);
    }
    
    public function store(Request $request)
    {
        return \App\torneoMD::create($request->all());

    }
    public function update(Request $request,$id)
    {
        $registro=\App\torneoMD::findOrFail($id);
        $registro=\App\torneoMD::update($request->all());

        return $registro;
    }
    public function destroy($id)
    {
        $registro=\App\torneoMD::findOrFail($id);
        $registro=\App\torneoMD::delete();

        return 204;
    }

    function ver(){
        $datos = \App\torneoMD :: all();
        return $datos;
      }
    public function ingresar()
    {
        return view('ingreso_torneo');
    }
    public function guardar()
    {
        return 'hola';

    }
}
