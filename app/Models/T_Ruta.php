<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Ruta extends Model
{
    protected $table= "t_ruta";
    use HasFactory;

    //relacion de muchos a muchos
    public function t_oficina(){
        return $this->belongsToMany('App\Models\T_Oficina');
    }

    //relacion  uno a muchos
    public function t_viajes(){
        return $this->hasMany('App\Models\T_Viaje');
    }
}
