<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $table = 'boleta';
    public $primaryKey = 'numero';
    public $timestamps = false;
}
