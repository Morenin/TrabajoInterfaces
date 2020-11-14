<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ce extends Model
{
    protected $fillable = [
        'word' ,
        'description',
        'ra_id',
        'task_id',
        'mark',
        'deleted'
    ];
}
