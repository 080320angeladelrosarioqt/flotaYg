<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Conductor extends Model
{
    use HasFactory;
    protected $table= "t_conductores";
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function titular(){
        return $this->hasMany('App\Models\T_Asigcondutor');
    }
    public function relevo(){
        return $this->hasMany('App\Models\T_Asigcondutor');
    }
}
