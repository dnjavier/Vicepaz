<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'canton';
    public $primaryKey = 'id';
    public $timestamps = false;
}
