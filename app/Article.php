<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //add fillable fields
    protected $fillable = [
        'title', 'body'
    ];
}
