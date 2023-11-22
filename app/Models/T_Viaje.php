<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Viaje extends Model
{
    protected $table= "t_viajes";
    use HasFactory;


    public function t_bus(){
        return $this->belongsToMany('App\Models\T_Bus');
    }
    public function t_rutas(){
        return $this->belongsToMany('App\Models\T_Ruta');
    }
    public function t_asigcond(){
        return $this->belongsToMany('App\Models\T_Asigconductor');
    }
    public function t_oficina(){
        return $this->belongsToMany('App\Models\T_Oficina');
    }
}
