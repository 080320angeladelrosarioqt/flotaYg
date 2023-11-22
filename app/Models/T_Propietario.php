<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Propietario extends Model
{
    protected $table= "t_propietarios";
    use HasFactory;

    //RELACION DE UNO A MUCHOS (INVERSA)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function t_ingreso(){
        return $this->belongsTo('App\Models\T_Ingreso');
    }

    //relacion de uno a muchos
    public function t_buses(){
        return $this->belongsTo('App\Models\T_Bus');
    }
}
