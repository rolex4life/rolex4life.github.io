<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title','users_id','description','featured_image','is_deleted','is_featured','status'];
    public $timestamps = false;

    public function getAllPost()
    {
    	return Post::all();
    }
    public function fetch_post(){
    	return Post::all();
    	
    }
}

