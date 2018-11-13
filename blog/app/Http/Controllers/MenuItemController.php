<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;
use DB;
use Auth;
class MenuItemController extends Controller
{
   public function viewMenuItem()
   {  
     $menu = new MenuItem;
     $menus= $menu->fetch_menuitem();
     return view('menus.menuItems',compact('menus'));
   }
   public function showMenuItem()
   {
     $menu = new MenuItem;
     $menu->fetch_menuitem();
     return back();
   }
   public function orderList(Request $request)
   {
     $position = $_POST['position'];
     $i=1;
     foreach($position as $k=>$v){
       DB::select(DB::raw('Update menu_item SET priority="'.$i.'" WHERE id="'.$v.'"'));
     $i++;
   }

   }
}