<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class torneoMD extends Model
{
    public $timestamps=false;
    protected $table="torneo";
    protected $filleable=array('NOMBRE','DIFICULTAD','TIPO','ESCENARIO');
}
