<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostComment;
use Auth;
use Response;
class PostCommentController extends Controller
{
    public function index()
    {
 	return view('comments.manageComments');
   
    }
    public function insertComment(Request $request)
    {
    	$PostComment = new PostComment;
    	$postComment->savePostComment($request);  
    }

    public function new_comment(Request $request)
    {	
    	// dd($request->all());
    	$postComment = new  PostComment;
    	$postComment->comment = $request->comment;
    	$postComment->posts_id = $request->id;
    	$postComment->users_id =Auth::id();
    	$postComment->save();
    	return Response::json(['success' => 'Send For Approval']);
   	}
}
