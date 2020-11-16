<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ra extends Model
{
    protected $fillable = ['number', 'description', 'module_id','deleted'];
}
