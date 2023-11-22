<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Personal extends Model
{
    protected $table= "t_personal";

    use HasFactory;
      //RELACION DE UNO A MUCHOS (INVERSA)
      public function t_persona(){
        return $this->belongsTo('App\Models\User');
    }
    public function t_cargo(){
        return $this->belongsTo('App\Models\T_Cargo');
    }
    //relacion de uno a muchos
    public function t_oficina(){
        return $this->belongsTo('App\Models\T_Oficina');
    }
}
