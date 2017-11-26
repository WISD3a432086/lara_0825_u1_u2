<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    protected $fillable=[
        'tittle',
        'content',
        'is_feature'
    ];
}

