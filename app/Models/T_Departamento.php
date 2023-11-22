<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Departamento extends Model
{
    protected $table= "t_departamentos";
    use HasFactory;

    //relacion de uno a muchos
    public function t_oficina(){
        return $this->hasMany('App\Models\T_Oficina');
    }
}
