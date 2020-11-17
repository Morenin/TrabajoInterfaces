<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    protected $table='cycles';
    protected $fillable = [
        'grade','name','year'
    ];
}
