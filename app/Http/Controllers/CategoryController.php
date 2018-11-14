<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\MenuItem;
use App\Menu;
class CategoryController extends Controller
{

  public function add_category(Request $request)
  {
  	$category = Category::create($request->all());
  	return back();
  }


  public function insertMenuitems(Request $request)
  {
    $menu = new MenuItem;
    $menu->categories_id = $request->categories_id;
    $menu->menus_id = $request->menus_id;
    $menu->save();
    // Save and Update Functionality
    $menu->priority =$menu->id;
    $menu->update();
    return back();

    
    /*$MenuItem = MenuItem::create($request->all());
    return back();*/
  }


  public function viewAddCategory()
  {
  	$category = new Category;
  	$categories= $category->fetch_category();
    return view('category.addCategory' ,compact('categories'));
  	
  }
  public function viewPostAddCategory()
    {
      $category = new Category;
      $categories= $category->fetch_category();
      return view('posts.addPost' ,compact('categories'));
      
    }
    public function showCategory()
    {
    	$category = new Category;
    	$category->fetch_category();
    	return back();
    }
}
