<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Oficina extends Model
{
    protected $table= "t_oficinas";
    use HasFactory;
        //relacion de uno a muchos inversa
        public function t_departamento(){
            return $this->belongsTo('App\Models\T_Departamento');
        }
        //relacion de uno a uno
        public function t_personal(){
            return $this->hasOne('App\Models\T_Personal');
        }
          //relacion de muchos a muchos
          public function t_ruta(){
            return $this->belongsToMany('App\Models\T_Ruta');
        }
        public function t_viajes(){
            return $this->hasMany('App\Models\T_Viaje');
        }
}
