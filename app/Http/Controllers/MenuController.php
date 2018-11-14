<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use App\MenuItem;
use DB;
class MenuController extends Controller
{
  public function add_menu(Request $request)
  {


  	$menu = Menu::create($request->all());

  	return back();
  }
  public function viewAddMenu()
  { 

  	$menu = new Menu;
  	$menus= $menu->fetch_menu();
    return view('menus.addMenu' ,compact('menus'));
  	
  }
   public function viewCategoryAddMenu()
    {
      $menu = new Menu;
      $menus= $menu->fetch_menu();
      $category = new Category;
      $categories= $category->fetch_category();
      return view('category.addCategory' ,compact('menus','categories'));
      
    }
    public function showMenu()
    {
      $menu = new Menu;
      $menu->fetch_menu();
      return back();
    }
 
}
