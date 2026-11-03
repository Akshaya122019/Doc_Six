<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name',
        'mail',
        'phone',
        'topic',
        'file',
        'file2',
        'message',
        'page',
    ];
}
