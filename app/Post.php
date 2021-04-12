<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    protected $fillable = [
        'username', 'lastName', 'email'
    ];
}
