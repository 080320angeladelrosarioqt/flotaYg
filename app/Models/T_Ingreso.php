<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Ingreso extends Model
{
    protected $table= "t_ingreso";
    use HasFactory;
    //Relacion uno a muchos
    public function propietario(){
        return $this->hasMany('App\Models\T_Propietario');
    }
}
