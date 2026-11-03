<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = [
        'title',
        'description',
        'url',
        'thumbnail',
        'author_name',
        'author_image',
        'meta_title',
        'meta_description',
        'content',
       
    ];
}
