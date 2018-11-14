<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'posts_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['posts_id','categories_id'];
    public $timestamps = false;
}
