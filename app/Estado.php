<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    public $primaryKey = 'id';
    public $timestamps = false;

}
