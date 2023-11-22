<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Bus extends Model
{
    protected $table= "t_buses";
    use HasFactory;
    protected $fillable =[
        'num_placa',
        'num_asientos',
        'modelo',
        'piso',
        'tipo',
        'fotografia',

    ];
    //inversa
    public function propietario(){
        return $this->belongsTo('App\Models\T_Propietario');
    }
    //relacion de uno a muchos
    public function t_asiento(){
        return $this->hasMany('App\Models\T_Bus');
    }
    public function t_viajes(){
        return $this->hasMany('App\Models\T_Viaje');
    }
}
