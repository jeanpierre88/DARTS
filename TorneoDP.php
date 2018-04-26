<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class torneoDP extends Controller
{
  function seleccionar_torneo(Request $request)
  {
    switch($request->input('dificultad'))
    {
      case 1:$torneo= array("nombre"=>"PRINCIPIANTE","difcultad"=>1);                   
      break;
      case 2:$torneo=array("nombre"=>"MASTER","dificultad"=>2);                     
      break;
      case 3:$torneo=array("nombre"=>"DARDOS ROYALE","dificultad"=>3);
      break;
      case 4:$torneo=array("nombre"=>"PRO","dificultad"=>4);       
      break;
      case 5:$torneo=array("nombre"=>"DARDO DE ORO","dificultad"=>5);       
      break;
      default:$torneo=array();
      break;
    }
    return $torneo;

  }
  function seleccionar_escenario(Request $request)
  {
    switch($request->input('escenario'))
    {
        case 1:$escenario="GOLD";                   
        break;
        case 2:$escenario="SILVER";                     
        break;
        case 3:$escenario="COPPER";
        break;
        default:$torneo=array();
        break; 
    }
    return $escenario;

  }
  
}
