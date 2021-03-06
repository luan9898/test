<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = true;
    protected $fillable = ['username','title','description'];
}
