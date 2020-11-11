<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    protected $fillable = ['name', 'email', 'deleted'];
}
