<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostComment;
use App\Category;
class BlogController extends Controller
{
   public function index()
   {
        $menus =$this->getMenusList();
       $post = new Post;
       $posts =$post->getAllPost();
       return view('blog.index2',compact('posts','menus'));
   }
   public function blogDetail($id,$title)
   {  
       $menus =$this->getMenusList();
       $blogdetail = Post::find($id);
       $comments =PostComment::getallComments($id);
       return view('blog.blog-details',compact('blogdetail','comments','menus'));

   }

   public function getMenusList()
   {
    return Category::getMenu();
   }
}