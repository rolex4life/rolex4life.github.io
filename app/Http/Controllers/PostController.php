<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;
use App\PostCategory;
class PostController extends Controller
{
   
	public function viewPostAddCategory()
    {
      $category = new Category;
      $categories= $category->fetch_category();
      return view('posts.addPost' ,compact('categories')); 
    }
    public function save_post(Request $request)
    {
		
    	// if ($request->hasFile('featured_image')) {
    	// 	$featured_image = $this->imageRename($request);
    	// }
	    // else
	    // {
	    // 	$featured_image ='';
	    // }
    	
    	// dd($request->all());
  		
  		$post = Post::create([
            'users_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->content,
            'featured_image' =>  $this->imageRename($request),
            'status' => '0',
            'is_deleted' => '0',
            'is_featured' => '0',
        ]); 	
        for ($i =0; $i < count($request->categories_id) ; $i++) { 
        	$postCategory = new PostCategory;
    		$postCategory->posts_id= $post->id;
    		$postCategory->categories_id = $request->categories_id[$i];
    		$postCategory->save();
       } 	   
        return back();
    }
    public function imageRename($request)
    {
		if ($request->hasFile('featured_image')) {
			$image = $request->file('featured_image');
	        // $name = str_slug($request->title).''.$image->getClientOriginalName();
	        $featured_image = time().''.$image->getClientOriginalName();
	        $destinationPath = public_path('/uploads/articles');
	        $imagePath = $destinationPath. "/".  $featured_image;
	        $image->move($destinationPath, $featured_image);
	         return $featured_image;
		}
	   	    	return '';
    }
    public function managePost()
    {
        $post = new Post;
        $posts= $post->fetch_post();
        return view('posts.managePost',compact('posts')); 
    }
    public function showPost()
    {
        $post = new Post;
        $post->fetch_post();
       return back();
    }


}

