<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Cliente extends Model
{
    use HasFactory;
    protected $table= "t_clientes";

    use HasFactory;
      //RELACION DE UNO A MUCHOS (INVERSA)
      public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
