<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $fillable = ['name', 'cycle_id', 'deleted'];
}
