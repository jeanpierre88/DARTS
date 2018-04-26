<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingJugadorDP extends Controller
{
    function ingreso(Request $request)
    {
        /*Seccion donde se recupera informacion
        de la base de datos para comparar
        con la informacion del nuevo jugador*/
        if($request->input('usuario') != foreach($datos as $elemento))
            {
                /*Seccion donde se almacenara al
                jugador nuevo en la base*/    
                return view('inicio');
            }
        /*En caso de existir mostrar mensaje de
        "Usuario ya existe""*/
        return view('ingJugador');
        }

    }
}
