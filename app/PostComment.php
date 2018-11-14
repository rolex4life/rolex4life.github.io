<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{

   protected $table = 'posts_comment';
   protected $primaryKey = 'id';
   protected $fillable = ['posts_id','categories_id','parent_id','comment','status'];
   public $timestamps = false;

   public function savePostComment($request)
   {
   		$this->categories_id = $request->categories_id;
	    $this->posts_id = $request->posts_id;
	    $this->users_id = Auth::id();
	    $this->parent_id = $request->parent_id;
	    $this->comment = $request->comment;
	    $this->save();
   }

   public static function getallComments($id)
   {

       return PostComment::select('posts_comment.*','users.first_name','users.last_name')
       ->join('users','users.id' , 'posts_comment.users_id')
       ->where('posts_comment.posts_id' ,$id)->where('posts_comment.status',1)->get();

   }
}