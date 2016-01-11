<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casas extends Model
{
    protected $table = 'casa_justicia';
    public $primaryKey = 'id';
    public $timestamps = false;
}
