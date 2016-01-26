<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $table = 'boleta';
    public $primaryKey = 'numero';
    public $timestamps = false;

    public function casa(){
    	return $this->hasOne('App\Casas', 'id', 'casa_justicia_id');
    }

    public function estado(){
    	return $this->hasOne('App\Estado', 'id', 'estado_id');
    }

    public function clasificacion(){
    	return $this->hasOne('App\Clasificacion', 'id', 'clasificacion_id');
    }

}
