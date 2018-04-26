<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectNivelDP extends Controller
{
    function SelNivel(Request $request)
    {
        
        switch($request->input('combobox1'))
        {
            case 1: $nivel = array( "Board"=>"board1",
                                    "CantDardos"=>6,
                                    "CantIntentos"=>3);
                break;
            case 2: $nivel = array( "Board"=>"board2",
                                    "CantDardos"=>3,
                                    "CantIntentos"=>3);
                break;
            case 3: $nivel = array( "Board"=>"board3",
                                    "CantDardos"=>3,
                                    "CantIntentos"=>2);
                break;
            case 4: $nivel = array( "Board"=>"board3",
                                    "CantDardos"=>3,
                                    "CantIntentos"=>1);
                break;
            default: $nivel = array( "Board"=>"board1",
                                    "CantDardos"=>6,
                                    "CantIntentos"=>1);
                break;
        }
    return view('SelectNivel', ['nivel' => $nivel]);
    }
    
   
    
}

?>