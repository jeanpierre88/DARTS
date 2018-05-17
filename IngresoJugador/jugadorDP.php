<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jugador;

class jugadorDP extends Controller
{

    public function index()
    {
        return \App\jugador::all();
    }

    public function show($id)
    {
        return \App\jugador::find($id);
    }

    public function store(Request $request)
    {
        //Sirve si los name de los formularios son
        //iguales a los de los campos de la base
        return \App\jugador::create($request->all());
    }

    public function update($id, Request $request)
    {
        $registro = \App\jugador::findOrFail($id);

        $registro->update($request->all());

        return $registro;
    }

    public function destroy($id)
    {
        $registro = \App\jugador::findOrFail($id);

        $registro->delete();

        return 204;        
    }
}
