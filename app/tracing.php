<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracing extends Model
{
    protected $fillable = ['type', 'reason', 'observation','tutor_c_id','deleted'];
}
