<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assistance extends Model
{
    protected $fillable = ['student_id', 'date', 'assistance','accepted','deleted'];
}
